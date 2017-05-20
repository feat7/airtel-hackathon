<?php

namespace App\Http\Controllers;

use App\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class SolutionController extends Controller
{
    
    public function __construct(){
        
        // $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Solution::all();
        return view('solutions.index', ['solutions' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solutions.create');
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
        $solution = new Solution;

        $solution->heading = $request->heading;
        $solution->description = $request->description;
        $solution->answer = $request->answer;

        if($solution->save()) {
            return redirect('solution.index', ['messege' => 'Added Solution Successfully!!!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solution = SOlution::find($id);
        return view('solutions.show', ['solution' => $solution]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        //
    }
}
