<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('packages.index')}}" class="brand-link" style="text-align: center">
        <span class="brand-text font-weight-light">Travel Offers Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
{{--                <li class="nav-item has-treeview">--}}
                <li class="nav-item">
                    <a href="{{route('itinerary_features.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-key"></i> &nbsp;
                        <p>  {{__('general.itinerary_features')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('itineraries.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-road"></i> &nbsp;
                        <p>  {{__('general.itineraries')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('features.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-star"></i> &nbsp;
                        <p>  {{__('general.features')}}</p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('includes.index')}}" class="nav-link">--}}
{{--                        <i class="nav-icon fa fa-check-circle"></i> &nbsp;--}}
{{--                        <p>  {{__('general.includes')}}</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('not-includes.index')}}" class="nav-link">--}}
{{--                        <i class="nav-icon fa fa-times-circle"></i> &nbsp;--}}
{{--                        <p>  {{__('general.not-includes')}}</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{route('addons.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-check-circle"></i> &nbsp;
                        <p>  {{__('general.addons')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('images.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-image"></i> &nbsp;
                        <p>  {{__('general.images')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('packages.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-box"></i> &nbsp;
                        <p>  {{__('general.packages')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i> &nbsp;
                        <p>  {{__('general.pages')}}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
