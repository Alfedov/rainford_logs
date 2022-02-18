@extends('layouts.app')
@section('content')
@if(Auth::user()->role == 2 || 3)
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Профиль игрока: <strong class="text-primary small">{{$user->Name}}</strong></h3>
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
                                                    <span class="profile-ud-value">{{$user->Name}}</span>
                                                </div>
                                            </div>
											<div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Деньги [Банк]</span>
                                                    <span class="profile-ud-value">{{$user->pBank}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Дата Регистации</span>
                                                    <span class="profile-ud-value">{{$user->pDataReg}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Деньги</span>
                                                    <span class="profile-ud-value">{{$user->pCash}}</span>
                                                </div>
                                            </div>
											<div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Email</span>
                                                    <span class="profile-ud-value">{{$user->pEmail}}</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- .profile-ud-list -->
                                    </div><!-- .nk-block -->
                                    <!--div class="nk-divider divider md"></div>
                                    <div class="nk-block">
                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                            <h5 class="title">Заметки</h5>
                                            <a href="#" class="link link-sm">+ Add Note</a>
                                        </div>
                                        <div class="bq-note">
                                            <div class="bq-note-item">
                                                <div class="bq-note-text">
                                                    <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                                </div>
                                                <div class="bq-note-meta">
                                                    <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                    <span class="bq-note-sep sep">|</span>
                                                    <span class="bq-note-by">By <span>Softnio</span></span>
                                                    <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                </div>
                                            </div>
                                            <div class="bq-note-item">
                                                <div class="bq-note-text">
                                                    <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                                </div>
                                                <div class="bq-note-meta">
                                                    <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                    <span class="bq-note-sep sep">|</span>
                                                    <span class="bq-note-by">By <span>Softnio</span></span>
                                                    <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div--><!-- .nk-block -->
                                </div><!-- tab pane -->
                            </div>
                        </div>
                        <!--card inner-->
                    </div>
                    <!--card-->
                </div>
                <!--nk block lg-->
            </div>
        </div>
	</div>
	<div class="modal fade" role="dialog" id="edit{{$user->id}}">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
				<div class="modal-body modal-body-md">
					<h5 class="title">Редактирование игрока</h5>
					<form action="#" class="pt-2">
						<div class="row gy-4">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="name">NickName</label>
									<input type="text" class="form-control" id="name" name="name" value="{{$user->Name}}" maxlength="100" readonly required placeholder="Введите NickName">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="email">Email</label>
									<input type="email" class="form-control" id="email" value="{{$user->pEmail}}" readonly required placeholder="Введите Email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="game_lvl">Игровой уровень</label>
									<input type="number" class="form-control" id="game_lvl" name="game_lvl" value="{{$user->pLevel}}" required maxlength="100" placeholder="Введите уровень">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="cash">Деньги</label>
									<input type="number" class="form-control" id="cash" name="cash" required  value="{{$user->pCash}}" placeholder="Введите число">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="cash_bank">Деньги [Банк]</label>
									<input type="number" class="form-control" id="cash_bank" name="cash_bank" value="{{$user->pBank}}" required  placeholder="Введите число">
								</div>
							</div>	
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="skin">Скин</label>
									<input type="number" class="form-control" id="skin" name="skin" value="{{$user->Skin}}" required  placeholder="Введите id скина">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="admin_lvl">Админ уровень</label>
									<select class="form-select" id="admin_lvl" data-ui="admin_lvl">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="admin_tag">Админ Тег</label>
									<input type="number" class="form-control" id="admin_tag" name="admin_tag" value="" placeholder="Введите админ тег">
								</div>
							</div>
							<div class="col-md-12">
								<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
									<li>
										<button href="#" class="btn btn-primary">Обновить данные</button>
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