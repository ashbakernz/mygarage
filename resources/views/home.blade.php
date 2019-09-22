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
            <h5>Dashboard</h5>

            <div class="card py-2 my-2">
                <div class="card-body">
                    You have no recent activity.
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <h5>Actions</h5>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    //
                </div>
        </div>
    </div>
</div>
@endsection
