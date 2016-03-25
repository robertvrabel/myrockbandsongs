<?php namespace App\Repositories;

use Illuminate\Container\Container;

class SongRepository extends Repository
{
    /** @var ArtistRepository */
    private $artist;

    /** @var AlbumRepository */
    private $album;

    /** @var PackRepository */
    private $pack;

    /**
     * @param ArtistRepository $artist
     * @param AlbumRepository $album
     * @param PackRepository $pack
     */
    public function __construct(ArtistRepository $artist, AlbumRepository $album, PackRepository $pack)
    {
        parent::__construct(new Container);

        $this->artist = $artist;
        $this->album = $album;
        $this->pack = $pack;
    }

    /**
     * The Model
     *
     * @return string
     */
    public function model()
    {
        return 'App\Song';
    }

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        // Save additional new data
        $data = $this->saveAdditional($data);

        // Make sure artist_id, album_id, and pack_id are set, because they are required
        // Reasoning this is done here is they can optionally add a "new" artist so the SongRequest didn't work


        // Create a new song
        parent::create($data);

        return $this->model;
    }

    /**
     * Save additional data on the song page
     *
     * @param array $data
     * @return bool
     */
    public function saveAdditional(array $data)
    {
        /*
        var_dump($data);

        // If they are trying to add a new artist
        if ($data['new-artist'] != '') {
            // Try to find this artist, so we can retrieve the artist_id
            $artist = $this->artist->findBy('artist', $data['new-artist']);

            var_dump($artist);
        }

        die();
        */

        return $data;
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function latest($perPage = 100, $columns = array('*'))
    {
        return $this->model->latest('added')->paginate($perPage, $columns);
    }

    /**
     * @return mixed
     */
    public function getDifficulties()
    {
        return $this->model->difficulties;
    }

    /**
     * @return mixed
     */
    public function getRatings()
    {
        return $this->model->ratings;
    }

    /**
     * @return mixed
     */
    public function getGenders()
    {
        return $this->model->genders;
    }

    /**
     * @return mixed
     */
    public function getCosts()
    {
        return $this->model->costs;
    }

    /**
     * @return mixed
     */
    public function getSystems()
    {
        return $this->model->systems;
    }

    /**
     * @return mixed
     */
    public function getAlbumTracks()
    {
        return $this->model->album_tracks;
    }

    /**
     * @return mixed
     */
    public function getVocalTracks()
    {
        return $this->model->vocal_tracks;
    }
}