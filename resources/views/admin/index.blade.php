@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Finance Summary
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">จำนวนสลากในระบบทั้งหมด</span>
                                        <span class="kt-widget12__value">{{ $lotto_count_all }} ใบ</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">ขายแล้ว</span>
                                        <span class="kt-widget12__value">{{ $lotto_order_count }} ใบ</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">ยอดขาย</span>
                                        <span class="kt-widget12__value">{{ $lotto_order_sale }} บาท</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">งวดถัดไป</span>
                                        <span class="kt-widget12__value">15 May 2020</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">ขายแล้ว</span>
                                        <span class="kt-widget12__progress">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: {{ $per = ((100/$lotto_count_all)*$lotto_order_count) }}%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="kt-widget12__stat">
                                                {{ $per = ((100/$lotto_count_all)*$lotto_order_count) }}
                                            </span>
                                        </span>
                                    </div>
                                    <!-- <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Avarage Product Price</span>
                                        <span class="kt-widget12__value">$60,70</span>
                                    </div> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
