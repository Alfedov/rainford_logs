@extends('layouts.app')
@section('content')
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="nk-block-head nk-block-head-sm">
					<div class="nk-block-between">
						<div class="nk-block-head-content">
							<h3 class="nk-block-title page-title">Действия администраторов</h3>
							<p>Выберите категорию</p>
						</div>
					</div>
				</div>
				<div class="nk-block">
					<div class="row g-gs">
						<div class="col-sm-6 col-lg-4 col-xxl-3">
							<div class="card h-100">
								<div class="card-inner">
									<div class="d-flex justify-content-between align-items-start mb-3">
										<a href="actions/pm" class="d-flex align-items-center">
											<div class="user-avatar sq bg-purple"><span>О</span></div>
											<div class="ml-3">
												<h6 class="title mb-1">Ответы на репорт</h6>
												<p>Лог ответов на репорты</p>
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
										<a href="actions/login" class="d-flex align-items-center">
											<div class="user-avatar sq bg-purple"><span>В</span></div>
											<div class="ml-3">
												<h6 class="title mb-1">Входы/выходы</h6>
												<p>Лог входов/выходов</p>
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