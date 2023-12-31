<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\group;
use DB;

class DataController extends Controller
{
    protected function getGroupList()
    {
        $data = group::paginate(10);
        return $data;
    }

    protected function getGroupDetails($id)
    {
        $data = DB::table('groups')->where('id',$id)->get();
        return $data;
    }
}
