@extends('layouts.app')

@section('content')

            {{-- <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div> --}}








                <div class="wrapper-page">
                    <div class="panel panel-color panel-primary panel-pages">
                        <div class="panel-heading bg-img"> 
                            <div class="bg-overlay"></div>
                            <h3 class="text-center m-t-10 text-white"> Create a new Admin </h3>
                        </div> 


                        <div class="panel-body">
                            <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                             @csrf

                             <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }} input-lg" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Your Name">
                                </div>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} input-lg" name="email" value="{{ old('email') }}" required placeholder="Enter Your Valid Email">
                                </div>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} input-lg" name="password" required placeholder="Password">
                                </div>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox-signup" type="checkbox" checked="">
                                        <label for="checkbox-signup">
                                            I accept <a href="#">Terms and Conditions</a>
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group text-center m-t-40">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group m-t-30">
                                <div class="col-sm-12 text-center">
                                    <a href="{{asset('/')}}">Already have account?</a>
                                </div>
                            </div>
                        </form> 
                    </div>                                 
                </div>
            </div>































    </div>
</div>
</div>
</div>
@endsection
