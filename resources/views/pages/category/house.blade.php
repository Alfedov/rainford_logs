@extends('layouts.app')
@section('content')
<div class="nk-content">
	<div class="nk-block nk-block-lg">
      <div class="nk-block-head">
          <div class="nk-block-head-content">
              <h4 class="nk-block-title">Покупка и продажа домов</h4>
          </div>
      </div>
      <div class="card card-preview">
          <div class="card-inner">
              <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                  <thead>
                      <tr class="nk-tb-item nk-tb-head">
						  <th class="nk-tb-col"><span class="sub-text">ID</span></th>
						  <th class="nk-tb-col"><span class="sub-text">ID Дома</span></th>
                          <th class="nk-tb-col"><span class="sub-text">NickName</span></th>
                          <th class="nk-tb-col tb-col-mb"><span class="sub-text">Гос.Стоимость</span></th>
                          <th class="nk-tb-col tb-col-md"><span class="sub-text">Тип</span></th>								  
                          <th class="nk-tb-col tb-col-md"><span class="sub-text">Дата</span></th>
                          <th class="nk-tb-col nk-tb-col-tools text-right">
                          </th>
                      </tr>
                  </thead>
                  <tbody>
				
                      <tr class="nk-tb-item">
						<td class="nk-tb-col tb-col-md">
							<span>1</span>
						</td>
						<td class="nk-tb-col tb-col-md">
							<span>75</span>
						</td>
                          <td class="nk-tb-col">
                              <div class="user-card">
                                  <div class="user-info">
                                      <span class="tb-lead">Parker_Brandly<span class="dot dot-success d-md-none ml-1"></span></span>
                                  </div>
                              </div>
                          </td>
                          <td class="nk-tb-col tb-col-md">
                              <span>100000$</span>
                          </td>
                          <td class="nk-tb-col tb-col-lg">
                              <span>Покупка</span>
                          </td>
						  <td class="nk-tb-col tb-col-lg">
							<span>17.02.2022</span>
						  </td>
                          <td class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                  <li>
                                      <div class="drodown">
                                          <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                              <ul class="link-list-opt no-bdr">
                                                  <li><a href=""><em class="icon ni ni-eye"></em><span>Посмотреть профиль</span></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </td>
                      </tr><!-- .nk-tb-item  -->
					  
                  </tbody>
              </table>
          </div>
      </div>
  </div> 
</div>
@endsection