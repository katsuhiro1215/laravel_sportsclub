<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    public function index()
    {
        $users = User::latest()->get();

        return view('vendor.user.index', compact('users'));
    }

    public function create()
    {
        return view('vendor.user.create');
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'lastname_kana' => $request->lastname_kana,
            'firstname_kana' => $request->firstname_kana,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $notification = array(
            'message' => '新規登録に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('vendor.user.index', compact('user'))->with($notification);
    }
}
