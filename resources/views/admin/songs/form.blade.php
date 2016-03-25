<h3>Required Fields</h3>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('song', 'Song*') !!}
            {!! Form::input('text', 'song', null, ['class' => ($errors->has('song') ? 'error' : '')]) !!}
            @if ($errors->has('song'))
                <small class="error">{{ $errors->first('song') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('type_id', 'Type*') !!}
            {!! Form::select('type_id', $types, null, [($errors->has('type_id') ? ' error' : '')]) !!}
            @if ($errors->has('type_id'))
                <small class="error">{{ $errors->first('type_id') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 end columns">
        <label>{!! Form::label('added', 'Added*') !!}
            {!! Form::input('text', 'added', null, ['class' => ($errors->has('added') ? 'error' : '')]) !!}
            @if ($errors->has('added'))
                <small class="error">{{ $errors->first('added') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('artist_id', 'Artist*') !!}
            <div class="add-artist-select">{!! Form::select('artist_id', $artists, null, [($errors->has('artist_id') ? ' error' : '')]) !!}</div>
            <a href="javascript:void(0);" class="button small postfix add-artist">+ Add New Artist</a>
            @if ($errors->has('artist_id'))
                <small class="error">{{ $errors->first('artist_id') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('album_id', 'Album*') !!}
            <div class="add-album-select">{!! Form::select('album_id', $albums, null, [($errors->has('album_id') ? ' error' : '')]) !!}</div>
            <a href="javascript:void(0);" class="button small postfix add-album">+ Add New Album</a>
            @if ($errors->has('album_id'))
                <small class="error">{{ $errors->first('album_id') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('pack_id', 'Pack*') !!}
            <div class="add-pack-select">{!! Form::select('pack_id', $packs, null, [($errors->has('pack_id') ? ' error' : '')]) !!}</div>
            <a href="javascript:void(0);" class="button small postfix add-pack">+ Add New Pack</a>
            @if ($errors->has('pack_id'))
                <small class="error">{{ $errors->first('pack_id') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('genre_id', 'Genre*') !!}
            {!! Form::select('genre_id', $genres, null, [($errors->has('genre_id') ? ' error' : '')]) !!}
            @if ($errors->has('genre_id'))
                <small class="error">{{ $errors->first('genre_id') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('cost', 'Cost*') !!}
            {!! Form::select('cost', $costs, null, [($errors->has('cost') ? ' error' : '')]) !!}
            @if ($errors->has('cost'))
                <small class="error">{{ $errors->first('cost') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('system', 'System*') !!}
            {!! Form::select('system', $systems, null, [($errors->has('system') ? ' error' : '')]) !!}
            @if ($errors->has('system'))
                <small class="error">{{ $errors->first('system') }}</small>
            @endif
        </label>
    </div>
</div>

<hr>
<h3>Meta Data</h3>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('length', 'Length') !!}
            {!! Form::input('text', 'length', null, ['class' => ($errors->has('length') ? 'error' : '')]) !!}
            @if ($errors->has('length'))
                <small class="error">{{ $errors->first('length') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('rating', 'Rating') !!}
            {!! Form::select('rating', $ratings, null, [($errors->has('rating') ? ' error' : '')]) !!}
            @if ($errors->has('rating'))
                <small class="error">{{ $errors->first('rating') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('year', 'Year') !!}
            {!! Form::input('text', 'year', null, ['class' => ($errors->has('year') ? 'error' : '')]) !!}
            @if ($errors->has('year'))
                <small class="error">{{ $errors->first('year') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('album_track', 'Album Track') !!}
            {!! Form::select('album_track', $album_tracks, null, [($errors->has('album_track') ? ' error' : '')]) !!}
            @if ($errors->has('album_track'))
                <small class="error">{{ $errors->first('album_track') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('vocal_track', 'Vocal Track') !!}
            {!! Form::select('vocal_track', $vocal_tracks, null, [($errors->has('vocal_track') ? ' error' : '')]) !!}
            @if ($errors->has('vocal_track'))
                <small class="error">{{ $errors->first('vocal_track') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('gender', 'Gender') !!}
            {!! Form::select('gender', $genders, null, [($errors->has('gender') ? ' error' : '')]) !!}
            @if ($errors->has('gender'))
                <small class="error">{{ $errors->first('gender') }}</small>
            @endif
        </label>
    </div>
</div>

<hr>

<h3>Difficulties</h3>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 end columns">
        <label>{!! Form::label('difficulty', 'Difficulty') !!}
            {!! Form::select('difficulty', $difficulties, null, [($errors->has('difficulty') ? ' error' : '')]) !!}
            @if ($errors->has('difficulty'))
                <small class="error">{{ $errors->first('difficulty') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('guitar', 'Guitar') !!}
            {!! Form::select('guitar', $difficulties, null, [($errors->has('guitar') ? ' error' : '')]) !!}
            @if ($errors->has('guitar'))
                <small class="error">{{ $errors->first('guitar') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 end columns">
        <label>{!! Form::label('pro_guitar', 'Pro Guitar') !!}
            {!! Form::select('pro_guitar', $difficulties, null, [($errors->has('pro_guitar') ? ' error' : '')]) !!}
            @if ($errors->has('pro_guitar'))
                <small class="error">{{ $errors->first('pro_guitar') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('bass', 'Bass') !!}
            {!! Form::select('bass', $difficulties, null, [($errors->has('bass') ? ' error' : '')]) !!}
            @if ($errors->has('bass'))
                <small class="error">{{ $errors->first('bass') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 end columns">
        <label>{!! Form::label('pro_bass', 'Pro Bass') !!}
            {!! Form::select('pro_bass', $difficulties, null, [($errors->has('pro_bass') ? ' error' : '')]) !!}
            @if ($errors->has('pro_bass'))
                <small class="error">{{ $errors->first('pro_bass') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('drums', 'Drums') !!}
            {!! Form::select('drums', $difficulties, null, [($errors->has('drums') ? ' error' : '')]) !!}
            @if ($errors->has('drums'))
                <small class="error">{{ $errors->first('drums') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 end columns">
        <label>{!! Form::label('pro_drums', 'Pro Drums') !!}
            {!! Form::select('pro_drums', $difficulties, null, [($errors->has('pro_drums') ? ' error' : '')]) !!}
            @if ($errors->has('pro_drums'))
                <small class="error">{{ $errors->first('pro_drums') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('keyboard', 'Keyboard') !!}
            {!! Form::select('keyboard', $difficulties, null, [($errors->has('keyboard') ? ' error' : '')]) !!}
            @if ($errors->has('keyboard'))
                <small class="error">{{ $errors->first('keyboard') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 end columns">
        <label>{!! Form::label('pro_keyboard', 'Pro Keyboard') !!}
            {!! Form::select('pro_keyboard', $difficulties, null, [($errors->has('pro_keyboard') ? ' error' : '')]) !!}
            @if ($errors->has('pro_keyboard'))
                <small class="error">{{ $errors->first('pro_keyboard') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="xlarge-4 large-4 medium-4 small-12 columns">
        <label>{!! Form::label('vocals', 'Vocals') !!}
            {!! Form::select('vocals', $difficulties, null, [($errors->has('vocals') ? ' error' : '')]) !!}
            @if ($errors->has('vocals'))
                <small class="error">{{ $errors->first('vocals') }}</small>
            @endif
        </label>
    </div>

    <div class="xlarge-4 large-4 medium-4 small-12 end columns">
        <label>{!! Form::label('pro_vocals', 'Pro Vocals') !!}
            {!! Form::select('pro_vocals', $difficulties, null, [($errors->has('pro_vocals') ? ' error' : '')]) !!}
            @if ($errors->has('pro_vocals'))
                <small class="error">{{ $errors->first('pro_vocals') }}</small>
            @endif
        </label>
    </div>
</div>

<div class="row">
    <div class="large-3 columns">
        {!! Form::submit($submitButtonText, ['class' => 'button small']) !!}
    </div>
</div>