@extends('Admin.layouts.app')
@section('page_name') العروض @endsection
@section('content')

    <!-----------------------------------Start Data Table ------------------------------------->
    <br>
    <br>
    <br>
    <div class="card mb-5 mb-xl-8 mt-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">العروض</span>
            </h3>
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
{{--                        <th >اسم المنتج</th>--}}
                        <th >اسم المستخدم</th>
                        <th >اسم الشركة</th>
                        <th >العرض</th>
                        <th >الحالة</th>
                        <th >الرسائل</th>
                        <th>تحكم</th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($get as $admin)
                        <tr>
                            {{--                            <td> {{$loop->iteration}} </td>--}}
                            <td> {{$admin->id}} </td>
{{--                            <td>--}}
{{--                                @if($admin->product)--}}
{{--                                    <span class=" fs-3 mb-3 ">{{$admin->product->name}}</span>--}}
{{--                                @endif--}}
{{--                            </td>--}}
                            <td>
                                @if($admin->user)
                                    <span class=" fs-3 mb-3 ">{{$admin->user->name}}</span>
                                    <p class="text-gray-700 fs-6 mb-1 fw-bolder"> {{$admin->user->phone}} </p>
                                    <p class="text-gray-700 fs-6 mb-1 fw-bolder"> {{$admin->user->city}} </p>
                                @endif
                            </td>
                            <td>
                                @if($admin->company)
                                    <span class=" fs-3 mb-3 ">{{$admin->company->name}}</span>
                                    <p class="text-gray-700 fs-6 mb-1 fw-bolder"> {{$admin->company->phone}} </p>
                                    <p class="text-gray-700 fs-6 mb-1 fw-bolder"> {{$admin->company->city}} </p>
                                @endif
                            </td>
                            <td> {{$admin->offer}} </td>
                            <td>
                                @if($admin->State == 'accepted') <span class="badge badge-light-primary fs-8 fw-bolder">مقبول</span>
                                @elseif($admin->State == 'done') <span class="badge badge-light-success fs-8 fw-bolder">منتهى</span>
                                @else <span class="badge badge-light-info fs-8 fw-bolder">جديد</span>
                                @endif
                            </td>
                            <td>
                                @if(count($admin->messages)>0)
                                    <a href="{{route('offer_messages',$admin->id)}}" class="badge badge-light-success fs-2 fw-bolder"><i class="fas fa-comments fs-3" style="color: #078909"></i></a>
                                @endif
                            </td>
                            <td class="">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        تحكم
                                    </a>
                                    <div class="dropdown-menu" style="color: #575962" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item cursor-pointer delete_element" data_delete="{{route('offer_delete')}}" data_id="{{$admin->id}}" ><i class="fa fa-trash"  style="color: #ce031b"></i> حذف</a>
                                    </div>
                                </div>
                            </td>
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


