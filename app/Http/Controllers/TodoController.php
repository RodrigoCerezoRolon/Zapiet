<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getTodoList(){
        return TodoItem::paginate(10);
    }
    public function updateTodoItem(Request $request,$id){
        $todoItem=TodoItem::findOrFail($id);
        $todoItem->status=$request->status;
        $todoItem->save();
        return response()->json(['message'=>'Todo Item Updated'],200);
    }
}
