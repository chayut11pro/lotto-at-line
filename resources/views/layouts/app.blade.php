<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head>
        <base href="../../">
        <meta charset="utf-8" />

        <title>Lotto @Line</title>
        <meta name="description" content="Base portlet examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />


        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body ng-app="MegalensApp" class="kt-page--loading-enabled kt-page--loading kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-subheader--enabled kt-subheader--transparent kt-page--loading page-footer-fixed">

        <!-- begin::Page loader -->

        <!-- end::Page Loader -->

        <!-- begin:: Page -->

        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__brand">
                <a class="kt-header-mobile__logo" href="?page=index">
                    <img alt="Logo" width="50px" src="{{ asset('assets/img/2.png') }}" />
                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            </div>
        </div>

        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">

                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
                        <div class="kt-header__top">
                            <div class="kt-container ">

                                <!-- begin:: Brand -->
                                <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                                    <div class="kt-header__brand-logo">
                                        <a href="index.html">
                                            <img alt="Logo" width="80px" src="{{ asset('assets/img/2.png') }}" />
                                        </a>
                                    </div>
                                    <div class="kt-header__brand-nav">

                                    </div>
                                </div>

                                <!-- end:: Brand -->

    
                            </div>
                        </div>
                        <div class="kt-header__bottom">
                            <div class="kt-container ">
                                
                                
                                <!-- begin: Header Menu -->
                                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                        <ul class="kt-menu__nav ">
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                                <a href="{{ url('/buyer') }}" class="kt-menu__link k"><span class="kt-menu__link-text">Buyer</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            </li>
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                                <a href="{{ url('/seller') }}" class="kt-menu__link k"><span class="kt-menu__link-text">Seller</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            </li>
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                                <a href="{{ url('/admin') }}" class="kt-menu__link k"><span class="kt-menu__link-text">Admin</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            </li>
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                                <a href="{{ url('/logout') }}" class="kt-menu__link k"><span class="kt-menu__link-text">Logout</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                            </li>

                                            


                                            
                                        </ul>
                                    </div>
                                    <div class="kt-header-toolbar">
                                        <div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact" id="kt_quick_search_inline">
                                            <form method="get" class="kt-quick-search__form">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                                    <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close" style="display: none;"></i></span></div>
                                                </div>
                                            </form>
                                            <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px"></div>
                                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                                <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- end: Header Menu -->
                            </div>
                        </div>
                    </div>

                    <!-- end:: Header -->
                    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                            <!-- begin:: Subheader -->
                            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                                <div class="kt-container ">
                                    <div class="kt-subheader__main">
                                        
                                        <span class="kt-subheader__separator kt-hidden"></span>
                                    </div>
                                    <div class="kt-subheader__toolbar">
                                        <div class="kt-subheader__wrapper">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end:: Subheader -->

                            <!-- begin:: Content -->
                            <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                @include('layouts/flash-message')
                                @yield('content')
                            </div>

                            <!-- end:: Content -->
                        </div>
                    </div>

                    <!-- begin:: Footer -->
                    <div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
                        <div class="kt-footer__top">
                            <div class="kt-container ">
                                <div class="row">
                                    <div class="col-md-12">Tab Menu</div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-footer__bottom">
                            <div class="kt-container ">
                                <div class="kt-footer__wrapper">
                                    <div class="kt-footer__copyright">
                                        &copy; 2020 <a href="" target="_blank">Chayut Somwongintra</a>
                                    </div>
                                    <div class="kt-footer__menu">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:: Footer -->
                </div>
            </div>
        </div>

        <!-- end:: Page -->


        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>

        

        <!-- end::Scrolltop -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#3d94fb",
                        "light": "#ffffff",
                        "dark": "#282a3c",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#3d94fb",
                        "warning": "#ffb822",
                        "danger": "#fd27eb"
                    },
                    "base": {
                        "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                        "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                    }
                }
            };
        </script>

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#3d94fb",
                        "light": "#ffffff",
                        "dark": "#282a3c",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#3d94fb",
                        "warning": "#ffb822",
                        "danger": "#fd27eb"
                    },
                    "base": {
                        "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                        "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                    }
                }
            };
        </script>
        <!-- end::Global Config -->


        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
        <!--end::Global Theme Bundle(used by all pages) -->

        <script src="{{ asset('assets/plugins/angularJS/angular.js') }}"></script>
        <script src="{{ asset('assets/plugins/angularJS/app.js') }}"></script>
        <script src="{{ asset('assets/plugins/angularJS/ui-bootstrap-tpls-0.11.0.js') }}"></script>
        <script src="{{ asset('assets/plugins/angular-ui-select2/src/select2.js') }}"></script>
        <script src="{{ asset('assets/plugins/angular-utils-pagination/dirPagination.js') }}"></script>

        <!--begin::Page Scripts(used by this page) -->
        

        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/pages/crud/datatables/data-sources/html.js') }}" type="text/javascript"></script>

        <!--end::Page Scripts -->
        
        <script src="{{ asset('assets/js/pages/crud/metronic-datatable/base/html-table.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>


        @yield('script');



        <!--end::Global Theme Bundle -->
    </body>

    <!-- end::Body -->
</html>