@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="height:85vh">
        <div class="col-md-8 d-flex flex-column justify-content-center">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row w-50 mb-3 mx-auto">
                    <h2 class="font-weight-bold">Register</h2>
                </div>
                <div class="form-group row">

                    <div class="col-md-6 mx-auto">
                        <label for="">Name</label>
                        <input id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus
                            style="background-color: #C2E2F5;">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-6 mx-auto">
                        <label for="">Email</label>
                        <input id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus
                            style="background-color: #C2E2F5;">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-6 mx-auto">
                        <label for="">Phone Number</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="phone-number" value="{{ old('name') }}" required autocomplete="name" autofocus
                            style="background-color: #C2E2F5;">

                        @error('phone-number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-5">

                    <div class="col-md-6 mx-auto">
                        <label for="">Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" style="background-color: #C2E2F5;">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 mx-auto">
                        <button type="submit" class="btn btn-light btn-block text-white"
                            style="background-color: #4B7BF5;">
                            {{ __('Sign Up') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection