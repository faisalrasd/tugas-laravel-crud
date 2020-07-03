<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index (){
        $jawaban = JawabanModel::get_all();
        //dd($items);
        return view ('jawaban.index', compact('jawaban'));
    }

    public function create (){
        return view ('jawaban.form');
    }

    public function store (Request $request){
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $jawaban = JawabanModel::save($data);
        //dd($items);
        if($jawaban){
            return view ('jawaban/index');
        }
        else {
            return view ('jawaban/form');
        }
    }
}