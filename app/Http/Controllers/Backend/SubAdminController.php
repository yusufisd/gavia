<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubAdminRequest;
use App\Models\SubAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SubAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SubAdmin::latest()->get();
        return view('backend.subAdmin.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.subAdmin.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubAdminRequest $request)
    {
        $new_subAdmin = new SubAdmin();
        $new_subAdmin->name = $request->name;
        $new_subAdmin->surname = $request->surname;
        $new_subAdmin->username = $request->username;
        $new_subAdmin->phone = $request->phone;
        $new_subAdmin->email = $request->email;
        $new_subAdmin->password = Hash::make($request->password);
        $new_subAdmin->save();
        
        Alert::success("Kullanıcı Ekleme Başarılı");
        return redirect()->route('admin.subAdmin.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
