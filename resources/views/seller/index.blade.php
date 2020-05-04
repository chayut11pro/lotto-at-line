@extends('layouts.app')

@section('content')


<div ng-controller="myController">
    <div class="row">
        <div class="col-md-12">
        	<h2>Seller </h2>
            <div class="kt-portlet kt-portlet--head-lg kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title kt-font-brand">
                            My Lotto <small>เลขที่ลงขาย</small>
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                    	<a href="{{ url('seller/lotto/create') }}" class="btn btn-success btn-sm" title="Add New Lotto">
                            <i class="fa fa-plus" aria-hidden="true"></i> ลงขาย
                        </a>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>เบอร์ที่ซื้อ</th>
                                <th>จำนวน</th>
                                <th>ราคา</th>
                                <th>ค่าส่ง</th>
                                <th>วันที่ออก</th>
                                
                            </tr>                           
                        </thead>
                        <tbody>
                            <tr ng-repeat="y in lotto">
                                <td><h2>[[y.number]]</h2></td>
                                <td>[[y.stock]]</td>
                                <td>[[y.price]]</td>
                                <td>[[y.price_lot]]</td>
                                <td>[[y.announ_date]]</td>
                            </tr>                           
                        </tbody>
                    </table>
                    
                </div>
            </div>

<!--             <div class="kt-portlet kt-portlet--head-lg kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title kt-font-brand">
                            SALE<small>ขายแล้วรอจัดส่ง</small>
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
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    [[1+2+3]] modal_id=[[modal_id]]
                
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
                                 
                </div>
            </div> -->
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
    $scope.lotto = {!! json_encode($lotto) !!};
  
});

</script>

@stop

