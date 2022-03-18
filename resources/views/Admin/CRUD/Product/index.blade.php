@extends('Admin.layouts.app')
@section('page_name') المنتجات @endsection
@section('content')

    <!-----------------------------------Start Data Table ------------------------------------->
    <br>
    <br>
    <br>
    <div class="card mb-5 mb-xl-8 mt-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">المنتجات</span>
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
                        <th >الفيديو الاول</th>
                        <th >الفيديو الثانى</th>
                        <th >اسم المستخدم</th>
                        <th >الماركة</th>
                        <th >اللون</th>
                        <th >الوصف</th>
                        <th >العروض</th>
                        <th >الصور</th>
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
                            <td>
{{--                                <video width="200" height="200" controls>--}}
{{--                                    <source src="{{ $admin->v1 }}" type="video/mp4">--}}
{{--                                    <source src="{{ $admin->v1 }}" type="video/ogg">--}}
{{--                                </video>--}}
                                <img style="width: 50px;height: 50px;border-radius: 50%;cursor:pointer" src="{{asset('admin/imgs/vedio_image.jpg')}} " alt="user" onclick="window.open('{{$admin->vedio}}')"/>
                            </td>
                            <td>
                                <img style="width: 50px;height: 50px;border-radius: 50%;cursor:pointer" src="{{asset('admin/imgs/vedio_image.jpg')}} " alt="user" onclick="window.open('{{$admin->vedio2}}')"/>
                            </td>
                            <td>
                                @if($admin->user)
                                    <span class=" fs-3 mb-3 ">{{$admin->user->name}}</span>
                                    <p class="text-gray-700 fs-6 mb-1 fw-bolder"> {{$admin->user->phone}} </p>
                                    <p class="text-gray-700 fs-6 mb-1 fw-bolder"> {{$admin->user->city}} </p>
                                @endif
                            </td>
                            <td> {{$admin->model}} </td>
                            <td> {{$admin->color}} </td>
                            <td> {{$admin->describtion}} </td>
                            <td>
                                @if(count($admin->offers)>0)
                                    <a href="{{route('product_offers',$admin->id)}}" class="badge badge-light-primary fs-2 fw-bolder"><i class="fas fa-tasks fs-3" style="color: #0223f1"></i></a>
                                @endif
                            </td>
                            <td>
                                @if($admin->images != null)
                                    <a href="{{route('product_images',$admin->id)}}" class="badge badge-light-secondary fs-2 fw-bolder product_images"><i class="fas fa-images fs-3" style="color: #41424b"></i></a>
                                @endif
                            </td>
                            <td class="">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        تحكم
                                    </a>
                                    <div class="dropdown-menu" style="color: #575962" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item cursor-pointer delete_element" data_delete="{{route('product_delete')}}" data_id="{{$admin->id}}" ><i class="fa fa-trash"  style="color: #ce031b"></i> حذف</a>
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

    {{--    product_images model--}}
    <div class="modal fade" id="show_product_images" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>صور المنتج</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary modal_close" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                               fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"/>
                                <rect fill="#000000" opacity="0.5"
                                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                      x="0" y="7" width="16" height="2" rx="1"/>
                            </g>
                        </svg>
					</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div id="modal_images" class="modal-body scroll-y mx-3 mx-xl-15 my-3">


                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>


@endsection

@push('admin_js')
<script>
    $(document).on('click','.product_images',function (e) {
        e.preventDefault();
        var routeAction = $(this).attr('href')
        $.ajax({
            type: 'GET',
            url: routeAction,
            success: function (data) {
                $('#show_product_images').modal('show');
                $('#modal_images').html(data);
            }
        })
    })
</script>
<script>
    $(document).on('click','.modal_close',function (){
        $('#show_product_images').modal('hide');
    })
</script>
@endpush
