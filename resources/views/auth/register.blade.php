@extends('app')

@section('content')
    <div class="row">
        <div class="xlarge-12 large-12 medium-12 small-6 xlarge-centered large-centered columns">
            <form role="form" method="POST" action="/auth/register">
                <fieldset>
                    <legend>Register</legend>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::label('first_name', 'First Name:', ['class' => ($errors->has('name')?'error':'')] ) !!}
                            {!! Form::text('first_name', old('first_name'), ['class' => ($errors->has('name')?'error':'')] ) !!}
                            @if ($errors->has('first_name'))
                                <small class="error">{{ $errors->first('first_name') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::label('last_name', 'Last Name:', ['class' => ($errors->has('name')?'error':'')] ) !!}
                            {!! Form::text('last_name', old('last_name'), ['class' => ($errors->has('name')?'error':'')] ) !!}
                            @if ($errors->has('last_name'))
                                <small class="error">{{ $errors->first('last_name') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::label('email', 'Email Address:', ['class' => ($errors->has('email')?'error':'')] ) !!}
                            {!! Form::text('email', old('email'), ['class' => ($errors->has('email')?'error':'')] ) !!}
                            @if ($errors->has('email'))
                                <small class="error">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::label('user_name', 'User Name:', ['class' => ($errors->has('email')?'error':'')] ) !!}
                            {!! Form::text('user_name', old('user_name'), ['class' => ($errors->has('email')?'error':'')] ) !!}
                            @if ($errors->has('user_name'))
                                <small class="error">{{ $errors->first('user_name') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::label('password', 'Password:', ['class' => ($errors->has('password')?'error':'')]) !!}
                            {!! Form::password('password', ['class' => ($errors->has('password')?'error':'')] ) !!}
                            @if ($errors->has('password'))
                                <small class="error">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::label('password_confirmation', 'Password Confirmation:', ['class' => ($errors->has('password_confirmation')?'error':'')] ) !!}
                            {!! Form::password('password_confirmation', ['class' => ($errors->has('password_confirmation')?'error':'')] ) !!}
                            @if ($errors->has('password_confirmation'))
                                <small class="error">{{ $errors->first('password_confirmation') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="xlarge-12 large-12 medium-12 small-12 columns">
                            {!! Form::submit('Register', ['class' => 'button radius']) !!}
                        </div>
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </fieldset>
            </form>
        </div>
    </div>
@endsection