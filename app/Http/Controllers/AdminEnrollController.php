<?php

namespace App\Http\Controllers;

use App\Models\Entroll;
use Illuminate\Http\Request;

class AdminEnrollController extends Controller
{
    public function index()
    {
        return view('admin.enroll.index',['enrolls' => Entroll::orderBy('id','desc')->get()]);
    }

    public function detail($id)
    {
        return view('admin.enroll.detail',['enroll' => Entroll::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.enroll.edit',['enroll' => Entroll::find($id)]);
    }

    public function updateStatus(Request $request, $id)
    {
        Entroll::updateEnrollStatus($request, $id);
        return redirect('/admin/manage-enroll')->with('message','Enroll status info update successfullly.');
    }

    public function delete($id)
    {

    }
}
