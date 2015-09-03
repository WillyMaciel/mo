<?php

namespace App\Http\Controllers;

use App\User;
use App\Chat;
use App\Http\Controllers\Controller;
use App\Alerts\MessageBox;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TesteController extends Controller
{

    public function postIndex(Request $request)
    {
        return $request->all();
        //return ['teste1', 'teste2', 'teste3'];
    }
   
}
