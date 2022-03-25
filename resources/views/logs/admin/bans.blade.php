@extends('layouts.app')
@section('title', 'Баны')

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Баны</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                                    <li class="breadcrumb-item active">Баны</li>
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
                                                    <th>NickName</th>
                                                    <th>Reason</th>
                                                    <th>Admin</th>
                                                    <th>Time</th>
                                                    <th>Unbanned</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($bans as $ban)
                                                <tr>
                                                    <td>{{$ban->name}}</td>
                                                    <td>{{$ban->reason}}</td>
                                                    <td>{{$ban->admin}}</td>
                                                    <td>{{$ban->time}}</td>
                                                    <td>{{$ban->unbanned}}</td>
                                                </tr>
                                                </tbody>
                                                @endforeach
                                                <tfoot>
                                                <tr>
                                                    <th>NickName</th>
                                                    <th>Reason</th>
                                                    <th>Admin</th>
                                                    <th>Time</th>
                                                    <th>Unbanned</th>
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
            </div>
        </div>
    </div>
@endsection
