@extends('Admin.layouts.app')
@section('page_name') الرسائل @endsection
@push('admin_css')
    <style>

        .timeline {
            position: relative;
            list-style: none;
            padding: 1rem 0;
            margin: 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            right: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            margin-right: -1px;
            background-color: #57C4F7;
        }

        .evenLeft,
        .evenRight {
            position: relative;
            width: 50%;
            padding: 15px 0;
            padding-left: 30px;
            text-align: left;
        }

        .evenLeft::before,
        .evenRight::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 20px;
            display: inline-block;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 2px solid #57C4F7;
            background-color: #fff;
        }

        .evenLeft::before {
            left: auto;
            right: -8px;
        }

        .evenLeft {
            position: relative;
            margin-right: 50%;
            padding-right: 30px;
            padding-left: 0;
            text-align: right;
        }

        @media (max-width: 767.98px) {
            .timeline::before {
                right: 8px;
            }

            .evenRight {
                width: 100%;
                text-align: right;
                padding-right: 2.5rem;
                padding-left: 0;
            }

            .evenRight::before {
                top: 1.25rem;
                right: 1px;
            }

            .evenLeft {
                margin-right: 0rem;
            }

            .evenRight {
                width: 100%;
                text-align: right;
                padding-right: 2.5rem;
                padding-left: 0;
            }

            .evenLeft::before {
                right: 1px;
            }

            .evenRight::before {
                top: 1.25rem;
            }
        }
    </style>
@endpush
@section('content')

    <!-----------------------------------Start Data Table ------------------------------------->
    <br>
    <br>
    <br>
    <div class="card mb-5 mb-xl-8 mt-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">الرسائل</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3 ">

            <ol class="timeline">

                @foreach($get as $message)
                <li class="{{$message->kindofsender=='user'?'evenRight':'evenLeft'}}">
                    <h6 class="grey-text font-small mb-1">{{date('Y-m-d',strtotime($message->created_at))}}</h6>
                    <p class="text-muted ">{{date('H:i:s',strtotime($message->created_at))}}</p>
                    @if($message->text)
                        <p class="font-weight-bold dark-grey-text ">{{$message->text}}</p>
                    @else
                        <img  style="width: 200px;height: 150px;border-radius: 10%;cursor:pointer" src="{{$message->image}} " alt="user" onclick="window.open(this.src)"/>
                    @endif
                </li>
                @endforeach



            </ol>


        </div>
        <!--begin::Body-->
    </div>

@endsection


