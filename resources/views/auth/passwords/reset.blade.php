@extends('layouts.app')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <img alt="image" class="img-main-logo" src="{{url('login_css/img/nsjbi_logo.png')}}" />
        </div>
        <h3>{{ config('app.name', 'Laravel') }}</h3>
        <p></p>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <div class="card-header">{{ __('Reset Password') }}</div> 
            <br>
            @if (session('status'))
                <div class="form-group alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            @if($errors->any())
                <div class="form-group alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <strong>{{$errors->first()}}</strong>
                </div>
            @endif
            <div class="form-group">
                <input type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
            </div>
            <div class="form-group">
                <input type="password" id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            </div>
            <div class="form-group">
                <input type="password" id="confirm_password" placeholder="Confirm Password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Reset Password</button>

            <a href="{{ route('login') }}"><small>Back to login</small></a>
          
        </form>
    </div>
</div>
@endsection
