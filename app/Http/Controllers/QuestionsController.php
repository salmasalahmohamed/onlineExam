<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class QuestionsController extends Controller
{
    public function index(){
             $questions=Questions::all();
        return view('admin.questions.index',get_defined_vars());
    }
    public function store(Request $request){
        $validated=$request->validate([
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'ans'=>'required',

        ]);
        Questions::create($validated);
        return redirect()->back()->with('success','success');

    }
    public function update(Request $request,$id){
        $question=Questions::find($id);
        $validated=$request->validate([
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'ans'=>'required',

        ]);
        $question->update($validated);
        return redirect()->back()->with('success','success updated');

    }
    public function question(){

        \Illuminate\Support\Facades\Session::put('nextq','1');
        \Illuminate\Support\Facades\Session::put('wrongans','0');
        \Illuminate\Support\Facades\Session::put('correctans','0');

        $question=Questions::all()->first();
        return view('exam',get_defined_vars());

    }
    public function submitans(Request $request){
        $validated=$request->validate([
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'ans'=>'required',

        ]);

if ($validated->ans==$request->$validated){
    \Illuminate\Support\Facades\Session::put('correctans',\Illuminate\Support\Facades\Session::get('correctans')+1);


}else{
    \Illuminate\Support\Facades\Session::put('wrongans',\Illuminate\Support\Facades\Session::get('wrongans')+1);

}
        \Illuminate\Support\Facades\Session::put('nextq',\Illuminate\Support\Facades\Session::get('nextq')+1);


       $question=Questions::find(\Illuminate\Support\Facades\Session::get('nextq'));

        $questions=Questions::all();






        if ($questions->count()<\Illuminate\Support\Facades\Session::get('nextq')){

            return to_route('end',get_defined_vars());

        }




        return view('exam',get_defined_vars());














    }
}
