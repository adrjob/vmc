@extends('layouts.app', [
  'class' => 'login-page',
  'classPage' => 'login-page',
  'activePage' => 'login',
  'title' => __('White Dashboard'),
])

@section('content')
<div class="content">
  <div class="container">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
      <form class="form" id ="login-form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-white" style="margin-top: 20%">
            <img src="{{ asset("white") }}/img/new-logo.png" style="width: 130px; margin-left: 30%; margin-top: 10px">

          <div class="card-body" style="padding-bottom: 0 !important;">
            <div class="form-group mb-0 {{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tim-icons icon-email-85"></i>
                  </div>
                </div>
                  <label for="Email:"></label>
                <input type="email" class="form-control" id="exampleEmails" name="email" placeholder="{{ __('Email...') }}" required>
              </div>
                @include('alerts.feedback', ['field' => 'email'])
            </div>
            <div class="form-group mb-0 {{ $errors->has('password') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tim-icons icon-lock-circle"></i>
                  </div>
                </div>
                <input type="password" class="form-control" id="examplePassword" name="password" placeholder="{{ __('Password...') }}" required>
              </div>
              @include('alerts.feedback', ['field' => 'password'])
            </div>
          </div>
          <div class="card-footer" style="padding-top: 0 !important;">
            <a href="#" onclick="event.preventDefault();
            document.getElementById('login-form').submit();" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Get started') }}</a>
            <div class="pull-left">
              <h6>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-light">
                    <small>{{ __('Forgot password?') }}</small>
                  </a>
                @endif
              </h6>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
