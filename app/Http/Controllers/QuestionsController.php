<?php
namespace App\Http\Controllers;

use App\Question;
use App\Http\Controllers;
use Illuminate\Http\Request;


class QuestionsController extends Controller
{
   public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(Request $request)
    {
    $question= Question::all();
     return view ('Questions.index', compact('question'));
    }

    public function create(Question $donor)
    {
        return view ('Questions.create');
    }

    public function store()
    {
        $validated= request()->validate([
        'date'=> ['required',],
        'queries'=> ['required'],
        // 'answer'=> ['required'],
        ]);
        
        $question= Question::create($validated);
        return redirect ('/questions');
    }

    public function show(Question $question)
    {
       
    }
    
    public function edit(Question $question)
    {
        return view('Questions.edit', compact('donor'));
    }

    public function update(Question $question)
    { 
        $question->update(request(['queries', 'date']));
        return redirect ('/questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect('/questions');
    }
}
