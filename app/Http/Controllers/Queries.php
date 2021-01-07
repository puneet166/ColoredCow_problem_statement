<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\querie;
class Queries extends Controller
{
    
    function queriess(Request $req)
    {
        if(querie::Create($req->all()))
        return back()->with('success', 'Query has been submitted sucessfully');
    }


}
