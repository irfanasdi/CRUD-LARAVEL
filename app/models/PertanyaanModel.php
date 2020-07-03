<?php 
 namespace App\Models;
 use Illuminate\Support\Facades\DB;
 /**
  * 
  */
 class PertanyaanModel{
 	public static function get_all(){
 		$pertanyaan = DB::table('pertanyaan')->get();
 		return $pertanyaan;
 	}

 	public static function save($data){
 		$pertanyaanBaru = DB::table('pertanyaan')->insert($request);
 		$pertanyaan = DB::table('pertanyaan')->get();

 		if($pertanyaanBaru && $pertanyaan){
 			return view ('index',['pertanyaan'=>$pertanyaan]);
 		}
 	}
 }