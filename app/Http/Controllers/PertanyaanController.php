<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
    	$pertanyaan = PertanyaanModel::get_all();
    	return view ('item.index',compact('pertanyaan'));
    }
    public function create(){
    	return view('item.form');
    }
    public function store(Request $request){
    $request = $request->all();
    unset($request['_token']);
    return PertanyaanModel::store($request);
    }
}