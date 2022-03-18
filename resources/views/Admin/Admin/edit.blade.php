@extends('Admin.layouts.app')
@section('page_name') المشرفين @endsection
@section('content')
    <style>
        .fieldData {
            float: left;
            width: 75%;
            padding: 0 15px;
        }
        .checkboxThree {
            font-family: Arial, Helvetica, sans-serif;
            width: 80px;
            height: 30px;
            background: #fff;
            margin: 10px 0;
            border: solid 1px #CCCCCC;
            border-radius: 50px;
            position: relative;
        }
        .checkboxThree:before {
            content: 'نعم';
            position: absolute;
            top: 6px;
            left: 10px;
            height: 2px;
            color: #3c8dbc;
            font-size: 12px;
        }
        input[type=checkbox], input[type=radio] {
            visibility: hidden;
        }
        .checkboxThree input[type=checkbox]:checked+label {
            left: 40px;
            background: #3c8dbc;
        }
        .checkboxThree:after {
            content: 'لا';
            position: absolute;
            top: 6px;
            left: 50px;
            height: 2px;
            color: #111;
            font-size: 12px;
            color: #999;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }
        div {
            display: block;
        }
        input[type=checkbox], input[type=radio] {
            box-sizing: border-box;
            padding: 0;
        }
        button, input {
            overflow: visible;
        }

        element.style {
        }
        input[type=checkbox], input[type=radio] {
            visibility: hidden;
        }
        input[type=checkbox], input[type=radio] {
            box-sizing: border-box;
            padding: 0;
        }
        button, input {
            overflow: visible;
        }
        button, input, optgroup, select, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
        label:not(.form-check-label):not(.custom-file-label) {
            font-weight: 700;
        }
        .checkboxThree label {
            display: block;
            width: 30px;
            height: 15px;
            border-radius: 50px;
            transition: all .5s ease;
            cursor: pointer;
            position: absolute;
            top: 7px;
            z-index: 1;
            left: 10px;
            background: #999;
        }
        label {
            width: 100%;
            margin-bottom: 0;
        }
    </style>

    <div class="main_cotent">
        <div class="box" style="margin: 25px 0px;">


            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"> تعديل المشرف</h3>
                </div>
                <hr><br>
                <!-- /.box-header -->
                <form method="POST" action="{{route('store.admin_update')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{--                    <input name="_token" type="hidden" value="sSfedSAmdwxno23r3PS9EJkR1kgoFfXukhDOHJ9o">--}}
                    @csrf
                    <input name="id" type="hidden" value="{{$user->id}}">
                    <div class="row">
                    <div class="form-group col-6">
                        <label for="name">الإسم:</label>
                        <input class="form-control" name="name" type="text" id="name" placeholder="الإسم..." value="{{$user->name}}">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">البريد الإلكترونى:</label>
                        <input class="form-control" name="email" type="email" id="name" placeholder="البريد الإلكترونى..." value="{{$user->email}}">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">رقم الهاتف:</label>
                        <input class="form-control numbersOnly" name="phone" type="text" id="name" placeholder="رقم الهاتف..." value="{{$user->phone}}">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">كلمة السر:</label>
                        <input class="form-control" name="password" type="password" id="name" placeholder="*******">
                    </div>
{{--                    <div class="form-group col-6 row ">--}}
{{--                        <label style="display: inline-block;" class="col-5 p-3" for="name">التحكم فى البيانات:</label>--}}
{{--                        <div class="fieldData col-6 p-1">--}}
{{--                            <div class="checkboxThree ">--}}
{{--                                <input type="checkbox" {{$user->can_control == 'yes'?'checked':''}}  value="1" id="Checkbox_is_default" name="can_control">--}}
{{--                                <label for="Checkbox_is_default"></label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="form-group col-12">
                        <label for="image">الصوره</label>
{{--                        <input type="file" name="image"  id="input-file-now-custom-1" class="dropify" style="border-radius: 20px"--}}
{{--                               data-default-file="{{get_file($user->image)}}" >--}}
                        <div class="col-lg-8">
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{url('admin')}}/assets/media/avatars/blank.png)">
                                <div class="image-input-wrapper w-250px h-250px" style="background-image: url({{get_user_file($user->image)}})"></div>
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
