@extends('app')

@section('content')
    <div class="row">
        <div class="xlarge-12 large-12 medium-12 small-12 columns">
            <h1>User Settings</h1>

            {!! Form::model($user, ['action' => ['Auth\SettingsController@update'], 'method' => 'PATCH']) !!}
                <div class="row">
                    <div class="xlarge-6 large-6 medium-6 small-12 columns">
                        {!! Form::label('first_name', 'First Name:', ['class' => ($errors->has('first_name')?'error':'')] ) !!}
                        {!! Form::text('first_name', old('first_name'), ['class' => ($errors->has('first_name')?'error':'')] ) !!}
                        @if ($errors->has('first_name'))
                            <small class="error">{{ $errors->first('first_name') }}</small>
                        @endif
                    </div>

                    <div class="xlarge-6 large-6 medium-6 small-12 columns">
                        {!! Form::label('last_name', 'Last Name:', ['class' => ($errors->has('last_name')?'error':'')] ) !!}
                        {!! Form::text('last_name', old('last_name'), ['class' => ($errors->has('last_name')?'error':'')] ) !!}
                        @if ($errors->has('last_name'))
                            <small class="error">{{ $errors->first('last_name') }}</small>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="xlarge-6 large-6 medium-6 small-12 columns">
                        {!! Form::label('email', 'Email Address:', ['class' => ($errors->has('email')?'error':'')] ) !!}
                        {!! Form::text('email', old('email'), ['class' => ($errors->has('email')?'error':'')] ) !!}
                        @if ($errors->has('email'))
                            <small class="error">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <div class="xlarge-6 large-6 medium-6 small-12 columns">
                        {!! Form::label('user_name', 'User Name:', ['class' => ($errors->has('user_name')?'error':'')] ) !!}
                        {!! Form::text('user_name', old('user_name'), ['class' => ($errors->has('user_name')?'error':'')] ) !!}
                        @if ($errors->has('user_name'))
                            <small class="error">{{ $errors->first('user_name') }}</small>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="xlarge-6 large-6 medium-6 small-12 columns">
                        {!! Form::label('year_born', 'Year Born:', ['class' => ($errors->has('year_born')?'error':'')] ) !!}
                        {!! Form::text('year_born', old('year_born'), ['class' => ($errors->has('year_born')?'error':'')] ) !!}
                        @if ($errors->has('year_born'))
                            <small class="error">{{ $errors->first('year_born') }}</small>
                        @endif
                    </div>

                    <div class="xlarge-6 large-6 medium-6 small-12 columns">
                        {!! Form::label('time_zone', 'Timezone:', ['class' => ($errors->has('time_zone')?'error':'')] ) !!}
                        {!! Form::select('time_zone', $timezones, null, [($errors->has('time_zone') ? ' error' : '')]) !!}
                        @if ($errors->has('time_zone'))
                            <small class="error">{{ $errors->first('time_zone') }}</small>
                        @endif
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="xlarge-4 large-4 medium-4 small-12 columns">
                        {!! Form::label('receive_emails', 'Receive emails (Donation Amount Applied)') !!}
                        {!! Form::checkbox('receive_emails', 1, null, [($errors->has('receive_emails') ? ' error' : '')]) !!}
                        @if ($errors->has('receive_emails'))
                            <small class="error">{{ $errors->first('receive_emails') }}</small>
                        @endif
                    </div>

                    <div class="xlarge-4 large-4 medium-4 small-12 columns">
                        {!! Form::label('show_beatles', 'Show Beatles in Listing?') !!}
                        {!! Form::checkbox('show_beatles', 1, null, [($errors->has('show_beatles') ? ' error' : '')]) !!}
                        @if ($errors->has('show_beatles'))
                            <small class="error">{{ $errors->first('show_beatles') }}</small>
                        @endif
                    </div>

                    <div class="xlarge-4 large-4 medium-4 small-12 columns">
                        {!! Form::label('show_rbnetwork', 'Show RB Network Songs in Listing?') !!}
                        {!! Form::checkbox('receive_emails', 1, null, [($errors->has('receive_emails') ? ' error' : '')]) !!}
                        @if ($errors->has('receive_emails'))
                            <small class="error">{{ $errors->first('receive_emails') }}</small>
                        @endif
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="xlarge-4 large-4 medium-4 small-12 columns">
                        {!! Form::label('gamer_tag', 'Gamer Tag:') !!}
                        {!! Form::text('gamer_tag', old('gamer_tag'), ['class' => ($errors->has('gamer_tag')?'error':'')] ) !!}
                        @if ($errors->has('gamer_tag'))
                            <small class="error">{{ $errors->first('gamer_tag') }}</small>
                        @endif
                    </div>

                    <div class="xlarge-4 large-4 medium-4 small-12 columns">
                        {!! Form::label('psnname', 'PSN Name:') !!}
                        {!! Form::text('psnname', old('psnname'), ['class' => ($errors->has('psnname')?'error':'')] ) !!}
                        @if ($errors->has('psnname'))
                            <small class="error">{{ $errors->first('psnname') }}</small>
                        @endif
                    </div>

                    <div class="xlarge-4 large-4 medium-4 small-12 columns">
                        {!! Form::label('wii_friend_code', 'WII Friend Code') !!}
                        {!! Form::text('wii_friend_code', old('wii_friend_code'), ['class' => ($errors->has('wii_friend_code')?'error':'')] ) !!}
                        @if ($errors->has('wii_friend_code'))
                            <small class="error">{{ $errors->first('wii_friend_code') }}</small>
                        @endif
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="xlarge-6 large-6 medium-6 small-12 columns">
                        {!! Form::label('where_songs', 'Where Songs:', ['class' => ($errors->has('time_zone')?'error':'')] ) !!}
                        {!! Form::select('where_songs', $systems, null, [($errors->has('where_songs') ? ' error' : '')]) !!}
                        @if ($errors->has('where_songs'))
                            <small class="error">{{ $errors->first('where_songs') }}</small>
                        @endif
                    </div>

                    <div class="xlarge-6 large-6 medium-6 small-12 columns">
                        {!! Form::label('preferred_instrument', 'Preferred Instrument:', ['class' => ($errors->has('preferred_instrument')?'error':'')] ) !!}
                        {!! Form::select('preferred_instrument', $instruments, null, [($errors->has('preferred_instrument') ? ' error' : '')]) !!}
                        @if ($errors->has('preferred_instrument'))
                            <small class="error">{{ $errors->first('preferred_instrument') }}</small>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="xlarge-12 large-12 medium-12 small-12 columns">
                        {!! Form::submit('Update Settings', ['class' => 'button radius']) !!}
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection