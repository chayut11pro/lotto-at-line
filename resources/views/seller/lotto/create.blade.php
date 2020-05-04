@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/seller') }}" title="Back"><button class="btn btn-warning kt-margin-b-20"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                <form method="post" action="{{ url('seller/lotto') }}" accept-charset="UTF-8" class="form-horizontal kt-form" enctype="multipart/form-data"> 
                    {{ csrf_field() }}
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    เพิ่ม Lotto
                                </h3>
                            </div>
                        </div>
                            <div class="kt-portlet__body">
                                <div class="form-group">
                                    <label>เลข</label>
                                    <input type="text" name="number" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>จำนวน</label>
                                    <input type="text" name="stock" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>ราคาต่อใบ</label>
                                    <input type="text" name="price" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>ค่าส่ง</label>
                                    <input type="text" name="price_lot" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>วันที่ออก</label>
                                    <input type="text" class="form-control" name="announ_date" id="kt_datepicker_1"  placeholder="Select date">
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>

//widgets/bootstrap-datepicker.js

</script>
@stop
