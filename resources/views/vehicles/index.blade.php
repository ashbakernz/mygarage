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
                @foreach($vehicles as $vehicle)
                    <div class="col-md-4 col-sm-12">
                        <a class="text-decoration-none" href="{{ route('vehicles.show', $vehicle->id) }}">
                            <div class="card py-2 my-2 border-0 vehicle-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 text-center">
                                            <img class="img-responsive" src="{{ asset($vehicle->getBodyTypeAssetPath()) }}" alt="">
                                            <div class="mt-2">
                                                <small class="text-gray-500 border p-1 mt-2">{{ $vehicle->getPlate() }}</small>
                                                <h4 class="text-gray-dark mt-3">{{ $vehicle->getMakeAndModel()}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
@endsection
