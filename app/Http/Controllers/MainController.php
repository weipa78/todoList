<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $items = DB::select('select * from todoList order by id');

        return view('todo', ['items' => $items]);
    }

    public function addInput() {
        return view('addInput');
    }

    public function addConfirm(Request $request) {
        $item = [
            'id' => $request->id,
            'task'  => $request->task,
            'priority'  => $request->priority,
            'deadline'  => $request->deadline,
            'manager'  => $request->manager,
            'remarks'  => $request->remarks
        ];
        return view('addConfirm', ['item' => $item]);
    }

    public function add(Request $request) {
        $param = [
            'task'  => $request->task,
            'priority'  => $request->priority,
            'deadline'  => $request->deadline,
            'manager'  => $request->manager,
            'remarks'  => $request->remarks
        ];
        // dd($param);
        DB::insert('insert into todolist (task, priority, deadline, manager, remarks) 
        values (:task, :priority, :deadline, :manager, :remarks)', $param);
        
        $items = DB::select('select * from todoList order by id');
        return view('todo', ['items' => $items]);
    }

    public function changeInput(Request $request) {
        // dd($request);
        $id = $request->id;
        $param = ['id' => $id];
        // dd($param);
        $items = DB::select('select * from todoList where id = :id', $param);
        $item = $items[0];

        // dd($item);
        return view('changeInput', ['item' => $item]);
    }

    public function changeConfirm(Request $request) {
        $item = [
            'id' => $request->id,
            'task'  => $request->task,
            'priority'  => $request->priority,
            'deadline'  => $request->deadline,
            'manager'  => $request->manager,
            'remarks'  => $request->remarks
        ];
        // dd($item);
        return view('changeConfirm', ['item' => $item]);
    }

    public function change(Request $request) {
        // dd($request);
        $param = [
            'task'  => $request->task,
            'priority'  => $request->priority,
            'deadline'  => $request->deadline,
            'manager'  => $request->manager,
            'remarks'  => $request->remarks,
            'id' => $request->id
        ];
        // dd($param);
        DB::update('update todoList set task = :task, priority = :priority
        , deadline = :deadline, manager = :manager, remarks = :remarks where id = :id', $param);
        // dd($param);
        $items = DB::select('select * from todoList order by id');
        // dd($items);
        return view('todo', ['items' => $items]);
    }

    public function deleteConfirm(Request $request) {
        
        $param = ['id' => $request->id];
        $items = DB::select('select * from todoList where id = :id', $param);
        $item = $items[0];

        // dd($item);
        return view('deleteConfirm', ['item' => $item]);
    }

    public function delete(Request $request) {
        // dd($request);
        $param = [
            'id' => $request->id
        ];
        DB::delete('DELETE FROM todoList where id = :id', $param);
        
        $items = DB::select('select * from todoList order by id');
        // dd($items);
        return view('todo', ['items' => $items]);
    }
}
