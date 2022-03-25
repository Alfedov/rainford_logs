@extends('layouts.app')
@section('title', 'Смена ника')

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Смена ника</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                                    <li class="breadcrumb-item active">Смена ника</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                <tr>
                                                    <th>Old NickName</th>
                                                    <th>New NickName</th>
                                                    <th>Admin</th>
                                                    <th>Time</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>

                                                <tfoot>
                                                <tr class="end_tr">
                                                    <th>Old NickName</th>
                                                    <th>New NickName</th>
                                                    <th>Admin</th>
                                                    <th>Time</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Column selectors with Export Options and print table -->

                <!-- Scroll - horizontal and vertical table -->

                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    </div>
@endsection
