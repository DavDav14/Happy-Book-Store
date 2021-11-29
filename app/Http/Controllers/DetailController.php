<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    public function show(Detail $detail){
        return view('detail',[
            'title' => 'Book Detail',
            'detail' => $detail
        ]);
    }
}
