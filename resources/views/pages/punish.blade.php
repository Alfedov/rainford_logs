@extends('layouts.app')
@section('content')
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="nk-block-head nk-block-head-sm">
					<div class="nk-block-between">
						<div class="nk-block-head-content">
							<h3 class="nk-block-title page-title">Выдача наказаний</h3>
							<p>Выберите категорию наказания</p>
						</div>
					</div>
				</div>
				<div class="nk-block">
					<div class="row g-gs">
						<div class="col-sm-6 col-lg-4 col-xxl-3">
							<div class="card h-100">
								<div class="card-inner">
									<div class="d-flex justify-content-between align-items-start mb-3">
										<a href="punish/bans" class="d-flex align-items-center">
											<div class="user-avatar sq bg-purple"><span>Б</span></div>
											<div class="ml-3">
												<h6 class="title mb-1">Баны</h6>
												<p>Лог забаненых игроков</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4 col-xxl-3">
							<div class="card h-100">
								<div class="card-inner">
									<div class="d-flex justify-content-between align-items-start mb-3">
										<a href="punish/kick" class="d-flex align-items-center">
											<div class="user-avatar sq bg-purple"><span>К</span></div>
											<div class="ml-3">
												<h6 class="title mb-1">Кики</h6>
												<p>Лог кикнутых игроков</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4 col-xxl-3">
							<div class="card h-100">
								<div class="card-inner">
									<div class="d-flex justify-content-between align-items-start mb-3">
										<a href="punish/mute" class="d-flex align-items-center">
											<div class="user-avatar sq bg-purple"><span>М</span></div>
											<div class="ml-3">
												<h6 class="title mb-1">Муты</h6>
												<p>Лог мутов игроков</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4 col-xxl-3">
							<div class="card h-100">
								<div class="card-inner">
									<div class="d-flex justify-content-between align-items-start mb-3">
										<a href="punish/jail" class="d-flex align-items-center">
											<div class="user-avatar sq bg-purple"><span>Д</span></div>
											<div class="ml-3">
												<h6 class="title mb-1">Джаил</h6>
												<p>Лог джайлов игроков</p>
											</div>
										</a>
									</div>
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