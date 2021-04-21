@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row px-5 py-3">
        <h2 class="font-weight-bold ml-3">Hello, {{Auth::user()->name}}</h2>
    </div>
    <div class="row px-5 py-3">
        <div class="col-md-5">
            <input id="email" type="email" placeholder="username"
                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus style="background-color: #C2E2F5;">
        </div>
        <div class="col-md-5">
            <input id="email" type="email" placeholder="username"
                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus style="background-color: #C2E2F5;">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-light btn-block text-white"
                style="background-color: #4B7BF5;font-weight:bold">
                {{ __('FIND') }}
            </button>
        </div>
    </div>
    <div class="row px-5 py-3">
        <div class="w-100 px-2 d-flex justify-content-between">
            <h3 class="font-weight-bold ml-2 d-inline p-0">Companies</h3>
            <a href="" class="text-dark mr-2">See More</a>
        </div>
        <div class="w-100 px-2">
            <div class="card-deck px-2">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">jobs title</h5>
                        <p class="card-text">jobs desc</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">jobs title</h5>
                        <p class="card-text">jobs desc</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">jobs title</h5>
                        <p class="card-text">jobs desc</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-5 py-3">
        <div class="col d-flex justify-content-between">
            <h3 class="font-weight-bold ml-2 d-inline p-0">Popular <span class="text-primary">Jobs</span> Here</h3>
        </div>
    </div>
    <div class="row px-5 py-3">
        <div class="col d-flex justify-content-between">
            <h3 class="font-weight-bold ml-2 d-inline p-0">Related <span class="text-primary">Jobs</span> for you</h3>
        </div>
    </div>
</div>
@endsection