<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($search=null)
    {
        if($search!=null){
            $tasks = Todo::where('name','LIKE','%'.$search.'%')->orderBy('id','desc')->paginate(10);
            return response()->json($tasks);
        }
        $tasks = Todo::orderBy('id','desc')->paginate(10);
        return response()->json($tasks);
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
    public function store(TodoRequest $request)
    {
        return Todo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($task)
    {   
        $task_detail = Todo::where('id',$task)->first();
        return response()->json($task_detail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $task
     * @return \Illuminate\Http\Response
     */
    public function update(TodoRequest $request, $task)
    {
        $task_detail = Todo::where('id',$task)->first();
        if($task_detail){
            $task_detail->name = $request->name;
            if($task_detail->save()){
                return response()->json($task_detail);           
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($task)
    {
        $deleted = Todo::where('id',$task)->delete();
        if($deleted){
            return response()->json(['status'=>200]);
        }else{
            return response()->json(['status'=>201]);
        }
    }
}
