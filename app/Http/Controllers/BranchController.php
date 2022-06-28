<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Role,Branch,Floor,Status,Type};
class BranchController extends Controller
{
    public function rooms()
    {
        $floors = Floor::where('branch_id',auth()->user()->branch_id)->get('id','number');
        $statuses = Status::all();
        $types = Type::where('branch_id',auth()->user()->branch_id)->get('id','name');
        return view('branch-admin.rooms',[
            'floors'=>$floors,
            'statuses'=>$statuses,
            'types'=>$types,
        ]); 
    }

    public function rates()
    {
        $types = Type::where('branch_id',auth()->user()->branch_id)->get('id','name','description');
        return view('branch-admin.rates',[
            'types'=>$types,
        ]);
    }

    public function users()
    {
        $roles=Role::all('id','name');
        return view('branch-admin.users',[
            'roles'=>$roles,
        ]);
    }
}
