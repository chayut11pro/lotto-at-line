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
					<table>
						<thead>
							<tr>
								<th>เลข</th>
								<th>จำนวน</th>
								<th>ราคา/ใบ + ค่าส่ง</th>
								<th>จังหวัด</th>
								<th>Action</th>
								
							</tr>							
						</thead>
						<tbody>
							<tr ng-repeat="y in info">
								<td><h2>[[y.lotto_number]]</h2></td>
								<td>[[y.quantity]]</td>
								<td><b>[[y.price]]</b> (+[[y.shipping]])</td>
								<td>[[y.province]]</td>
								<td ng-click="select(y.id,y.lotto_number,y.quantity,y.price,y.shipping)">
									<button data-toggle="modal" data-target="#kt_modal_4_2" class="btn btn-bold btn-label-brand btn-sm">ซื้อ
									</button>
								</td>
							</tr>							
						</tbody>
					</table>
					
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
								<th>ราคา/ใบ + ค่าส่ง</th>
								<th>จังหวัด</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="y in info">
								<td><h2>[[y.lotto_number]]</h2></td>
								<td>[[y.quantity]]</td>
								<td><b>[[y.price]]</b> (+[[y.shipping]])</td>
								<td>[[y.province]]</td>
								<td ng-click="select(y.id,y.lotto_number,y.quantity,y.price,y.shipping)">
									<button data-toggle="modal" data-target="#kt_modal_4_2" class="btn btn-bold btn-label-brand btn-sm">ซื้อ
									</button>
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
						<h5 class="modal-title" id="exampleModalLabel">ซื้อ Lotto [[buy_id]] </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div ng-show="step==1">
								<div class="form-group row">
									<label for="example-text-input" class="col-2 col-form-label">เลขที่เลือก</label>
									<div class="col-10">
										<h3>[[buy_lotto_number]]</h3>
									</div>
								</div>
								<div class="form-group row">
									<label for="example-text-input" class="col-2 col-form-label">ใบละ</label>
									<div class="col-10">
										<h5>[[buy_price]]</h5>
									</div>
								</div>
								<div class="form-group row">
									<label for="example-text-input" class="col-2 col-form-label">จำนวน</label>
									<div class="col-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button class="btn btn-secondary" ng-click="less_buy_q()" type="button">-</button>
											</div>
											<input type="text" ng-model="buy_q" class="form-control" >
											<div class="input-group-append">
												<button class="btn btn-secondary" ng-click="more_buy_q(buy_quantity_limit)" type="button">+</button>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="example-text-input" class="col-2 col-form-label">ค่าส่ง</label>
									<div class="col-10">
										<h5>[[buy_shipping]] บาท</h5>
									</div>
								</div>
								<div class="form-group row">
									<label for="example-text-input" class="col-2 col-form-label">ราคารวม</label>
									<div class="col-10">
										<h3>[[total=buy_price*buy_q+buy_shipping]] บาท</h3>
									</div>
								</div>
							</div>
							<div ng-show="step==2">
								 เลือกช่องทางการชำระเงิน
								 <li>ไทยพานิชย์</li>
								 <li>กสิกร</li>
							</div>

						</form>
					</div>
					<div class="modal-footer" ng-show="step==1">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" ng-click="step=2">ชำระเงิน</button>
					</div>
					<div class="modal-footer" ng-show="step==2">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="confirm_purchase(buy_id,buy_q,total,buy_shipping,buy_lotto_number,buy_price)">ยืนยันสั่งซื้อ</button>
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
  $scope.buy_q = 1; ///จำนวนตั้งต้น

  $scope.info = [{"id":1,"lotto_number":442371,"quantity":13,"price":90,"province":"เชียงใหม่","announce_date":"2020-05-16","shipping":40},	 {"id":2,"lotto_number":580775,"quantity":4,"price":80,"province":"เชียงใหม่","announce_date":"2020-05-16","shipping":40},
  		{"id":3,"lotto_number":459635,"quantity":9,"price":100,"province":"กรุงเทพ","announce_date":"2020-05-16","shipping":40}]
  

  $scope.click_test = function(id) {
      console.log(9999);
      $scope.modal_id = id;
  };
  $scope.select = function(id,lotto_number,quantity,price,shipping){
  	$scope.buy_id  = id
  	$scope.buy_lotto_number = lotto_number
  	$scope.buy_quantity_limit = quantity
  	$scope.buy_price = price
  	$scope.buy_shipping = shipping
  	$scope.buy_q = 1
  	$scope.step = 1
  }

  $scope.more_buy_q = function(limit){
  	if($scope.buy_q<limit){
  		$scope.buy_q = $scope.buy_q+1;
  	}else{
  		alert("สินค้าไม่เพียงพอ");
  	}
  
  }

  $scope.less_buy_q = function(){
  	$scope.buy_q = $scope.buy_q-1;
  	if($scope.buy_q<1){
  		alert("จำนวนขั้นต่ำ 1 ใบ");
  		$scope.buy_q = 1;
  	}
  }

  $scope.confirm_purchase = function(modal_id,buy_q,total,shipping,lotto_number,buy_price){
  	    var data = {
            'lotto_id': modal_id,
            'price': buy_price,
            'buy_q': buy_q,
            'total':total,
            'payment_status':1,
            'order_status':1,
            'shipping_status':1,
            'shipping_cost':shipping,
            'lotto_number':lotto_number,

        // $order->buyer_id = $request->buyer_id;
        // $order->seller_id = $request->seller_id;
     
        };
        var url = '{{url(Config::get('route').'buyer/order/confirm')}}';
        var responsePromise = $http.post(url,data);
        responsePromise.success(function(data, status, headers, config) {
            console.log(data)
        });
        responsePromise.error(function(data, status, headers, config) {
            
        });
  }
});

</script>

@stop

