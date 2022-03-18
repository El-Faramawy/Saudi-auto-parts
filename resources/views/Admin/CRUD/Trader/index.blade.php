@extends('Admin.layouts.app')
@section('page_name') التجار @endsection
@section('content')

    <!-----------------------------------Start Data Table ------------------------------------->
    <br>
    <br>
    <br>
    <div class="card mb-5 mb-xl-8 mt-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">التجار</span>
            </h3>
{{--            <div id="excel" class="card-toolbar" style="margin-right: auto;">--}}
{{--                <a  class="btn btn-secondary er fs-6 px-7 py-3 ml-2">--}}
{{--                    <span><i class="fa fa-file-excel"></i></span>--}}
{{--                    تصدير اكسيل</a>--}}
{{--            </div>--}}
{{--            @if(admin()->user()->can_control == 'yes')--}}
{{--            <div class="card-toolbar">--}}
{{--                <a href="{{route('add-trader')}}" class="btn btn-light-primary er fs-6 px-7 py-3 ml-2">--}}
{{--                    <span><i class="bi bi-plus"></i></span>--}}
{{--                    تاجر جديد</a>--}}
{{--            </div>--}}
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
                        <th >الصورة</th>
                        <th >الاسم</th>
                        <th >المدينة</th>
                        <th >رقم الهاتف</th>
{{--                        <th >حظر</th>--}}
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
                            <td><img class="img" style="width: 50px;height: 50px;border-radius: 50%" src="{{$admin->image}} " alt="user" onclick="window.open(this.src)"/></td>
                            <td> {{$admin->name}} </td>
                            <td> {{$admin->city}} </td>
                            <td> {{$admin->phone}} </td>
{{--                            <td>--}}
{{--                                @if($admin->bookings->count()>0)--}}
{{--                                    <a href="{{route('user_bookings',$admin->id)}}" class="badge badge-light-primary fs-2 fw-bolder"><i class="fas fa-align-right fs-3" style="color: #13a021"></i></a>--}}
{{--                                @endif--}}
{{--                            </td>--}}
{{--                            <td> <i class="fas fa-ban icon_color" style="color: {{$admin->block=='true'?'#ce031b' :'#4e4e4e'}}" ></i>  </td>--}}
{{--                            @if(admin()->user()->can_control == 'yes')--}}
                            <td class="">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        تحكم
                                    </a>
                                    <div class="dropdown-menu" style="color: #575962" aria-labelledby="dropdownMenuLink">
{{--                                        <a class="dropdown-item cursor-pointer block_element" data_block="{{$admin->block}}" data_id="{{$admin->id}}" data_delete="{{route('block_user')}}" >--}}
{{--                                            <i class="fas fa-ban" style="color: #fae204" ></i><span class="block_text"> {{$admin->block=='true'?'الغاء الحظر ' :' حظر '}} </span></a>--}}
{{--                                        <a class="dropdown-item cursor-pointer" href="{{route('trader_edit',$admin->id)}}"><i class="fa fa-pen" style="color: #6d6dd5"></i>تعديل</a>--}}
                                        <a class="dropdown-item cursor-pointer delete_element" data_delete="{{route('trader_delete')}}" data_id="{{$admin->id}}" ><i class="fa fa-trash"  style="color: #ce031b"></i> حذف</a>
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

@endsection


