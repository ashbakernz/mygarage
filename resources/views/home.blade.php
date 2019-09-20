@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 col-sm-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h4>Vehicles</h4>
{{--            Start loop over vehicles--}}

                <div class="card py-2 my-2">

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6 col-sm-12 text-center">
                                <img class="img-responsive" src="{{ asset('svg/vehicle-body-types/station-wagon-full-size.svg')  }}" alt="">
                                <div class="mt-2">
                                    <small class="text-gray-500 border p-1">KSR185</small>
                                    <h4 class="text-gray-dark mt-2">Subaru Legacy</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card py-2 my-2">

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6 col-sm-12 text-center">
                                <img class="img-responsive" src="{{ asset('svg/vehicle-body-types/sedan-4-door.svg')  }}" alt="">
                                <div class="mt-2">
                                    <small class="text-gray-500 border p-1">CZR563</small>
                                    <h4 class="text-gray-dark mt-2">Mitsubishi Lancer</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">

                            </div>
                        </div>
                    </div>
                </div>

{{--            End loop over vehicles--}}
        </div>
{{--        <div class="col-md-4 col-sm-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Actions</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    //--}}
{{--                </div>--}}
{{--        </div>--}}
    </div>
</div>
@endsection
