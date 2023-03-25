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
            'usertype' => $request->usertype,
            'username' => $request->username,
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'lastname_kana' => $request->lastname_kana,
            'firstname_kana' => $request->firstname_kana,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'mobile_number' => $request->mobile_number,
            'birth' => $request->birth,
            'gender' => $request->gender,
            'postcode' => $request->postcode,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'address3' => $request->address3,
            'religion' => $request->religion,
            'father_name' => $request->father_name,
            'father_phone_number' => $request->father_phone_number,
            'mother_name' => $request->mother_name,
            'mother_phone_number' => $request->mother_phone_number,
            'information' => $request->information,
        ]);
        
        if($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/' .$user->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image'] = $filename;
        }

        $notification = array(
            'message' => '新規登録に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('vendor.user.index', compact('user'))->with($notification);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('vendor.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('vendor.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request,$id)
    {
        $user = User::findOrFail($id);
        $user->usertype = $request->usertype;
        $user->username = $request->username;
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->lastname_kana = $request->lastname_kana;
        $user->firstname_kana = $request->firstname_kana;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->mobile_number = $request->mobile_number;
        $user->birth = $request->birth;
        $user->gender = $request->gender;
        $user->postcode = $request->postcode;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->address3 = $request->address3;
        $user->religion = $request->religion;
        $user->father_name = $request->father_name;
        $user->father_phone_number = $request->father_phone_number;
        $user->mother_name = $request->mother_name;
        $user->mother_phone_number = $request->mother_phone_number;
        $user->information = $request->information;

        if($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/' .$user->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image'] = $filename;
        }

        $user->save();

        $notification = array(
            'message' => '更新に成功しました。',
            'alert-type' => 'success'
        );
        
        return to_route('vendor.user.index' ,compact('user'))->with($notification);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => '削除に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('vendor.user.index')->with($notification);
    }

    public function expiredUserIndex() {
        $expiredUser = User::onlyTrashed()->get();

        return view('vendor.expired_user', compact('expiredUser'));
    }

    public function expiredUserRestore($id) {
        $expiredUser = User::withTrashed()->findOrFail($id)->restore();

        $notification = array(
            'message' => '復元に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('vendor.expired_user.index', compact('expiredUser'))->with($notification);
    }

    public function expiredUserDestroy($id) {
        User::onlyTrashed()->findOrFail($id)->forceDelete();

        $notification = array(
            'message' => '完全に削除しました。',
            'alert-type' => 'danger'
        );

        return to_route('vendor.expired_user.index')->with($notification);;
    }
}
