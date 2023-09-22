@extends('admin.layouts.master')
@section('content')
@section('title','Dashboard') 
<div class="br-pagebody">
    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                    
                    <i class="fas fa-chalkboard-teacher tx-60 lh-0 tx-white op-7"></i>

                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">
                            Total Teacher</p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">25+</p>
                        <span class="tx-11 tx-roboto tx-white-8"></span>
                    </div>
                </div>
                <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                    <i class="fas fa-user-graduate tx-60 lh-0 tx-white op-7"></i>

                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Student
                            </p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">2500+</p>
                        <span class="tx-11 tx-roboto tx-white-8"></span>
                    </div>
                </div>
                <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                    <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">School Lab</p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">6+</p>
                        <span class="tx-11 tx-roboto tx-white-8"></span>
                    </div>
                </div>
                <div id="ch2" class="ht-50 tr-y-1 "></div>
            </div>
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                    <i class="fas fa-bed tx-60 lh-0 tx-white op-7"></i> 
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">
                            Common Room</p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">2</p>
                        <span class="tx-11 tx-roboto tx-white-8"></span>
                    </div>
                </div>
                <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
        </div><!-- col-3 -->
    </div><!-- row -->


</div><!-- br-pagebody -->
@endsection
