<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = DB::table('tasks')->get();

        return view('tasks', compact('tasks'));
    }


    public function store(Request $request)
    {
        DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return 'store';
    }
    public function DELETE($id)
    {
        DB::table('tasks')->where('id', '=', $id)->delete();
        return redirect()->back();
    }
    public function update($id)
    {
        $task =  DB::table('tasks')->where('id', $id)->get();
        return redirect()->back();
    }
}
