<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    //
    public function index(Request $request, $modelName){
        $adminUser = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $records = $model::paginate(5);
        echo $model;
        return view('admin.listing',['user'=>$adminUser]);
    }
}
