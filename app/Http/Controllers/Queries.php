<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\querie;
class Queries extends Controller
{
    
    function queriess(Request $req)
    {
        if(querie::Create($req->all())){
            return true;
        }
    
    }


}
