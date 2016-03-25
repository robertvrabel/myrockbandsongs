<?php
namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /** @var UserRepository */
    protected $user;

    /**
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Get the users
        $users = $this->user->paginate('50');

        return view('admin.users.list', compact('users'));
    }

}
