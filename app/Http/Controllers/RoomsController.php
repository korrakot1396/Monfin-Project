<?php

namespace App\Http\Controllers;

use App\Room;
use Auth;
use App\RoomCategory;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* $validatedData = $request->validate([
            
            'dateInput1' =>  'required|date',
            'dateInput2' => 'date|after:dateInput1'
           
        ]); */

        $this->validate($request,['dateInput1' =>  'required|date', 'dateInput2' => 'date|after:dateInput1' ],
            [
                'dateInput1.required' => 'กรุณาใส่วันที่เริ่มต้นที่ต้องการจะเข้าพัก',
                'dateInput2.date' => 'กรุณาใส่วันที่สิ้นสุดที่ต้องการจะเข้าพัก',
                'dateInput2.after' => 'วันที่เริ่มต้นที่ต้องการจะเข้าพักต้องมาก่อนวันที่สิ้นสุด',
            
            ]);

        

        $start_date = $request->query('dateInput1');
        $end_date = $request->query('dateInput2');
        
      /*   dd($start_date); */
        $rooms = Room::get();
        $filtered = $rooms->filter(function ($room, $key) use ($start_date, $end_date) {
            return $room->isAvailable($start_date, $end_date);
        });
        /* dd($filtered); */
        return view('rooms.index',['rooms' => $filtered, 'start_date' =>  $start_date, 'end_date' =>  $end_date]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $room = new Room;


        $room->zone = "A";
        $room->room_categorie_id = $request->input('room_categorie_id');
        $room->user_id = Auth::user()->id;
        $room->save();

        return redirect()->action('RoomsController@show',
        ['room' => $room->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.show', ['room' => $room]);
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

    public function __construct()
    {
        $this->middleware('auth');
    }
}
