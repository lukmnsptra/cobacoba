<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    //menambahkan data ke database
    public function store(Request $request) {
    // memvalidasi inputan
    $validator = Validator::make($request->all(),[
        
    ])
    }
}
