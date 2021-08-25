@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<body class="login-page" style="min-height: 320px;">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="logo"><img src="{{asset('assets/img/PesonaGameLogo.png')}}" alt="" class="img-fluid"></a>
        </div>
        <div class="card-body">
            <a class="logo"><img src="{{asset('assets/img/ps5.png')}}" alt="" class="img-fluid"></a>
            <p class="login-box-msg"><strong>Pesona Game Center</strong></p>
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-8">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                        <div class="col-3">
                        <a href="{{ route('login')}}"<button type="submit" class="btn btn-primary">
                        Back</button></a>
                    </div>
            <!-- /.col -->
            </div>
        </form>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>


    </body>
@endsection
