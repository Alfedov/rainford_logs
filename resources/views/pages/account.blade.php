@extends('layouts.app')
@section('content')
@if(Auth::user()->role == 2 || 3)
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Профиль: <strong class="text-primary small">{{$user->name}}</strong></h3>
                    </div>
                </div>
                <div class="nk-block nk-block-lg">
                    <div class="card">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal-info"><em class="icon ni ni-user-circle-fill"></em><span>Информация</span></a>
                            </li>
                            <li class="nav-item nav-item-trigger">
                                <a href="#" class="btn btn-icon btn-trigger" data-toggle="modal" data-target="#edit{{$user->id}}">
                                    <em class="icon ni ni-edit"></em>
                                </a>
                            </li>
                        </ul>
                        <div class="card-inner">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personal-info">
                                    <div class="nk-block">
                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">NickName</span>
                                                    <span class="profile-ud-value">{{$user->name}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Дата Регистации</span>
                                                    <span class="profile-ud-value">{{$user->created_at}}</span>
                                                </div>
                                            </div>
											<div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Email</span>
                                                    <span class="profile-ud-value">{{$user->email}}</span>
                                                </div>
                                            </div>
											<div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Потвержден</span>
                                                    @if (!$user->verifed == 1)
													<span class="profile-ud-value" style="color: red;">Нет</span>
													@else 
													<span class="profile-ud-value" style="color: lightgreen;">Да</span>
													@endif
                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- .profile-ud-list -->
                                    </div><!-- .nk-block -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card-->
                </div>
                <!--nk block lg-->
            </div>
        </div>
	</div>
	<form action="{{ route('save', $user->id) }}" class="pt-2" method="post">
		@csrf
		@method('POST')
	<div class="modal fade" role="dialog" id="edit{{$user->id}}">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
				<div class="modal-body modal-body-md">
					<h5 class="title">Редактирование пользователя</h5>
						<div class="row gy-4">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="name">NickName</label>
									<input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" maxlength="100" readonly required placeholder="Введите NickName">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="email">Email</label>
									<input type="email" class="form-control" id="email" value="{{$user->email}}" readonly required placeholder="Введите Email">
								</div>
							</div>							
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="verifed">Верификация</label>
									<select class="form-select" id="verifed" data-ui="verifed" name="verifed">
										<option value="1" {{ ($user->verifed == 1) ? 'selected' : '' }}>Верифицирован</option>
										<option value="0" {{ ($user->verifed == 0) ? 'selected' : '' }}>Не верифицирован</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="role">Должность</label>
									<select class="form-select" id="role" data-ui="role" name="role">
										<option value="1" {{ ($user->role == 1) ? 'selected' : '' }}>Администратор</option>
										<option value="2" {{ ($user->role == 2) ? 'selected' : '' }}>Руководтсво</option>
										<option value="0" {{ ($user->role == 0) ? 'selected' : '' }}>Пользователь</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
									<li>
										<button type="submit" class="btn btn-primary">Обновить данные</button>
									</li>
									<li>
										<a data-dismiss="modal" class="link link-light">Отмена</a>
									</li>
								</ul>
							</div>
						</div>
					</form>
				</div><!-- .modal-body -->
			</div><!-- .modal-content -->
		</div><!-- .modal-dialog -->    
    </div>
@endif
@endsection