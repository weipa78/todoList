<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class MainController extends Controller
{
    public function index()
    {
        $items1 = new Item;
        $items = $items1->orderBy('id', 'asc')->get();
        $param = [
            'items' => $items
        ];
        return view('main.index', $param);
    }
    
    public function create(Request $request)
    {
        $items = new Item;
        $form = $request->all();
        unset($form['_token']);
        $insert1 = $items->fill($form);
        $insert = $insert1->save();

        return redirect('/main');
    }
    
    public function updateForm(Request $request)
    {
        $item = Item::find($request->id);
        return view('main.updateForm', ['item' => $item]);
    }
    
    public function updateConfirm(Request $request)
    {
        return view('main.updateConfirm', ['request' => $request]);
    }
    
    public function update(Request $request) 
    {
        $item = [
            'id' => $request->get('id'),
            'registryDate' => $request->get('registryDate'),
            'completionDate' => $request->get('completionDate'),
            'content' => $request->get('content'),
            'priority' => $request->get('priority'),
            'status' => $request->get('status'),
        ];
        $itemOrigin = Item::find($request->id);
        $itemNew = $itemOrigin->fill($item)->save();
        
        return redirect('/main');
    }
    
    public function deleteConfirm(Request $request)
    {
        $item = Item::find($request->id);
        return view('main.deleteConfirm', ['item' => $item]);
    }
    
    public function delete(Request $request)
    {
        Item::find($request->id)->delete();
        return redirect('/main');
    }
}
