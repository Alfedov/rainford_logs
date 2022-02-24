<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="../images/logo.png">
    <!-- Page Title  -->
    <title>Rainford Protect Panel</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="../css/dashlite.css?ver=2.9.0">
	<link rel="stylesheet" type="text/css" href="../css/libs/themify-icons.css"> 
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme dark-mode">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="/home" class="logo-link nk-sidebar-logo">
							<img class="logo-dark logo-img" src="../images/logo.png" srcset="../images/logo-dark2x.png 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="../images/logo.png" srcset="../images/logo.png" alt="logo-small">
                        </a>
                    </div>
					<p class="logo-sidebar">Rainford <span>Protect</span> Panel</p>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Главная</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/home" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text">Главная страница</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
								<li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Админ центр</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="/monitoring" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-server"></em></span>
                                        <span class="nk-menu-text">Мониторинг</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
								@if(Auth::user()->role == 2)
								<li class="nk-menu-item">
                                    <a href="/accounts" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Менеджер пользователей</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
								@endif
								<li class="nk-menu-item">
                                    <a href="/users" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                                        <span class="nk-menu-text">Менеджер игроков</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Администрация</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="/actions" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-package-fill"></em></span>
                                        <span class="nk-menu-text">Действия администрации</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
								<li class="nk-menu-item">
                                    <a href="/punish" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span>
                                        <span class="nk-menu-text">Выдача наказаний</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
								<li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Игроки</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="/players" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-b-uc"></em></span>
                                        <span class="nk-menu-text">Действия игроков</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
								<li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Недвижимость</h6>
                                </li><!-- .nk-menu-heading -->
								<li class="nk-menu-item">
                                    <a href="/state/house" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                                        <span class="nk-menu-text">Дома</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
								<li class="nk-menu-item">
                                    <a href="/state/business" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cc-discover"></em></span>
                                        <span class="nk-menu-text">Бизнесы</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
								<li class="nk-menu-item">
                                    <a href="/state/car" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="ti ti-truck"></em></span>
                                        <span class="nk-menu-text">Транспорт</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-dark logo-img" src="./images/logo.png.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                    <img class="logo-dark logo-img" src="./images/logo.png.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
													@if(Auth::user()->role == 1)
                                                    <div class="user-status user-status-verified" style="font-weight: bold;">
														Админстратор
													</div>
													@endif
													@if(Auth::user()->role == 2)
													<div class="user-status user-status-unverified" style="font-weight: bold;">
														Руководтсво
													</div>
													@endif
													@if(Auth::user()->role == 3)
													<div class="user-status user-status-unverified" style="font-weight: bold;">
														Разработчик
													</div>
													@endif
                                                    <div class="user-name dropdown-indicator">{{Auth::user()->name}}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner">
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="logout"><em class="icon ni ni-signout"></em><span>Выйти</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 Rainford Protect Panel. Development by <a href="https://vk.com/alfedovdev" target="_blank">ParkerDev</a>    <em class="icon ni ni-heart-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <script src="../js/bundle.js?ver=2.9.0"></script>
    <script src="../js/scripts.js?ver=2.9.0"></script>
    <script src="../js/chart-ecommerce.js?ver=2.9.0"></script>
	<script src="../js/libs/datatable-btns.js"></script>
</body>

</html>