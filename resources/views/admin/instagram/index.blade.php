@extends('adminlte::page')

@section('title', 'Instagram')

@section('content_header')
<h1>Instagram</h1>
@stop

@section('content')
<div class="card">

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="card-header">
        <h3 class="card-title">ภาพจาก Instagram</h3>
        <div class="card-tools">
            <button id="getIgData" type="button" class="btn btn-block btn-primary">อัพเดทภาพ <i class="fas fa-sync"></i></button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>รูป</th>
                    {{-- <th>จัดการ</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($rs as $item)
                    <tr>
                        <td>
                            <input class="switch_status" data-id="<?php echo $item->id?>" data-tb="instagrams" type="checkbox" @if(@$item->status == 1) checked @endif data-bootstrap-switch>
                        </td>
                        <td><img src="{{ asset('instagram/'.$item->image) }}" height="100"></td>
                        <td>
                            <form method="POST" action="{{ url('admin/instagram/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-sm btn-danger" title="ลบรายการนี้" onclick="archiveFunction()">
                                    ลบ
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

<div class="pagination-wrapper">
            {!! $rs->appends(@$_GET)->render() !!}
        </div>
@stop

@section('js')
<script>
// switch ปิด-เปิดสถานะ
$("input[data-bootstrap-switch]").each(function(){
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
});

// ajax ปิด-เปิดสถานะ
$(document).on('switchChange.bootstrapSwitch', ".switch_status", function () {
    $.ajax({
        url: "{{ url('admin/ajaxSwitchStatus') }}",
        data:{ table : $(this).data('tb'), id : $(this).data('id'), status : $(this).prop('checked') },
        dataType: "json",
    });
});

// ajax ดึงรูปจาก Instagram
$(document).on('click', "#getIgData", function () {
    $('.fa-sync').addClass('fa-spin');
    $.ajax({
        url: "{{ url('admin/ajaxGetInstagramData') }}", 
        success: function(result){
            location.reload();
        }
    });
});

function archiveFunction() {
    event.preventDefault(); // prevent form submit
    var form = event.target.form; // storing the form
    console.log(form);
    Swal.fire({
    title: 'ยืนยันการลบข้อมูล?',
    text: "หลังจากที่ลบไปแล้วจะไม่สามารถดึงข้อมูลนี้กลับมาได้อีก!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'ลบเลย',
    cancelButtonText: 'ยกเลิก'
    }).then((result) => {
        if (result.value) {
            form.submit();
        }
    });
}
</script>
@endsection
