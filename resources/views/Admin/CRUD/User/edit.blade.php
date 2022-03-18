@extends('Admin.layouts.app')
@section('page_name') المستخدمين @endsection
@section('content')
    <div class="main_cotent">
        <div class="box" style="margin: 25px 0;">


            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"> تعديل المستخدم</h3>
                </div>
                <hr><br>
                <!-- /.box-header -->
                <form method="POST" action="{{route('store.user_update')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{--                    <input name="_token" type="hidden" value="sSfedSAmdwxno23r3PS9EJkR1kgoFfXukhDOHJ9o">--}}
                    @csrf
                    <input name="id" type="hidden" value="{{$user->id}}">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">الإسم:</label>
                            <input class="form-control" name="name" type="text" id="name" placeholder="الإسم..." value="{{$user->name}}">
                        </div>
                        <div class="form-group col-6">
                            <label for="name">المدينة:</label>
                            <input class="form-control" name="city" type="text" id="name" placeholder="المدينة..." value="{{$user->city}}" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="name">رقم الهاتف:</label>
                            <input class="form-control numbersOnly" name="phone" type="text" id="name" placeholder="رقم الهاتف..." value="{{$user->phone}}" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="name">كلمة السر:</label>
                            <input class="form-control" name="password" type="password" id="name" placeholder="*******">
                        </div>
                        <div class="form-group col-6">
                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <h4 class="pb-3">الصورة</h4>
                                <!--end::Label-->
                                <div class="col-lg-8 text-center">
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{url('admin')}}/assets/media/avatars/blank.png)">
                                        <div class="image-input-wrapper w-250px h-250px" style="background-image: url({{$user->image}})"></div>
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تغيير الصورة">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                        </label>
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                    </div>
                                    <div class="form-text">انواع الملفات المتاحة : png, jpg, jpeg.</div>
                                </div>

                            </div>


                        </div>



                    </div>

                    <div style="text-align: center" class="mt-5">
                        <input class="btn btn-info col-2 text-center" style="font-size: medium" type="submit" value="تأكيد">
                    </div>
                </form>


            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->



    </div>
    {{--    </div>--}}

@endsection

