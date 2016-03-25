@extends('app')

@section('content')
    <div class="row">
        <div class="xlarge-12 large-12 medium-12 small-12 xlarge-centered large-centered columns">
            <form role="form" method="POST" action="/auth/login">
                <fieldset>
                    <h1><legend>Login</legend></h1>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::label('email', 'Email Address:', ['class' => ($errors->has('email')?'error':'')] ) !!}
                            {!! Form::text('email', old('email'), ['class' => ($errors->has('email')?'error':'')] ) !!}
                            @if ($errors->has('email'))
                                <small class="error">{{ $errors->first('email') }}</small> @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::label('password', 'Password:', ['class' => ($errors->has('password')?'error':'')]) !!}
                            {!! Form::password('password', ['class' => ($errors->has('password')?'error':'')] ) !!}
                            @if ($errors->has('password'))
                                <small class="error">{{ $errors->first('password') }}</small> @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::checkbox('remember' ) !!}
                            {!! Form::label('remember', 'Remember Me') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-3 large-6 medium-12 small-12 columns">
                            {!! Form::submit('Login', ['class' => 'button radius']) !!}
                        </div>
                        <div class="xlarge-9 large-6 medium-12 small-12 columns">
                            <p class="right"><a href="/password/email">Forgot Your Password?</a></p>
                        </div>
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </fieldset>
            </form>
        </div>
    </div>
@endsection