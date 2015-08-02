<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Http\Requests;

class SettingsController extends Controller {

    /** @var UserRepository */
    protected $user;

    /**
     * Constructor for UsersController
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->middleware('auth');

        $this->user = $user;
    }

    /**
     * User Settings Form
     *
     * @return Response
     */
    public function index()
    {
        return view('auth.settings');
    }

}