<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\SongRequest;
use App\Repositories\AlbumRepository;
use App\Repositories\ArtistRepository;
use App\Repositories\GenreRepository;
use App\Repositories\PackRepository;
use App\Repositories\SongRepository;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SongsController extends Controller
{

    /** @var SongRepository */
    protected $song;

    /** @var ArtistRepository */
    protected $artist;

    /** @var AlbumRepository */
    protected $album;

    /** @var PackRepository */
    protected $pack;

    /** @var GenreRepository */
    protected $genre;

    /** @var TypeRepository */
    protected $type;

    /**
     * @param SongRepository $song
     * @param ArtistRepository $artist
     * @param AlbumRepository $album
     * @param PackRepository $pack
     * @param GenreRepository $genre
     * @param TypeRepository $type
     */
    public function __construct(SongRepository $song, ArtistRepository $artist, AlbumRepository $album, PackRepository $pack, GenreRepository $genre, TypeRepository $type)
    {
        $this->song = $song;
        $this->artist = $artist;
        $this->album = $album;
        $this->pack = $pack;
        $this->genre = $genre;
        $this->type = $type;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Get the songs
        $songs = $this->song->latest('100');

        return view('admin.songs.list', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // Get the artists
        $artists = ['' => 'Please Select'] + $this->artist->lists('artist', 'id')->all();

        // Get the albums
        $albums = ['' => 'Please Select'] + $this->album->lists('album', 'id')->all();

        // Get the packs
        $packs = ['' => 'Please Select'] + $this->pack->lists('pack', 'id')->all();

        // Get the genres
        $genres = ['' => 'Please Select'] + $this->genre->lists('genre', 'id')->all();

        // Get the ratings
        $ratings = $this->song->getRatings();

        // Get the album tracks
        $album_tracks = $this->song->getAlbumTracks();

        // Get the vocal tracks
        $vocal_tracks = $this->song->getVocalTracks();

        // Get genders
        $genders = $this->song->getGenders();

        // Get the difficulties
        $difficulties = $this->song->getDifficulties();

        // Get the types
        $types = ['' => 'Please Select'] + $this->type->lists('type', 'id')->all();

        // Get the costs
        $costs = $this->song->getCosts();

        // Get the systems
        $systems = $this->song->getSystems();

        return view('admin.songs.create', compact('song', 'artists', 'albums', 'packs', 'genres', 'ratings', 'album_tracks', 'vocal_tracks', 'genders', 'difficulties', 'types', 'costs', 'systems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SongRequest  $request
     * @return Response
     */
    public function store(SongRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        $this->song->create($data);

        // Create a message for the user
        flash()->success('Song successfully saved');

        return redirect('admin/songs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $song = $this->song->find($id);

        // Get the artists
        $artists = ['' => 'Please Select'] + $this->artist->lists('artist', 'id')->all();

        // Get the albums
        $albums = ['' => 'Please Select'] + $this->album->lists('album', 'id')->all();

        // Get the packs
        $packs = ['' => 'Please Select'] + $this->pack->lists('pack', 'id')->all();

        // Get the genres
        $genres = ['' => 'Please Select'] + $this->genre->lists('genre', 'id')->all();

        // Get the ratings
        $ratings = $this->song->getRatings();

        // Get the album tracks
        $album_tracks = $this->song->getAlbumTracks();

        // Get the vocal tracks
        $vocal_tracks = $this->song->getVocalTracks();

        // Get genders
        $genders = $this->song->getGenders();

        // Get the difficulties
        $difficulties = $this->song->getDifficulties();

        // Get the types
        $types = ['' => 'Please Select'] + $this->type->lists('type', 'id')->all();

        // Get the costs
        $costs = $this->song->getCosts();

        // Get the systems
        $systems = $this->song->getSystems();

        return view('admin.songs.edit', compact('song', 'artists', 'albums', 'packs', 'genres', 'ratings', 'album_tracks', 'vocal_tracks', 'genders', 'difficulties', 'types', 'costs', 'systems'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SongRequest  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, SongRequest $request)
    {
        $this->song->update($request->all(), $id);

        flash()->success('Song successfully edited');

        return redirect('admin/songs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->song->delete($id);

        flash()->success('Song successfully deleted');

        return redirect('admin/songs');
    }
}
