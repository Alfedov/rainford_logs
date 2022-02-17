@extends('layouts.admin')
@section('content')
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="nk-block-head nk-block-head-sm">
					<div class="nk-block-between">
						<div class="nk-block-head-content">
							<h3 class="nk-block-title page-title">Главная</h3>
						</div><!-- .nk-block-head-content -->
					</div><!-- .nk-block-between -->
				</div><!-- .nk-block-head -->
				<div class="nk-block">
					<div class="row g-gs">
						<div class="col-xxl-3 col-md-6">
							<div class="card h-100">
								<div class="card-inner">
									<div class="card-title-group mb-2">
										<div class="card-title">
											<h6 class="title">Пользователи</h6>
										</div>
									</div>
									<ul class="nk-store-statistics">
										<li class="item">
											<div class="info">
												<div class="title">Пользователей в системе</div>
												<div class="count">1</div>
											</div>
											<em class="icon bg-info-dim ni ni-users"></em>
										</li>					
									</ul>
								</div><!-- .card-inner -->
							</div><!-- .card -->
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .nk-block -->
			</div>
		</div>
	</div>
</div>
@endsection