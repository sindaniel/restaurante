@extends('layouts.auth')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>

 --}}

<section class="wrapper">


    <div class="login">
        <div class="image-placeholder">
          <h1>Lorem ipsum dolor sit amet<br>consectetur pellentesque adipiscing elit.</h1>
        </div>
        <div class="form">

            

            <h3 class="h4 mb-5 text-center">Admin Login</h3>


            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              
              
              <button type="submit" class="btn mt-4 btn-primary btn-block">
                {{ __('Login') }}
             </button>
            </form>

        </div>
    </div>
              

</section>


@endsection



@section('header')
    <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}">
@stop