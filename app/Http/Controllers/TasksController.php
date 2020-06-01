<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Detail;
use App\User;
use App\Room;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        foreach($tasks as $task){
            $task->delete();
        }
        $details = Detail::all();
        foreach($details as $detail) {
            $task = new Task;
            $user =  User::findOrFail($detail->user_id);
            $room = Room::findOrFail($detail->room_id);

            if ($detail->status == "ชำระเงินแล้ว") {
                $task->username = $user->username." - ".$room->name;
                $task->detail_id = $detail->id;
                $task->description = $detail->status;
                $task->checkin_date = $detail->checkin_date;
                $task->checkout_date = $detail->checkout_date;
            
                $task->save();
            }
            
        }
        

        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('tasks.index');
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
