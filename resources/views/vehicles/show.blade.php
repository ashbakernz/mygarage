@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-sm-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h5>Vehicles</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card py-2 my-2 border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 text-center">
                                <img class="img-responsive" src="{{ asset($vehicle->getBodyTypeAssetPath()) }}" alt="">
                                <div class="mt-2">
                                    <small class="text-gray-500 border p-1 mt-2">{{ $vehicle->getPlate() }}</small>
                                    <h4 class="text-gray-dark mt-3">{{ $vehicle->getMakeAndModel()}}</h4>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">

                                        <ul class="nav nav-pills mb-3 flex-column flex-sm-row" id="pills-tab" role="tablist">
                                            <li class="flex-sm-fill text-sm-center nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-details" role="tab" aria-controls="pills-home" aria-selected="true">
                                                    Details
                                                </a>
                                            </li>
                                            <li class="flex-sm-fill text-sm-center nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                    Maintenance
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="pills-home-tab">
                                                @include('partials.vehicles.detail-list')
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                @include('partials.vehicles.maintenance-list')
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                Test 3
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
