@extends('Admin.layouts.app')
@section('page_name') المشرفين @endsection
@section('content')

    <!-----------------------------------Start Data Table ------------------------------------->
    <br>
    <br>
    <br>
    <div class="card mb-5 mb-xl-8 mt-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">مشرفين فرحه</span>
            </h3>
{{--            @if(admin()->user()->can_control == 'yes')--}}
            <div class="card-toolbar">
                <a href="{{route('add-admin')}}" class="btn btn-light-primary er fs-6 px-7 py-3 ml-2">
                    <span><i class="bi bi-plus"></i></span>
                    مشرف جديد</a>
            </div>
{{--            @endif--}}
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3 ">
            <!--begin::Table container-->
            <div class="table-responsive ">
                <!--begin::Table-->
                <table id="kt_datatable_example_5" class=" table  table-striped  table-bordered table-hover align-middle gs-0 gy-4" style="width: 100%">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder text-muted ">
                        <th >#</th>
                        <th >الاسم</th>
                        <th >البريد الالكترونى</th>
                        <th>رقم الهاتف</th>
                        <th>الصوره</th>
{{--                        @if(admin()->user()->can_control == 'yes')--}}
                        <th>تحكم</th>
{{--                        @endif--}}
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($get as $admin)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td> {{$admin->name}} </td>
                            <td> {{$admin->email}} </td>
                            <td>{{$admin->phone}}</td>
                            <td><img class="img" style="width: 50px;height: 50px;border-radius: 50%" src="{{get_user_file($admin->image)}} " alt="user" onclick="window.open(this.src)"/></td>
{{--                            @if(admin()->user()->can_control == 'yes')--}}
                            <td class="">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        تحكم
                                    </a>
                                    <div class="dropdown-menu" style="color: #575962" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item cursor-pointer" href="{{route('admin_edit',$admin->id)}}"><i class="fa fa-pen" style="color: #6d6dd5"></i>تعديل</a>
                                        <a class="dropdown-item cursor-pointer delete_element" data_delete="{{route('admin_delete')}}" data_id="{{$admin->id}}" ><i class="fa fa-trash"  style="color: #ce031b"></i> حذف</a>
                                    </div>
                                </div>
                            </td>
{{--                            @endif--}}

                        </tr>
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!-----------------------------------Start Data Table ------------------------------------->

        <!-------------------------Start DELETE modal ------------------------------------------------------------>
        <div class="modal fade" id="delete_doctor" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>حذف طبيب</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                            <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                                                    <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                                                </g>
                                                            </svg>
                        </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-3 mx-xl-15 my-3">
                        <!--begin::Form-->
                        <form id="kt_modal_new_card_form" class="form"  {{-- action="{{route('delete_doctor')}}"  --}}  method="post">
                            {{csrf_field()}}

                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <h4 class="pb-3">هل انت متاكد من حذف هذا الطبيب</h4>
                                <!--end::Label-->
                                <input type="hidden" class="form-control form-control-solid pt" name="id" id="id" value="">
                                <input type="text" disabled class="form-control form-control-solid fs-2" placeholder="" name="name" id="name" value="">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>

                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-white me-3" data-bs-dismiss="modal">الغاء</button>
                                <button type="submit" id="kt_modal_new_card_submit" class="btn btn-danger">
                                    <span class="indicator-label">تأكيد</span>
                                    <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!-------------------------End DELETE modal -------------------------------------------------------------->

@endsection

<script>
    $(document).ready(function(){
        //Show data in the delete form
        $('.delete_btn').on('click', function(e) {
            e.preventDefault()
            $('#delete_modal').modal('show')
        });
    });
</script>

