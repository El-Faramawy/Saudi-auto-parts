{{--<script src="{{url('/')}}/admin/assets/js/jquery.js"></script>--}}

{{--<script src="{{url('/')}}/admin/assets/plugins/global/plugins.bundle.js"></script>--}}
<script src="{{url('/')}}/admin/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{url('/')}}/admin/assets/js/custom/widgets.js"></script>
<script src="{{url('/')}}/admin/assets/js/custom/apps/chat/chat.js"></script>
<script src="{{url('/')}}/admin/assets/js/custom/modals/create-app.js"></script>
<script src="{{url('/')}}/admin/assets/js/custom/modals/upgrade-plan.js"></script>
<script src="{{url('/')}}/admin/assets/js/custom/modals/new-target.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




{{--=================  dropfy  ================--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    // $(document).ready(function () {
    $('.dropify').dropify();
    // });//end jquery
</script>

<script type="text/javascript">
    // $(document).ready(function() {
    $('.file_upload').imageuploadify();
    // })
</script>

{{--===================  toster ==============================--}}
<script src="{{url('admin/js')}}/tostar.js"></script>

<script>

    @if (Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch(type){
        case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{Session::get('message')}}");
            break;
        case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{Session::get('message')}}");
            break;
        case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{Session::get('message')}}");
            break;
        case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"></script>

{{--//===========================    data table  =========================--}}

<script src="{{url('admin')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="{{url('admin')}}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{url('admin')}}/assets/js/custom/documentation/general/datatables/advanced.js"></script>

{{--<script>--}}
{{--    $("#example").DataTable({--}}
{{--        // searching: false,--}}

{{--        "language": {--}}
{{--            "lengthMenu": "اظهار _MENU_",--}}
{{--        },--}}
{{--        "dom":--}}
{{--            "<'row'" +--}}
{{--            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +--}}
{{--            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +--}}
{{--            ">" +--}}

{{--            "<'table-responsive'tr>" +--}}

{{--            "<'row'" +--}}
{{--            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +--}}
{{--            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +--}}
{{--            ">"--}}
{{--    });--}}
{{--</script>--}}

{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"></script>

{{-- delete element--}}
<script>
    $(document).on('click','.delete_element',function (e) {
        var id = $(this).attr('data_id')
        var td = $(this)
        var routeAction = $(this).attr('data_delete')
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'هل انت متأكد من الحذف ؟',
            text: "سيتم حذف المحدد!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'حذف !',
            cancelButtonText: 'الغاء !',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: routeAction,
                    data: {'id':id},
                    success:function(data){
                        td.parent().parent().parent().parent().remove();
                        swalWithBootstrapButtons.fire(
                            'تم الحذف !',
                            'تم حذف العنصر بنجاح .',
                            'info'
                        )
                    }
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'تم الغاء الحذف ',
                    'العنصر المحدد موجود بامان ',
                    'error'
                )
            }
        });
    })
</script>
{{--block element --}}
<script>
    $(document).on('click','.block_element',function (e) {
        var id = $(this).attr('data_id')
        var td = $(this)
        var data_block = $(this).attr('data_block')
        var color = data_block == 'true'?'#4e4e4e':'#ce031b';
        var text = data_block == 'true'?'حظر':'الغاء الحظر';
        var change_data_block = data_block == 'true'?'false':'true';
        var data_button = data_block == 'true'?' الغاء الحظر ':' حظر ';


        var routeAction = $(this).attr('data_delete')
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: ' هل انت متأكد من '+data_button+' المحدد ؟ ',
            text: " سيتم "+data_button+" المحدد! ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: ''+data_button+' !',
            cancelButtonText: 'الغاء !',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: routeAction,
                    data: {'id':id},
                    success:function(data){
                        td.parent().parent().parent().prev().children().css('color',color);
                        td.find('.block_text').text(text)
                        td.attr('data_block',change_data_block)
                        swalWithBootstrapButtons.fire(
                            ' تم '+data_button+' المستحدم !',
                            ' تم '+data_button+' المستحدم بنجاح .',
                            'info'
                        )
                    }
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'تم الغاء العملية ',
                    'تم الغاء عملية'+data_button+'  المستخدم ',
                    'error'
                )
            }
        });
    })
</script>

<script>
    jQuery('.numbersOnly').keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });
</script>


@stack('admin_js')














