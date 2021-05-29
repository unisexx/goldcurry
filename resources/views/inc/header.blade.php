<!-- ======= Header ======= -->
<header>
    <div class="toolbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-3 col-sm-3 col-3">
                    <nav class="navbar navbar-expand-lg navbar-light nav-menu">
                        <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('shopinfo') }}">Shop Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('menu') }}">Menu</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('franchise') }}">Franchise</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('contact-us') }}">Contact us</a></li>
                            </ul>
                            <!--
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            -->
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-7 col-sm-7 col-7">
                    <div class="toolbar-sl-share d-flex justify-content-end">
                        <ul class="p-0">
                            <li><a href="#"><img src="{{ asset('goldcurry/images/icon-instagram.png') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('goldcurry/images/icon-facebook.png') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('goldcurry/images/icon-line.png') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
