<meta charset="utf-8" />
<title>saudi auto parts | لوحة التحكم</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="{{url('admin')}}/imgs/fav_icon.png" />
<meta name="csrf-token" content="{{csrf_token()}}">

<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{url('admin')}}/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
<link href="{{url('admin')}}/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{url('admin')}}/assets/css/all.css"/>
<link rel="stylesheet" href="{{url('admin')}}/assets/css/fontawesome-stars.css"/>
<!--end::Global Stylesheets Bundle-->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<style>
    *{
        font-family: 'Cairo', sans-serif;
        font-size: 16px;
    }
    .toast-message{
        margin-right: 30px !important;
    }
    .form-control{
        font-family: 'Cairo',sans-serif !Important;
    }

    .btn{
        font-family: "Cairo" ,sans-serif !important;
        font-size: 1.2rem !important;
        border-radius: 7px!important;
    }
    input{
        font-family: "Cairo" ,sans-serif !important;
    }
</style>
<!--end::Web font -->

{{--===================================--}}
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ url('/')}}/admin/css/bootstrap-rtl.css">
{{--<link rel="stylesheet" href="{{ url('/')}}/admin/css/datatables2.min.css">--}}
<style media="screen">
    .dz-image
    {
        border-radius:5px !important;
        margin-bottom: 10px;
    }
    .dz-remove
    {
        color: red;
    }
    .dz-image img
    {
        text-align: center;
        width:100%;
        height:100%;

    }
    .dropzone
    {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
    }

</style>
<style>
    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>

{{--=========================  select to  ===============================--}}

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2-selection.select2-selection--multiple {
        height: 50px;
        overflow: auto;
        box-shadow: -2px 3px 10px #0000003d;
        border: 1px solid #cecece;
    }
</style>

{{--=======================  tostar  ====================================--}}
<link rel="stylesheet" href="{{url('admin/css')}}/tostar.css">

{{--===================================--}}

<link href="{{url('admin')}}/assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />

<!--ltr version:<link href="{{url('admin')}}/assets/demo/demo6/base/style.bundle.css" rel="stylesheet" type="text/css" />-->

<link href="{{url('admin')}}/assets/demo/demo6/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />

<!--end::Global Theme Styles -->

<!--begin::Page Vendors Styles -->
<!--ltr version:<link href="{{url('admin')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />-->

<link href="{{url('admin')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />

<!--end::Page Vendors Styles -->
{{--<link rel="shortcut icon" href="{{url('admin/auth')}}/logo-1.png" />--}}

<!-- ================== styles dropfy =================== -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" type="text/css" />


<style type="text/css">


    /*--------- Main Content ---------*/

    .box
    {
        margin: 25px;
        padding: 25px;
        background: #fff
    }

    th
    {
        text-align: center;
    }

    tbody tr
    {
        text-align: center;
    }

    .img:hover
    {
        transform: scale(2.5);
    }

    .dropify-wrapper
    {
        border-radius: 20px;
    }

    .imageuploadify-container button:before
    {
        content: "remove";
    }
    .imageuploadify .imageuploadify-images-list .imageuploadify-container button.btn-danger
    {
        width: 51px;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.css">

{{--=============== datatable ===================--}}

{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
<link rel="stylesheet" href="{{ url('/')}}/admin/css/datatables2.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}

{{--<script src="{{url('/')}}/admin/js/datatables2.min.js"></script>--}}

{{--<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>--}}

{{--<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>--}}

{{--<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>--}}
<script src="{{url('admin')}}/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>


<script src="{{url('admin')}}/assets/demo/custom/crud/datatables/extensions/buttons.js" type="text/javascript"></script>

<script src="{{url('admin/js')}}/dataTables.buttons.min.js"></script>

<style>
    #example_length{
        min-width: 33%;
        display: inline-flex;
        justify-content: center;
        padding:10px 20px;
    }
    #example_filter{
        min-width: 33%;
        display: inline-flex;
        justify-content: center;
        padding:10px 20px;
    }
    .dt-buttons.btn-group{
        min-width: 33%;
        display: inline-flex;
        justify-content: center;
        padding:10px 20px;
    }
    div#example_wrapper > div:first-child{
        /*display:none!important;*/
    }
    table#kt_datatable_example_5  thead{
        background-color:rgba(157,211,168,1)!important;
        color: #575962;
    }
    div#kt_datatable_example_5_length {
        width: 100%;
    }
    select.form-select.form-select-sm.form-select-solid {
        display: inline-block;
    }
    label {
        width: 100%;
        direction: rtl!important;
        text-align: right!important;
    }



    div#swal2-html-container {
        text-align: center;
        overflow: hidden;
    }
    .card-body .row {
        width: 99%;
    }

    .table-responsive {
    }
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    @media (min-width: 992px)
    span, ol, ul, pre, div {
        scrollbar-width: thin;
        scrollbar-color: #EFF2F5 transparent;
    }
    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
    }
    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
    /*@media (min-width: 992px)*/
    /*span::-webkit-scrollbar, ol::-webkit-scrollbar, ul::-webkit-scrollbar, pre::-webkit-scrollbar, div::-webkit-scrollbar {*/
    /*    width: 0.4rem;*/
    /*    height: 10px!important;*/
    /*    !* border-radius: 10px; *!*/
    /*    !* color: red!important; *!*/
    /*}*/
    /*!*@media (min-width: 992px)*!*/
    /*span::-webkit-scrollbar-thumb, ol::-webkit-scrollbar-thumb, ul::-webkit-scrollbar-thumb, pre::-webkit-scrollbar-thumb, div::-webkit-scrollbar-thumb {*/
    /*    background-color: rgba(219, 23, 23, 0) !important;*/
    /*}*/
</style>

@stack('admin_css')
