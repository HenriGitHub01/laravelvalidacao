<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    //
    public function inicial(){
        return view('site.quemsomos');
    }
}
