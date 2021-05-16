<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Admin;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $u_id = $request->session()->get('ADMIN_ID');
        $result=Admin::where(['id'=>$u_id])->first();
        $u_name = $result['email'];
        return view('admin/category',compact('u_name'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manage_category(Request $request)
    {
        $u_id = $request->session()->get('ADMIN_ID');
        $result=Admin::where(['id'=>$u_id])->first();
        $u_name = $result['email'];
        return view('admin/manage_category',compact('u_name'));
    }
}
