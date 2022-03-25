@extends('layouts.app')
@section('title', 'Главная')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Основная информация</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Statistics card section start -->
                <section id="statistics-card">
                    <div class="row">
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-eye text-info font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-bold-700">36.9k</h2>
                                        <p class="mb-0 line-ellipsis">Зарегистрировано аккаунтов</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-message-square text-warning font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-bold-700">12k</h2>
                                        <p class="mb-0 line-ellipsis">Заблокированых аккаунтов</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-shopping-bag text-danger font-medium-5"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-bold-700">1</h2>
                                        <p class="mb-0 line-ellipsis">На сервере</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
