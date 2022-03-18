{{--@extends('Admin.layouts.app')--}}
{{--@section('content')--}}
{{--    <div class="m-content">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-12 col-lg-8">--}}
{{--                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">--}}
{{--                    <div class="m-portlet__head">--}}
{{--                        <div class="m-portlet__head-tools">--}}
{{--                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">--}}
{{--                                <li class="nav-item m-tabs__item">--}}
{{--                                    <a class="nav-link m-tabs__link active" data-toggle="tab" role="tab">--}}
{{--                                        <i class="flaticon-share m--hide"></i>--}}
{{--                                        البروفايل--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="tab-content">--}}
{{--                        <div class="tab-pane active" id="m_user_profile_tab_1">--}}
{{--                            <form class=""  action="{{route('store-profile')}}" method="post" enctype="multipart/form-data">--}}
{{--                                @csrf--}}
{{--                                <div class="m-portlet__body">--}}
{{--                                    <div class="form-group m-form__group m--margin-top-10 m--hide">--}}
{{--                                        <div class="alert m-alert m-alert--default" role="alert">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <div class="col-10 ml-auto">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <label for="example-text-input" class="col-2 col-form-label">الإسم</label>--}}
{{--                                        <div class="col-7">--}}
{{--                                            <input class="form-control m-input" required name="name" type="text" value="{{admin()->user()->name}}" >--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <label for="example-text-input"  class="col-2 col-form-label">البريد الإلكترونى</label>--}}
{{--                                        <div class="col-7">--}}
{{--                                            <input class="form-control m-input" required name="email" type="text" value="{{admin()->user()->email}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <label for="example-text-input" class="col-2 col-form-label">كلمة السر</label>--}}
{{--                                        <div class="col-7">--}}
{{--                                            <input class="form-control m-input"  name="password" type="password" placeholder="*******">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="m-portlet__foot m-portlet__foot--fit">--}}
{{--                                    <div class="m-form__actions">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-2">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-7 text-center">--}}
{{--                                                <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom col-5">حفظ</button>&nbsp;&nbsp;--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane " id="m_user_profile_tab_2">--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane " id="m_user_profile_tab_3">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('Admin.layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="m-content">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                ملفك الشخصى
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">
                                    <img width="120px" height="120px" src="{{get_file(admin()->user()->image)}}" alt="{{admin()->user()->name}}">
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">{{admin()->user()->name_ar}}</span>
                                <a href="" class="m-card-profile__email m-link">{{admin()->user()->email}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                        <i class="flaticon-share m--hide"></i>
                                        البروفايل
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_user_profile_tab_1">
                            <form class=""  action="{{route('store-profile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">الإسم</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" required name="name" type="text" value="{{admin()->user()->name}}" >
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input"  class="col-2 col-form-label">البريد الإلكترونى</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" required name="email" type="text" value="{{admin()->user()->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">رقم الهاتف</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" required name="phone" type="number" value="{{admin()->user()->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">كلمة السر</label>
                                        <div class="col-7">
                                            <input class="form-control m-input"  name="password" type="password" placeholder="*******">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">الصورة</label>
{{--                                        <div class="col-7">--}}
{{--                                            <input type="file" name="image"  id="input-file-now-custom-1" class="dropify" style="border-radius: 20px"--}}
{{--                                                   data-default-file="{{get_file(admin()->user()->image)}}" >--}}
{{--                                        </div>--}}

                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{url('admin')}}/assets/media/avatars/blank.png)">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{get_user_file(admin()->user()->image)}})"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تغيير الصورة">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" value=""/>
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                            </div>
                                            <div class="form-text">انواع الملفات المتاحة : png, jpg, jpeg.</div>
                                        </div>

                                    </div>




                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-7 text-center">
                                                <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom col-5">حفظ</button>&nbsp;&nbsp;
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane " id="m_user_profile_tab_2">
                        </div>
                        <div class="tab-pane " id="m_user_profile_tab_3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

