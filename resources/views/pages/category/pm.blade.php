@extends('layouts.app')
@section('content')
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="nk-block-head nk-block-head-sm">
					<div class="nk-block-between">
						<div class="nk-block-head-content">
							<h3 class="nk-block-title page-title">Ответы на репорт</h3>
							<div class="nk-block-des text-soft">
							</div>
						</div><!-- .nk-block-head-content -->
					</div><!-- .nk-block-between -->
				</div><!-- .nk-block-head -->
				<div class="nk-block">
					<div class="nk-tb-list is-separate mb-3">
						<div class="nk-tb-item nk-tb-head">
							<div class="nk-tb-col"><span class="sub-text">NickName</span></div>
							<div class="nk-tb-col tb-col-mb"><span class="sub-text">Вопрос</span></div>
							<div class="nk-tb-col tb-col-md"><span class="sub-text">NickName Admin</span></div>
							<div class="nk-tb-col tb-col-lg"><span class="sub-text">Ответ</span></div>
							<div class="nk-tb-col tb-col-lg"><span class="sub-text">Дата</span></div>
						</div><!-- .nk-tb-item -->
						<div class="nk-tb-item">
							<div class="nk-tb-col">
								<a href="">
									<div class="user-card">
										<div class="user-info">
											<span class="tb-lead">Parker_Brandly <span class="dot dot-success d-md-none ml-1"></span></span>
										</div>
									</div>
								</a>
							</div>
							<div class="nk-tb-col tb-col-mb">
								<span class="tb-amount">Test Logs?</span>
							</div>
							<div class="nk-tb-col tb-col-md">
								<span>Parker_Brandly</span>
							</div>
							<div class="nk-tb-col tb-col-lg">
								<span>Ответ</span>
							</div>
							<div class="nk-tb-col tb-col-lg">
								<span>14.02.2022</span>
							</div>
						</div><!-- .nk-tb-item -->
					</div><!-- .nk-tb-list -->
					<div class="card">
						<div class="card-inner">
							<div class="nk-block-between-md g-3">
								<div class="g">
									<ul class="pagination justify-content-center justify-content-md-start">
										<li class="page-item"><a class="page-link" href="#">Назад</a></li>
										<li class="page-item"><a class="page-link" href="#">Дальше</a></li>
									</ul><!-- .pagination -->
								</div>
								<div class="g">
									<div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
										<div>Page</div>
										<div>
											<select class="form-select" data-search="on" data-dropdown="xs center">
												<option value="page-1">1</option>
										</div>
										<div>1</div>
									</div>
								</div><!-- .pagination-goto -->
							</div><!-- .nk-block-between -->
						</div><!-- .card-inner -->
					</div><!-- .card -->
				</div><!-- .nk-block -->
			</div>
		</div>
	</div>
</div>
@endsection