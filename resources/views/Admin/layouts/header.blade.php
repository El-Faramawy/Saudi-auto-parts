<?php
//$booking_count      = \App\Models\Bookingorder::where('is_read','no')->count();
//$urgent_count       = \App\Models\Urgent_service::where('is_read','no')->count();
//$report_count       = \App\Models\Reports::where('is_read','no')->count();
//?>
<!--begin::Header-->
<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
                <i class="bi bi-list fs-1"></i>
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="" class="d-lg-none" >
                <img  alt="Logo" src="{{url('/admin')}}/imgs/logo.png" class="h-40px "   />
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                        <div class="menu-item me-lg-1">
                            <a class="menu-link active py-3" href="">
                                <span class="menu-title">مرحبا بك | SAUDI AUTO PARTS</span>
                            </a>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::Toolbar wrapper-->
                <div class="topbar d-flex align-items-stretch flex-shrink-0">
                    <!--begin::Notifications-->
                    <!--end::Notifications-->
{{--                    <a class="d-flex align-items-stretch" href="{{route('show-contact')}}">--}}
{{--                        <!--begin::Menu wrapper-->--}}
{{--                        <div class="topbar-item position-relative px-3 px-lg-5" id="kt_drawer_chat_toggle" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover" title="" data-original-title=" تواصل معنا ">--}}
{{--                            <i class="bi bi-chat-right-text fs-3"></i>--}}
{{--                            @if($report_count > 0)--}}
{{--                            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 mt-4 start-50 animation-blink"></span>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <!--end::Menu wrapper-->--}}
{{--                    </a>--}}

{{--                    <a class="d-flex align-items-stretch" href="{{route('show-urgent')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover" title="" data-original-title=" الحجوزات العاجلة ">--}}
{{--                        <!--begin::Menu wrapper-->--}}
{{--                        <div class="topbar-item position-relative px-3 px-lg-5" id="kt_drawer_chat_toggle">--}}
{{--                            <i class="fas fa-fighter-jet fs-3"></i>--}}
{{--                            @if($urgent_count > 0)--}}
{{--                            <span class="bullet bullet-dot bg-danger h-6px w-6px position-absolute translate-middle top-0 mt-4 start-50 animation-blink"></span>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <!--end::Menu wrapper-->--}}
{{--                    </a>--}}

{{--                    <a class="d-flex align-items-stretch" href="{{route('booking')}}"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover" title="" data-original-title=" الحجوزات ">--}}
{{--                        <!--begin::Menu wrapper-->--}}
{{--                        <div class="topbar-item position-relative px-3 px-lg-5" id="kt_drawer_chat_toggle">--}}
{{--                            <i class="fas fa-align-left fs-3"></i>--}}
{{--                            @if($booking_count > 0)--}}
{{--                            <span class="bullet bullet-dot bg-primary h-6px w-6px position-absolute translate-middle top-0 mt-4 start-50 animation-blink"></span>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <!--end::Menu wrapper-->--}}
{{--                    </a>--}}



                    <!--begin::User-->
                    <div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                            <img src="{{get_user_file(admin()->user()->image)}}" alt=""  style="border-radius: 50%"/>
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User -->
                    <!--begin::Header menu toggle-->
{{--                    <div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">--}}
{{--                        <div class="topbar-item" id="kt_header_menu_mobile_toggle">--}}
{{--                            <i class="bi bi-text-left fs-1"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!--end::Heaeder menu toggle-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
