<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Rainford Logs | Регистрацмя</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="../css/app.css?ver=2.9.0">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme dark-mode">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content" style="background: url(./images/bg.png) no-repeat; background-size: cover;">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Регистрацмя</h4>
                                        <div class="nk-block-des">
                                            <p>Чтобы продолжить, нужно пройти регистрацию!</p>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
									@csrf
                                    <div class="form-group">
                                        <label class="form-label" for="name">NickName</label>
                                        <div class="form-control-wrap">
                                            <input type="text" required class="form-control form-control-lg" name="name" placeholder="Введите ваш NickName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="email" required class="form-control form-control-lg" name="email" placeholder="Введите ваш Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Пароль</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" required class="form-control form-control-lg" name="password" placeholder="Введите ваш пароль">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="form-label" for="password">Повтор пароля</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" required class="form-control form-control-lg" name="password_confirmation" placeholder="Повторите ваш пароль">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Зарегистрироваться</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> У вас уже есть аккаунт? <a href="/login"><strong>Войдите</strong></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://vk.com/alfedovdev">Помощь</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <p class="text-soft">&copy; 2022 Все права защищены!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./js/bundle.js?ver=2.9.0"></script>
    <script src="./js/scripts.js?ver=2.9.0"></script>
</body>
</html>
