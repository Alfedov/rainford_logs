@extends('layouts.app')
@section('content')
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="nk-block-head nk-block-head-sm">
					<div class="nk-block-between">
						<div class="nk-block-head-content">
							<h3 class="nk-block-title page-title">Главная</h3>
						</div>
					</div>
				</div>
				<div class="nk-block">
					<div class="row g-gs">
						<div class="col-xxl-3 col-sm-6">
							<div class="card">
								<div class="nk-ecwg nk-ecwg6">
									<div class="card-inner">
										<div class="card-title-group">
											<div class="card-title">
												<h6 class="title">Всего пользователей в системе:</h6>
											</div>
										</div>
										<div class="data">
											<div class="data-group">
												<div class="amount" style="float: left;"><em class="icon ni ni-users-fill"></em>&nbsp;&nbsp;{{ $user->count() }}</div>
											</div>
										</div>
									</div><!-- .card-inner -->
								</div><!-- .nk-ecwg -->
							</div><!-- .card -->
						</div><!-- .col -->
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="driver"></div>
						<div class="col-sm-6 col-lg-4 col-xxl-3">
							<div class="card h-100">
								<div class="card-inner">
									<div class="d-flex justify-content-between align-items-start mb-3">
										<a class="d-flex align-items-center">
											<div class="user-avatar sq bg-purple"><span>A</span></div>
											<div class="ml-3">
												<h6 class="title mb-1">Администрация</h6>
												<span class="sub-text">4 Подкатегории</span>
											</div>
										</a>
									</div>
									<p>Логи администраторов</p>
									<ul class="d-flex flex-wrap g-1">
										<li><span class="badge badge-dim badge-primary">Действия</span></li>
										<li><span class="badge badge-dim badge-danger">Выдача наказаний</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4 col-xxl-3">
							<div class="card h-100">
								<div class="card-inner">
									<div class="d-flex justify-content-between align-items-start mb-3">
										<a class="d-flex align-items-center">
											<div class="user-avatar sq bg-purple"><span>И</span></div>
											<div class="ml-3">
												<h6 class="title mb-1">Игроки</h6>
												<span class="sub-text">1 Подкатегории</span>
											</div>
										</a>
									</div>
									<p>Логи игроков</p>
									<ul class="d-flex flex-wrap g-1">
										<li><span class="badge badge-dim badge-primary">Действия</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection