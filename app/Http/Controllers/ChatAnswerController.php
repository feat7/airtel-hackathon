<?php

namespace App\Http\Controllers;

use App\ChatAnswer;
use Illuminate\Http\Request;

class ChatAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChatAnswer  $chatAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(ChatAnswer $chatAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChatAnswer  $chatAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatAnswer $chatAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChatAnswer  $chatAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatAnswer $chatAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChatAnswer  $chatAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatAnswer $chatAnswer)
    {
        //
    }


    //API ZONE

    public function getAnswersByQuestionId(\App\ChatQuestion $question)
    {
        return $question->answers;
    }
}
