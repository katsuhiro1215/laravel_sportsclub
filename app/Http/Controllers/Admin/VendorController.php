<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVendorRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateVendorRequest;
use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $vendors = Vendor::select('id', 'name', 'email', 'created_at')->get();

        return view('admin.vendor.index' ,compact('vendors'));
    }

    public function create()
    {
        return view('admin.vendor.create');
    }

    public function store(StoreVendorRequest $request)
    {

        $vendors = Vendor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $notification = array(
            'message' => '新規登録に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('admin.vendor.index' ,compact('vendors'))->with($notification);
    }

    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);

        return view('admin.vendor.show', compact('vendor'));
    }

    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);

        return view('admin.vendor.edit', compact('vendor'));
    }

    public function update(UpdateVendorRequest $request, $id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->password = Hash::make($request->password);
        $vendor->save();

        $notification = array(
            'message' => '更新に成功しました。',
            'alert-type' => 'success'
        );
        
        return to_route('admin.vendor.index' ,compact('vendor'))->with($notification);
    }

    public function destroy($id)
    {
        Vendor::findOrFail($id)->delete();

        $notification = array(
            'message' => '削除に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('admin.vendor.index')->with($notification);
    }

    public function expiredVendorIndex() {
        $expiredVendor = Vendor::onlyTrashed()->get();

        return view('admin.expired_vendor', compact('expiredVendor'));
    }

    public function expiredVendorRestore($id) {
        $expiredVendor = Vendor::withTrashed()->findOrFail($id)->restore();

        $notification = array(
            'message' => '復元に成功しました。',
            'alert-type' => 'success'
        );

        return to_route('admin.expired_vendor.index', compact('expiredVendor'))->with($notification);
    }

    public function expiredVendorDestroy($id) {
        Vendor::onlyTrashed()->findOrFail($id)->forceDelete();

        $notification = array(
            'message' => '完全に削除しました。',
            'alert-type' => 'danger'
        );

        return to_route('admin.expired_vendor.index')->with($notification);;
    }
}
