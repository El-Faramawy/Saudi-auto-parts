@extends('Admin.layouts.app')
@section('page_name') تواصل معنا @endsection
@section('content')

    <!-----------------------------------Start Data Table ------------------------------------->
    <br>
    <br>
    <br>
    <div class="card mb-5 mb-xl-8 mt-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">اتصل بنا</span>
            </h3>
            {{--            <div class="card-toolbar">--}}
            {{--                <a href="{{route('add-user')}}" class="btn btn-light-primary er fs-6 px-7 py-3 ml-2">--}}
            {{--                    <span><i class="bi bi-plus"></i></span>--}}
            {{--                    تصنيف جديد</a>--}}
            {{--            </div>--}}
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
                        <th >رقم المرسل</th>
                        <th >الاسم</th>
                        <th >البريد الالكترونى</th>
                        <th >الهاتف</th>
                        <th >الرسالة</th>
                        <th >وقت الارسال</th>
                        @if(admin()->user()->can_control == 'yes')
                        <th>تحكم</th>
                        @endif
                   </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($get as $data)
                        <tr>
                            <td> {{$loop->iteration}} </td>
                            <td> {{$data->sender_id }} </td>
                            <td>
                                <a href="{{route($data->kind == 'service_requester' ? 'get_one_user' : 'get_one_service_provider' , $data->sender_id)}}"> {{$data->name}} </a>
                                 </td>
                            <td> {{$data->email}} </td>
                            <td> {{$data->phone}} </td>
                            <td> {{$data->report}} </td>
                            <td> منذ  {{$data->date[0]}} {{$data->date[1]}} </td>
                            @if(admin()->user()->can_control == 'yes')
                            <td class="">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        تحكم
                                    </a>
                                    <div class="dropdown-menu" style="color: #575962" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item cursor-pointer delete_element" data_delete="{{route('user_delete')}}" data_id="{{$data->id}}" ><i class="fa fa-trash"  style="color: #ce031b"></i> حذف</a>
                                    </div>
                                </div>
                            </td>
                            @endif

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

@endsection


