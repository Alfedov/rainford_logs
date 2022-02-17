@extends('layouts.app')
@section('content')
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="nk-block-head nk-block-head-sm">
					<div class="nk-block-between">
						<div class="nk-block-head-content">
							<h3 class="nk-block-title page-title">Менеджер пользователей</h3>
							<div class="nk-block-des text-soft">
							</div>
						</div><!-- .nk-block-head-content -->
					</div><!-- .nk-block-between -->
				</div><!-- .nk-block-head -->
				<div class="nk-block">
					<div class="nk-tb-list is-separate mb-3">
						<div class="nk-tb-item nk-tb-head">
							<div class="nk-tb-col"><span class="sub-text">NickName</span></div>
							<div class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></div>
							<div class="nk-tb-col tb-col-mb"><span class="sub-text">Должность</span></div>
							<div class="nk-tb-col tb-col-mb"><span class="sub-text">Потвержден</span></div>
							<div class="nk-tb-col tb-col-md"><span class="sub-text">Дата Регистации</span></div>
							<div class="nk-tb-col nk-tb-col-tools">	<em class="icon ni ni-more-h"></em></div>
						</div><!-- .nk-tb-item -->
						@foreach($user as $users)
						<div class="nk-tb-item">
							<div class="nk-tb-col">
								<a class="data-item" href="#" data-toggle="modal" data-target="#exampleModal{{$users->id}}">
									<div class="user-card">
										<div class="user-info">
											<span class="tb-lead">{{$users->name}} <span class="dot dot-success d-md-none ml-1"></span></span>
										</div>
									</div>
								</a>
							</div>
							<div class="nk-tb-col tb-col-mb">
								<span class="tb-amount">{{$users->email}}</span>
							</div>
							<div class="nk-tb-col tb-col-mb">
								<span class="tb-amount">{{$users->role}}</span>
							</div>
							<div class="nk-tb-col tb-col-mb">
								@if (!$users->verifed == 1)
								<span class="tb-amount">Непотвержден</span>
								@else 
								<span class="tb-amount">Потвержден</span>
								@endif
							</div>
							<div class="nk-tb-col tb-col-md">
								<span>{{$users->created_at}}</span>
							</div>
							<div class="nk-tb-col nk-tb-col-tools">
								<ul class="nk-tb-actions gx-1">
									<li>
										<div class="drodown">
											<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
											<div class="dropdown-menu dropdown-menu-right">
												<ul class="link-list-opt no-bdr">
													<li><a class="data-item" href="#" data-toggle="modal" data-target="#exampleModal{{$users->id}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div><!-- .nk-tb-item -->
						@endforeach
					</div><!-- .nk-tb-list -->
					<div class="card">
						<div class="card-inner">
							<div class="nk-block-between-md g-3">
								<div class="g">
									<ul class="pagination justify-content-center justify-content-md-start">
										
									</ul><!-- .pagination -->
								</div>
							</div><!-- .nk-block-between -->
						</div><!-- .card-inner -->
					</div><!-- .card -->
				</div><!-- .nk-block -->
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			{{$users->name}}
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>
@endsection