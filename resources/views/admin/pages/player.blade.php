@extends('layouts.admin')
@section('content')
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="nk-block-head nk-block-head-sm">
					<div class="nk-block-between g-3">
						<div class="nk-block-head-content">
							<h3 class="nk-block-title page-title">Игрок: <strong class="text-primary small">{{ $user->Name }}</strong></h3>
						</div>
						<div class="nk-block-head-content">
							<a href="admin/accounts" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Назад</span></a>
							<a href="html/ecommerce/customers.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
						</div>
					</div>
				</div><!-- .nk-block-head -->
				<div class="nk-block">
					<div class="card">
						<div class="card-aside-wrap">
							<div class="card-content">
								<ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
									<li class="nav-item">
										<a class="nav-link active" href="#"><em class="icon ni ni-user-circle"></em><span>Информация</span></a>
									</li>
								</ul><!-- .nav-tabs -->
								<div class="card-inner">
									<div class="nk-block">
										<div class="nk-block-head">
											<h5 class="title">Персональная информация</h5>
											<p style="color: white">Основная информация</p>
										</div><!-- .nk-block-head -->
										<div class="profile-ud-list">
											<div class="profile-ud-item">
												<div class="profile-ud wider">
													<span class="profile-ud-label">NickName</span>
													<span class="profile-ud-value" style="color: white; font-weight:bold;">{{ $user->Name }}</span>
												</div>
											</div>
											<div class="profile-ud-item">
												<div class="profile-ud wider">
													<span class="profile-ud-label">Level</span>
													<span class="profile-ud-value" style="color: white; font-weight:bold;">{{ $user->pLevel }}</span>
												</div>
											</div>
											<div class="profile-ud-item">
												<div class="profile-ud wider">
													<span class="profile-ud-label">Деньги</span>
													<span class="profile-ud-value" style="color: white; font-weight:bold;">{{ $user->pCash }}</span>
												</div>
											</div>
											<div class="profile-ud-item">
												<div class="profile-ud wider">
													<span class="profile-ud-label">EXP</span>
													<span class="profile-ud-value" style="color: white; font-weight:bold;">{{ $user->pExp }}</span>
												</div>
											</div>
											<div class="profile-ud-item">
												<div class="profile-ud wider">
													<span class="profile-ud-label">Деньги [БАНК]</span>
													<span class="profile-ud-value" style="color: white; font-weight:bold;">{{ $user->pBank }}</span>
												</div>
											</div>
											<div class="profile-ud-item">
												<div class="profile-ud wider">
													<span class="profile-ud-label">Email Address</span>
													<span class="profile-ud-value" style="color: white; font-weight:bold;">{{ $user->pEmail }}</span>
												</div>
											</div>
										</div><!-- .profile-ud-list -->
									</div><!-- .nk-block -->
									<div class="nk-divider divider md"></div>
								</div><!-- .card-inner -->
							</div><!-- .card-content -->
							<div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
								<div class="card-inner-group" data-simplebar>
									<div class="card-inner">
										<h6 class="overline-title-alt mb-2">Дополнительно</h6>
										<div class="row g-3">
											<div class="col-6">
												<span class="sub-text">User ID:</span>
												<span style="color: white; font-weight:bold;">{{ $user->id }}</span>
											</div>
											<div class="col-6">
												<span class="sub-text">Email Verify:</span>
												@if (!$user->EmailStatus == 0)
												<span class="lead-text text-success">Verified</span>
												@else 
												<span class="lead-text text-danger">Unverified</span>
												@endif
											</div>
											<div class="col-6">
												<span class="sub-text">Дата регистации:</span>
												<span style="color: white; font-weight:bold;">{{ $user->pDataReg }}</span>
											</div>
										</div>
									</div><!-- .card-inner -->
								</div><!-- .card-inner -->
							</div><!-- .card-aside -->
						</div><!-- .card-aside-wrap -->
					</div><!-- .card -->
				</div><!-- .nk-block -->
			</div>
		</div>
	</div>
</div>
<div class="modal fade" role="dialog" id="profile-edit">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
			<div class="modal-body modal-body-lg">
				<h5 class="title">Update Profile</h5>
				<ul class="nk-nav nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#address">Address</a>
					</li>
				</ul><!-- .nav-tabs -->
				<div class="tab-content">
					<div class="tab-pane active" id="personal">
						<div class="row gy-4">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="full-name">Full Name</label>
									<input type="text" class="form-control form-control-lg" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="display-name">Display Name</label>
									<input type="text" class="form-control form-control-lg" id="display-name" value="Ishtiyak" placeholder="Enter display name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="phone-no">Phone Number</label>
									<input type="text" class="form-control form-control-lg" id="phone-no" value="+880" placeholder="Phone Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="birth-day">Date of Birth</label>
									<input type="text" class="form-control form-control-lg date-picker" id="birth-day">
								</div>
							</div>
							<div class="col-12">
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" id="latest-sale">
									<label class="custom-control-label" for="latest-sale">Use full name to display </label>
								</div>
							</div>
							<div class="col-12">
								<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
									<li>
										<a href="#" class="btn btn-lg btn-primary">Update Profile</a>
									</li>
									<li>
										<a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- .tab-pane -->
					<div class="tab-pane" id="address">
						<div class="row gy-4">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="address-l1">Address Line 1</label>
									<input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="address-l2">Address Line 2</label>
									<input type="text" class="form-control form-control-lg" id="address-l2" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="address-st">State</label>
									<input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="address-county">Country</label>
									<select class="form-select" id="address-county" data-ui="lg">
										<option>Canada</option>
										<option>United State</option>
										<option>United Kindom</option>
										<option>Australia</option>
										<option>India</option>
										<option>Bangladesh</option>
									</select>
								</div>
							</div>
							<div class="col-12">
								<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
									<li>
										<a href="#" class="btn btn-lg btn-primary">Update Address</a>
									</li>
									<li>
										<a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- .tab-pane -->
				</div><!-- .tab-content -->
			</div><!-- .modal-body -->
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- .modal -->
@endsection