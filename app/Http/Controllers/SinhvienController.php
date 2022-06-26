<?php

namespace App\Http\Controllers;

use App\Models\Sinhvien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Imports\SinhvienImport;

class SinhvienController extends Controller
{
    //
    public function importForm(){
        $adminUser = Auth::guard('admin')->user();
            return view('sinhvien.import_form',['user'=>$adminUser]);
    }

    public function importSv(Request $request){
        $adminUser = Auth::guard('admin')->user();
        Excel::import(new SinhvienImport,$request->file);
        return view('sinhvien.import_form',['user'=>$adminUser]);
    }

    public function detail(Request $request, $mssv){
        $adminUser = Auth::guard('admin')->user();
            return view('sinhvien.detail',
                ['user'=>$adminUser],
                ['mssv'=>$mssv]);
    }
}
