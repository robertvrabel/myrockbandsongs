<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\BookletRepository;
use App\Repositories\UserRepository;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class SettingsController extends Controller {

    /** @var UserRepository */
    protected $user;

    /**
     * Constructor for UsersController
     *
     * @param UserRepository $user
     * @param BookletRepository $booklet
     */
    public function __construct(UserRepository $user, BookletRepository $booklet)
    {
        $this->middleware('auth');

        $this->user = $user;
        $this->booklet = $booklet;
    }

    /**
     * User Settings Form
     *
     * @return Response
     */
    public function index()
    {
        // Get the logged in user information
        $user = $this->user->find(Auth::user()->id);

        // Get the timezones
        $timezones = $this->user->getTimezones();

        // Get the systems
        $systems = $this->booklet->getSystems();

        // Get the instruments
        $instruments = $this->booklet->getRegularInstruments();

        return view('auth.settings', compact('user', 'timezones', 'systems', 'instruments'));
    }

    /**
     * Update user settings
     * @param $id
     * @param Request $request
     */
    public function update(UserRequest $request)
    {
        // Save the expert
        $this->user->update($request->all(), Auth::user()->id);

        flash()->success('Settings updated successfully');

        return redirect('user/settings');
    }

}