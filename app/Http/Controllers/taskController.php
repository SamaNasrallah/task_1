<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;


class taskController extends Controller
{
    public function create () {
        return view('task.test');
    }

    
    
    public function store (Request $request){
        $driver=$request['driver'];
        $Quantity=$request['Quantity'];
        $amount=$request['amount'];
        $item=$request['item'];
        $stat="تم الاستلام ";

        $tasks = new Task();
        $tasks->driver=$driver;
        if ($amount == 'liter') {
            $tasks->Quantity= $Quantity.'لتر' ;
        } elseif ($amount == 'money') {
            $tasks->Quantity= $Quantity.'شيكل'  ;
        }
        $tasks->item =$item;
        $tasks->stat =$stat;

        $result = $tasks->save();

        return redirect('/');

    }

    public function index (Request $request){
       $tasks = Task::select('id' , 'item' , 'Quantity' , 'driver' , 'stat', 'created_at')->get();;
        
       return view('task.test')->with('tasks', $tasks);

    }

}


