@extends('app')

@section('content')
    <div class="row">
        <div class="xlarge-12 large-12 medium-12 small-12 columns">
            <h1>Edit Song</h1>

            <a href="{{ route('admin.songs.index') }}" class="button tiny">Back to Songs List</a>

            {!! Form::model($song, ['action' => ['Admin\SongsController@update', $song->id], 'method' => 'PATCH']) !!}

            @include('admin.songs.form', ['submitButtonText' => 'Edit Song'])

            {!! Form::close() !!}
        </div>
    </div>
@endsection