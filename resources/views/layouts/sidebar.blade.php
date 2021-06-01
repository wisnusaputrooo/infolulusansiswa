        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar ">
            <div class="sidebar-img">
                <a class="navbar-brand" href="https://wisnusaputro.web.id">
                    <img alt="Logo toogle" class="navbar-brand-img main-logo" src="images/Harapan-Header-Logo-dashoard.png"> 
                    <img alt="Logo Icon" class="navbar-brand-img logo" src="images/Icon-dashoard.png"></a>
                <ul class="side-menu">
                    <li class="slide">
                        <a class="side-menu__item {{ (request()->segment(1) == '/') ? 'active' : '' }}" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a class="slide-item {{ (request()->segment(2) == 'update-data') ? 'active' : '' }}" href="{{url('data-sosmed')}}">Update data Kontak</a>
                            </li>
                            <li>
                                <a class="slide-item {{ (request()->segment(2) == 'document') ? 'active' : '' }}" href="{{($loginStory->nomor_telepon == null && $loginStory->acc_facebook == null && $loginStory->acc_instagram == null && $loginStory->acc_twitter == null) ? '#' : url('document')}}">Lembar Pengumuman</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Sidebar menu-->
