<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instagram;
use DB;
use Illuminate\Http\Request;
use Image;

class InstagramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $rs = Instagram::orderBy('id', 'desc')->simplePaginate(5);
        return view('admin.instagram.index', compact('rs'));
    }

    public function destroy($id)
    {
        Instagram::destroy($id);
        return back()->with('success', 'ลบรูปภาพสำเร็จ!!');
    }

    public function ajaxSwitchStatus()
    {
        $statusArray = array("true" => "1", "false" => "0");
        $status      = $statusArray[$_GET['status']];

        DB::table($_GET['table'])
            ->where('id', $_GET['id'])
            ->update(['status' => $status]);

        // ถ้า $_GET['table'] = product_items ให้ลบข้อมูลในตระกร้าออกด้วย
        if ($_GET['table'] == 'product_items') {
            DB::table('carts')
                ->where('product_item_id', $_GET['id'])
                ->delete();
        }
    }

    public function ajaxGetInstagramData()
    {
        // apikey ได้มาจาก https: //rapidapi.com/restyler/api/instagram40/endpoints (free plan limit 100 request)
        // ถ้าไม่ใส่ api key รีเฟรชทีเดียวโดนทาง ig บล้อกไอพีเลย

        $instagram = new \InstagramScraper\Instagram();
        $instagram->setRapidApiKey('0ecdb7ded0msh152aaee73c132eep1a0ca3jsn7ef2de556fa4');
        $nonPrivateAccountMedias = $instagram->getMedias('goldcurrybkk');
        // dd($nonPrivateAccountMedias);

        foreach ($nonPrivateAccountMedias as $item) {
            $imgPath = $item->getimageHighResolutionUrl();
            $this->storeImage($imgPath);
        }

        return true;
    }

    public function storeImage($imgPath)
    {
        $filename = explode('/', parse_url($imgPath, PHP_URL_PATH));
        $filename = end($filename);

        $rs = Instagram::select('id')->where('image', $filename)->first();
        // ถ้ายังไม่มีค่าใน DB
        if (empty($rs->id)) {
            Image::make($imgPath)->save(public_path('instagram/' . $filename));
            // บันทึกลงฐานข้อมูล
            Instagram::updateOrCreate(
                ['image' => $filename],
                ['status' => 1]
            );
        }
    }
}
