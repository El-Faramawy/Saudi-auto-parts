<form id="kt_modal_new_card_form" class="form" >
    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
{{--        <h4 class="pb-3">الصور</h4>--}}
        <!--end::Label-->
        <div class="row">
            @foreach($get as $data)
                <img class="col-4" style="border-radius: 10%;cursor:pointer" src="{{$data}} " alt="user" onclick="window.open(this.src)"/>
            @endforeach
        </div>
    </div>

    <!--begin::Actions-->
{{--    <div class="text-center">--}}
{{--        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-white me-3 modal_close"--}}
{{--                data-bs-dismiss="modal">الغاء--}}
{{--        </button>--}}
{{--        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-danger">--}}
{{--            <span class="indicator-label">حفظ</span>--}}
{{--            <span class="indicator-progress">Please wait...</span>--}}
{{--            --}}{{--            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>--}}
{{--        </button>--}}
{{--    </div>--}}
    <!--end::Actions-->
</form>
@extends('Admin.layouts.js')

