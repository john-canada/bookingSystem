<?php

namespace App\Http\Controllers;
use DB;
use App\answerModel;
use App\examinerModel;
use Illuminate\Http\Request;
//use Illuminate\support\Facades\DB;
use App\Http\Resources\answerResource;
class answerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answer = answerModel::all();
        return answerResource::collection($answer); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $answer = $request->isMethod('put')? answerModel::findOrFail($request->exam_id) : new answerModel; 
        $answer = new answerModel;   
        $answer->e_id = $request->input('e_id');
        $answer->qid = $request->input('qid');
        $answer->e_answer = $request->input('e_answer');
        if($answer->save()){
            return new answerResource($answer);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   public function getExaminer(){
       $data = examinerModel::all();          
        dd($data);
     return view('data',$data);
   }

}
