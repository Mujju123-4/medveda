<div class="app-header header top-header comb-header">
    @php
        $admin = Auth::guard('admin')->user();
    @endphp
    <div class="container-fluid">
        <div class="d-flex">
            <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a><!-- sidebar-toggle-->
            <a class="header-brand" href="index.html">
                <img src="{{ asset('/assets/images/brand/logo-dark.png') }}" class="header-brand-img dark-version"
                    alt="Aronox logo">
                <img src="{{ asset('backend/images/brand/Medveda.png') }}" class="header-brand-img desktop-lgo"
                    alt="Aronox logo">
                <img src="{{ asset('/assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo"
                    alt="Aronox logo">
            </a>
            <div class="dropdown   side-nav">
                <a aria-label="Hide Sidebar" class="app-sidebar__toggle nav-link icon mt-1" data-toggle="sidebar"
                    href="#">
                    <i class="fe fe-align-left"></i>
                </a>
                <!-- sidebar-toggle-->
            </div>
            {{-- <div class="dropdown  header-option">
                <a class="nav-link icon" data-toggle="dropdown">
                    <i class="mdi mdi-application"></i> <span class="nav-span">Projects <i
                            class="fa fa-angle-down ml-1 fs-18"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                        App Design Projects
                    </a>
                    <a class="dropdown-item" href="#">
                        Web Design Projects
                    </a>
                    <a class="dropdown-item" href="#">
                        App Development Projects
                    </a>
                    <a class="dropdown-item" href="#">
                        Back-End Projects
                    </a>
                    <div class=" text-center p-2 border-top mt-3">
                        <a href="#" class="">View Projects</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="dropdown  header-setting">
                <a class="nav-link icon" data-toggle="dropdown">
                    <i class="typcn typcn-cog-outline"></i><span class="nav-span">Settings <i
                            class="fa fa-angle-down ml-1 fs-18"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                        Multi Pages
                    </a>
                    <a class="dropdown-item" href="#">
                        Mail Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        Default Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        Documentation
                    </a>
                    <div class=" text-center p-2 border-top mt-3">
                        <a href="#" class="">updated</a>
                    </div>
                </div>
            </div> --}}
            <div class="d-flex order-lg-2 ml-auto">
                {{-- <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i
                        class="fa fa-search"></i></a>
                <div class="mt-1">
                    <form class="form-inline">
                        <div class="search-element">
                            <input type="search" class="form-control header-search" placeholder="Search…"
                                aria-label="Search" tabindex="1">
                            <button class="btn btn-primary-color" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div> --}}
                <!-- SEARCH -->

                <div class="dropdown   header-fullscreen">
                    <a class="nav-link icon full-screen-link" id="fullscreen-button">
                        <i class="mdi mdi-arrow-collapse"></i>
                    </a>
                </div>
                <div class="dropdown    header-notify">
                    {{-- <a class="nav-link icon" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class=" bg-success pulse-success "></span>
                    </a> --}}
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow pt-0">
                        <div class="dropdown-header border-bottom p-4 pt-0 mb-3 w-270">
                            <div class="d-flex">
                                <h5 class="dropdown-title float-left mb-1 font-weight-semibold text-drak">Notifications
                                </h5>
                                <a href="#"
                                    class="fe fe-align-justify text-right float-right ml-auto text-muted"></a>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item d-flex pb-2 pt-2">
                            <div class="card box-shadow-0 mb-0">
                                <div class="card-body p-3">
                                    <div class="notifyimg bg-gradient-primary border-radius-4">
                                        <i class="mdi mdi-email-outline"></i>
                                    </div>
                                    <div>
                                        <div>Message Sent.</div>
                                        <div class="small text-muted">3 hours ago</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex  pb-2">
                            <div class="card box-shadow-0 mb-0 ">
                                <div class="card-body p-3">
                                    <div class="notifyimg bg-gradient-danger border-radius-4 bg-danger">
                                        <i class="fe fe-shopping-cart"></i>
                                    </div>
                                    <div>
                                        <div> Order Placed</div>
                                        <div class="small text-muted">5 hour ago</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-2">
                            <div class="card box-shadow-0 mb-0">
                                <div class="card-body p-3">
                                    <div class="notifyimg bg-gradient-success  border-radius-4 bg-success mr-2">
                                        <i class="fe fe-airplay"></i>
                                    </div>
                                    <div>
                                        <div>Your Admin launched</div>
                                        <div class="small text-muted">1 daya ago</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class=" text-center p-2 border-top mt-3">
                            <a href="#" class="">View All Notifications</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown ">
                    <a class="nav-link pr-0 leading-none" href="#" data-toggle="dropdown" aria-expanded="false">
                        {{-- <div class="profile-details mt-2">
                            <span class="mr-3 font-weight-semibold">{{ $admin->name }}</span>
                            <small class="text-muted mr-3">appdeveloper</small>
                        </div> --}}
                        <img class="avatar avatar-md brround" src="{{ asset('/assets/images/users/1.jpg') }}"
                            alt="image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow w-250">
                        <div class="user-profile border-bottom p-3">
                            {{-- <div class="user-image"><img class="user-images"
                                    src="{{ asset('/assets/images/users/1.jpg') }}" alt="image"></div> --}}
                            <div class="user-details">
                                <h4>Medveda</h4>
                                {{-- <p class="mb-1 fs-13 text-muted">AnnaSthesia@gmail.com</p> --}}
                            </div>
                        </div>
                        <a href="#" class="dropdown-item pt-3 pb-3"><i
                                class="dropdown-icon mdi mdi-account-outline text-primary "></i> My Profile</a>
                        {{-- <a href="#" class="dropdown-item pt-3 pb-3"><i
                                class="dropdown-icon mdi  mdi-message-outline text-primary"></i> Messages <span
                                class="badge badge-pill badge-success">41</span></a> --}}
                        <a href="#" class="dropdown-item pt-3 pb-3"><i
                                class="dropdown-icon  mdi mdi-settings text-primary"></i> Setting</a>
                        {{-- <a href="#" class="dropdown-item pt-3 pb-3"><i
                                class="dropdown-icon mdi mdi-help-circle-outline text-primary"></i> FAQ</a> --}}
                        <a href="{{ route('admin.logout') }}" class="dropdown-item pt-3 pb-3"><i
                                class="dropdown-icon  mdi  mdi-logout-variant text-primary"></i>Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
