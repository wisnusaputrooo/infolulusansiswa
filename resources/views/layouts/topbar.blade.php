<div class="p-2 d-block d-sm-none navbar-sm-search">
    <!-- Form -->
    <form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
        <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div><input class="form-control" placeholder="Search" type="text">
            </div>
        </div>
    </form>
</div>
<!-- Top navbar -->
<nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>


        <!-- Brand -->
        <a class="navbar-brand pt-0 d-md-none" href="smkharapankts.sch.id">
            <img src="images/Harapan-Header-Logo-dashoard.png" class="navbar-brand-img" alt="...">
        </a>

        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3  ml-lg-auto">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div><input class="form-control" placeholder="Search" type="text">
                </div>
            </div>
        </form>

        <!-- User -->
        <ul class="navbar-nav align-items-center ">
            <li class="nav-item d-none d-md-flex">
                <div class="dropdown d-none d-md-flex mt-2 ">
                    <a class="nav-link full-screen-link pl-0 pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-md-flex">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-0" data-toggle="dropdown" href="#" role="button">
                <div class="media align-items-center">
                    <i class="fe fe-bell f-30 "></i>
                </div></a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow dropdown-menu-right">
                    <a href="#" class="dropdown-item d-flex">
                        <div>
                            <strong>Countdown selesai.</strong>
                            <div class="small text-muted">{{\Carbon\Carbon::parse('2021-06-03 16:00:00')->diffForhumans() }}</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                        <div>
                            <strong> Server Stanby.</strong>
                            <div class="small text-muted">10 Hari yang lalu</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                        <div>
                            <strong> Anda Login.</strong>
                            <div class="small text-muted">{{\Carbon\Carbon::parse($loginStory->updated_at)->diffForhumans() }}</div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="#" role="button">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="images/users.png"></span>
                    <div class="media-body ml-2 d-none d-lg-block">
                        <span class="mb-0 ">{{$loginStory->nama}}</span>
                    </div>
                </div></a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('logout')}}"><i class="ni ni-user-run"></i> <span>Logout</span></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- Top navbar-->
