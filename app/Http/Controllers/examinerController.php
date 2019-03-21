<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\answerModel;
use App\examinerModel;
use App\Http\Resources\examinerResource;
class examinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examiner = examinerModel::all();
        return examinerResource::collection($examiner);    

        // $exam = examinerModel::join('answer_models','answer_models.id','=','examiners.id')
        //                  ->selectRaw('
        //                                examiners.id,
        //                                examiners.lname,
        //                                examiners.fname,
        //                                examiners.course,
        //                                answer_models.id as answer_id,
        //                                examiners.qid
        //                              ')->get();
        //              dd($exam);                
        //             return response()->json(['exams'=>$exam]);
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
        //$examiner=$request->isMethod('PUT')? examinerModel::findOrFail($request->id): new examinerModel;
        $examiner = new examinerModel;
        $examiner->lname = $request->input('lname');
        $examiner->fname = $request->input('fname');
        $examiner->course = $request->input('course');
        $examiner->save();
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
}
