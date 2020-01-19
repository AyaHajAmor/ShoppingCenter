<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\DataTables\AdminDatatable;
use Illuminate\Http\Request;
use App\Admin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminDatatable $admin)
    {
        return $admin->render('admin.admins.index',['title' =>'Admin Control']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create',['title'=>'Create new Admin']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(),
        ['name'=>'required',
        'email'=>'required|email|unique:admins',
        'password'=>'required|min:6'
        ]);
        $data['password'] = bcrypt(request('password'));
        Admin::create($data);
        session()->flash('success','Admin recored Added');
        return redirect(aurl('admin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.admins.edit',['title'=>'Edit Admin'],compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate(request(),
        ['name'=>'required',
        'email'=>'required|email|unique:admins,email,'.$id,
        'password'=>'sometimes|nullable|min:6'
        ]);
        if(request()->has('password'))
        {
            $data['password'] = bcrypt(request('password'));
        }
        Admin::where('id',$id)->update($data);
        session()->flash('success','Admin record Updated');
        return redirect(aurl('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::find($id)->delete();
        session()->flash('success', 'Admin record Deleted');
        return redirect(aurl('admin'));
    }

    public function multi_delete()
    {
        if(is_array(request('item')))
        {
            Admin::destroy(request('item'));
        }
        else{
            Admin::find(request('item'))->delete();
        }
        session()->flash('error','Admin record Deleted');
        return redirect(aurl('admin'));
    }
}
