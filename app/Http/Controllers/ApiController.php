<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function common(){
        $data = [];
        $data['site_setting'] = DB::table('tbl_site_setting')->first();
        return response()->json($data);
    }
}
