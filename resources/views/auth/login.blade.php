@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="height:85vh">
        <div class="col-md-8 d-flex flex-column justify-content-center">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row mb-4">

                    <div class="col-md-6 mx-auto">
                        <input id="email" type="email" placeholder="username"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            style="background-color: #C2E2F5;">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-5">

                    <div class="col-md-6 mx-auto">
                        <input id="password" placeholder="password" type="password"
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
                        <button type="submit" class="btn btn-light btn-block text-white" style="background-color: #4B7BF5;font-weight:bold">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection