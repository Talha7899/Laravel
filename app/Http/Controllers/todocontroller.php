<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class todocontroller extends Controller
{
    public function todo(){
        return view('welcome');
    }

    public function data(Request $request){
        print_r($request->all());

        $request->validate([
            'title' => 'required',
            'textarea' => 'required'
        ]);

        $todo = new todo();
        $todo->tile = $request['title'];
        $todo->description = $request['textarea'];
        $todo->save();
        return redirect('/todo');
}

        public function viewtodo(){
            $view = todo::all();
            // echo "<pre>";
            // print_r($data_view);
            // echo "</pre>";

            $data = compact('view');
            return view('welcome')->with($data);

}

        public function deletetodo($id){
            $delete = todo::find($id)->delete();
            return redirect('/todo');
}
}