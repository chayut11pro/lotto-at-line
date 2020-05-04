@extends('layouts.app')
@section('content')
<div ng-controller="myController">
	<div class="row">
		<div class="col-md-12">
			<div class="kt-portlet kt-portlet--head-lg kt-portlet--mobile">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title kt-font-brand">
							My Lotto <small>รายการซื้อของฉัน</small>
						</h3>
					</div>
					<div class="kt-portlet__head-toolbar">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flaticon-more-1"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon flaticon2-line-chart"></i>
											<span class="kt-nav__link-text">ทั้งหมด</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon flaticon2-send"></i>
											<span class="kt-nav__link-text">ยังไม่ออก</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
											<span class="kt-nav__link-text">ถูกรางวัล</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__body">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
				</div>
			</div>

			<div class="kt-portlet kt-portlet--head-lg kt-portlet--mobile">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title kt-font-brand">
							Onsale Lotto <small>รายการ lotto ทั้งหมด</small>
						</h3>
					</div>
					<div class="kt-portlet__head-toolbar">
						<div class="kt-portlet__head-wrapper">
							<div class="kt-portlet__head-actions">
								<div class="dropdown dropdown-inline">
									<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="la la-download"></i> Export
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__section kt-nav__section--first">
												<span class="kt-nav__section-text">Choose an option</span>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-print"></i>
													<span class="kt-nav__link-text">Print</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-copy"></i>
													<span class="kt-nav__link-text">Copy</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-file-excel-o"></i>
													<span class="kt-nav__link-text">Excel</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-file-text-o"></i>
													<span class="kt-nav__link-text">CSV</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<i class="kt-nav__link-icon la la-file-pdf-o"></i>
													<span class="kt-nav__link-text">PDF</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								&nbsp;
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__body">
					[[1+2+3]] modal_id=[[modal_id]]
					<!--begin: Datatable -->
					<table class="table table-striped- table-hover table-checkable" id="kt_table_1">
						<thead>
							<tr>
								<th>เลข</th>
								<th>จำนวน</th>
								<th>ราคา/ใบ</th>
								<th>จังหวัด</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="y in info">
								<td><h2>[[y.lotto_number]]</h2></td>
								<td>[[y.quantity]]</td>
								<td>[[y.price]]</td>
								<td>[[y.province]]</td>
								<td ng-click="click_test(y.id)">
									<button data-toggle="modal" data-target="#kt_modal_4_2" class="btn btn-bold btn-label-brand btn-sm">ซื้อ</button>
								</td>
							</tr>
							
						</tbody>
					</table>
					<!--end: Datatable -->					
				</div>
			</div>
		</div>
		<!--begin::Modal-->
		<div class="modal fade" id="kt_modal_4_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">ซื้อ Lotto [[modal_id]] </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">Recipient:</label>
								<input type="text" class="form-control" id="recipient-name">
							</div>
							<div class="form-group">
								<label for="message-text" class="form-control-label">Message:</label>
								<textarea class="form-control" id="message-text"></textarea>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send message</button>
					</div>
				</div>
			</div>
		</div>
		<!--end::Modal-->
	</div>	
</div>
@stop

@section('script')

<script>
MegalensApp.controller('myController',function($scope,$modal,$log,$http){
  $scope.data = {head:'',content:''};
  $scope.perPage = 15;
  $scope.currentPage = 1;

  $scope.info = [{"id":1,"lotto_number":442371,"quantity":13,"price":90,"province":"เชียงใหม่","announce_date":"2020-05-16"},	 {"id":2,"lotto_number":580775,"quantity":4,"price":80,"province":"เชียงใหม่","announce_date":"2020-05-16"},
  		{"id":3,"lotto_number":459635,"quantity":9,"price":100,"province":"กรุงเทพ","announce_date":"2020-05-16"}]
  

  $scope.click_test = function(id) {
      console.log(9999);
      $scope.modal_id = id;
  };
});

</script>

@stop

