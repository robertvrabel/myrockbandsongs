@extends('app')

@section('content')
    <div class="row">
        <div class="xlarge-12 large-12 medium-12 small-12 columns">
            @include('admin.menu')

            <h1>Add Song</h1>

            <a href="{{ route('admin.songs.index') }}" class="button medium">< Back to Songs List</a>

            {!! Form::open(['action' => 'Admin\SongsController@store']) !!}

            @include('admin.songs.form', ['submitButtonText' => 'Add Song'])

            {!! Form::close() !!}
        </div>
    </div>
@endsection