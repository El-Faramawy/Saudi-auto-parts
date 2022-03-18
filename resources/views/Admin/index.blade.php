@extends('Admin.layouts.app')
@section('page_name') الرئيسية @endsection
@section('content')
    <br>
    <br>
    <br>

    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="card-body col-xl-4">
            <!--begin::List Widget 6-->
            <div class="card card-xl-stretch mb-xl-8" style="border-radius: 15px 15px 0px 0px;">
                <!--begin::Header-->
                <div class="card-header border-0" style="background:#20224f ; border-radius: 15px 15px 0px 0px ;height:130px; margin-bottom: 30px " >
                    <h3 class="card-title fw-bolder text-white">بعض رسائل العملاء :-</h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0" >
{{--                @foreach($contacts_massages as $contacts_massage)--}}
{{--                    <!--begin::Item-->--}}
{{--                        <div class="d-flex align-items-center bg-light-success rounded p-3">--}}
{{--                            <!--begin::Icon-->--}}
{{--                            <span class="svg-icon svg-icon-warning me-5">--}}
{{--        <!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->--}}
{{--        <span class="svg-icon svg-icon-1">--}}
{{--                <i class="fa fa-envelope"></i>--}}
{{--        </span><!--end::Svg Icon-->--}}
{{--    </span>--}}
{{--                            <!--end::Icon-->--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div class="flex-grow-1 me-2">--}}
{{--                                <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">{{ $contacts_massage->name}}</a>--}}
{{--                                <span class="text-muted fw-bold d-block" style="height:30px;overflow: scroll">{{ $contacts_massage->report}}</span>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                    @endforeach--}}
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 6-->
        </div>
        <!--end::Col-->
        <div class="col-xl-8">
            <!--begin::List Widget 4-->
            <div class="card card-xl-stretch mb-5 mb-xl-8" style="height:605px;margin-top:15px;border-radius: 15px 15px 0px 0px ">
                <!--begin::Header-->
                <div class="card-header border-0" style="background:#20224f ; border-radius: 15px 15px 0px 0px ;height:130px ; margin-bottom: 30px " >
                    <h3 class="card-title fw-bolder text-white">بعض المنتجات المطلوبة :-</h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="border-0">
                                        <th class="p-0 w-100px"></th>
                                        <th class="p-0 min-w-100px"></th>
                                        <th class="p-0 min-w-140px"></th>
                                        <th class="p-0 min-w-110px"></th>
                                        <th class="p-0 min-w-50px"></th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
{{--                                    @foreach($our_Reservations as $our_Reservation)--}}
{{--                                        <tr>--}}

{{--                                            <td>--}}
{{--                                                @if($our_Reservation->user)--}}
{{--                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$our_Reservation->user->name}}</a>--}}
{{--                                                <span class="text-muted fw-bold d-block">طالب الخدمة</span>--}}
{{--                                                @endif--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                @if($our_Reservation->provider)--}}
{{--                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$our_Reservation->provider->name}}</a>--}}
{{--                                                <span class="text-muted fw-bold d-block">مقدم الخدمة</span>--}}
{{--                                                @endif--}}
{{--                                            </td>--}}
{{--                                            <td class="text-end text-muted fw-bold">{{$our_Reservation->Booking_kind}}</td>--}}
{{--                                            <td class="text-end text-muted fw-bold">{{$our_Reservation->history}}</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                @if($our_Reservation->State == 'accepted')--}}
{{--                                                    <span class="badge badge-light-success"> مقبول </span>--}}
{{--                                                @elseif($our_Reservation->State == 'refused')--}}
{{--                                                    <span class="badge badge-light-danger"> مرفوض </span>--}}
{{--                                                @elseif($our_Reservation->State == 'ended')--}}
{{--                                                    <span class="badge badge-light-primary"> منتهي</span>--}}
{{--                                                @else--}}
{{--                                                    <span class="badge badge-light-info"> جديد </span>--}}
{{--                                                @endif--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="border-0">
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-140px"></th>
                                        <th class="p-0 min-w-110px"></th>
                                        <th class="p-0 min-w-50px"></th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->

                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->

                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 4-->
        </div>

        <!--begin::Col-->
{{--        <div class="col-xxl-12" >--}}
{{--            <!--begin::Tables Widget 5-->--}}
{{--            <div class="card card-xxl-stretch mb-5 mb-xxl-8" style="border-radius:20px ">--}}
{{--                <!--begin::Header-->--}}
{{--                <div class="card-header border-0 pt-5" style="padding-bottom:30px ; background: #20224f;border-radius:15px 15px 0px 0px  ">--}}
{{--                    <h3 class="card-title align-items-start flex-column">--}}
{{--                        <span class="card-label fw-bolder fs-3 mb-1" style="color:white">مقدمين الخدمات</span>--}}
{{--                        <span class="card-label  fs-2 mb-1" style="color:white"> بعض من مقدمين الخدمات المتفاعلين</span>--}}
{{--                    </h3>--}}
{{--                </div>--}}
{{--                <!--end::Header-->--}}
{{--                <!--begin::Body-->--}}
{{--                <div class="card-body py-3" style="background:#f1f0eb">--}}
{{--                    <div class="tab-content">--}}
{{--                        <!--begin::Tap pane-->--}}
{{--                        <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">--}}
{{--                            <!--begin::Table container-->--}}
{{--                            <div class="table-responsive">--}}
{{--                                <!--begin::Table-->--}}
{{--                                <div class="card-body p-lg-17">--}}
{{--                                    <!--begin::Team-->--}}
{{--                                    <div class="mb-18">--}}
{{--                                        <!--begin::Heading-->--}}
{{--                                        <div class="text-center mb-17">--}}
{{--                                            <!--begin::Title-->--}}
{{--                                            <h3 class="fs-2hx text-dark mb-5">مقدمين الخدمات</h3>--}}
{{--                                            <!--end::Title-->--}}
{{--                                            <!--begin::Sub-title-->--}}
{{--                                            <div class="fs-5 text-muted fw-bold">--}}


{{--                                            </div>--}}
{{--                                            <!--end::Sub-title=-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Heading-->--}}
{{--                                        <!--begin::Wrapper-->--}}

{{--                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">--}}
{{--                                        @foreach($our_service_providers as $provider)--}}
{{--                                            <!--begin::Item-->--}}
{{--                                                <div class="col text-center mb-9">--}}
{{--                                                    <!--begin::Photo-->--}}
{{--                                                    <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style=" background-color:#f1f0eb;background-image:url('{{ get_user_file($provider->image)}}')"></div>--}}
{{--                                                    <!--end::Photo-->--}}
{{--                                                    <!--begin::Person-->--}}
{{--                                                    <div class="mb-0">--}}
{{--                                                        <!--begin::Position-->--}}
{{--                                                        <div class="text-muted fs-6 fw-bold">{{$provider->name}}</div>--}}
{{--                                                        <!--begin::Position-->--}}

{{--                                                        <!--begin::Name-->--}}
{{--                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-3 d-block">{{$provider->email}}</a>--}}
{{--                                                        @if($provider->bookings_count>0)--}}
{{--                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6 d-block">{{$provider->bookings_count}} حجز </a>--}}
{{--                                                         @endif--}}
{{--                                                            <!--end::Name-->--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Person-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Item-->--}}
{{--                                            @endforeach--}}
{{--                                        </div>--}}
{{--                                        <!--end::Wrapper-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Team-->--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::Table-->--}}
{{--                        </div>--}}
{{--                        <!--end::Tap pane-->--}}



{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Body-->--}}
{{--            </div>--}}
{{--            <!--end::Tables Widget 5-->--}}
{{--        </div>--}}

        <!--end::Col-->
    </div>
    <!--end::Row-->
@endsection

