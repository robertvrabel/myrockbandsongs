@extends('app')

@section('content')
    <div class="row">
        <div class="xlarge-12 large-12 medium-12 small-12 columns">
            @include('admin.menu')

            <h1>Songs</h1>

            <a href="{{ route('admin.songs.create') }}" class="button small">Add Song</a>

            <table>
                <thead>
                <tr>
                    <th>Song</th>
                    <th>Added</th>
                </tr>
                </thead>
                <tbody>
                @foreach($songs as $song)
                    <tr>
                        <td>
                            <a href="{{ route('admin.songs.edit', [$song->id]) }}">{{ $song->song }}</a>
                        </td>
                        <td>
                            {{ $song->added }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $songs->render() !!}

        </div>
    </div>
@endsection