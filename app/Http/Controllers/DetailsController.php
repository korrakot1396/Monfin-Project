<?php

namespace App\Http\Controllers;

use App\Room;
use Auth;
use App\Detail;
use App\Payment;
use App\Task;
use Illuminate\Http\Request;


class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::detailNotPaid()->get();
        return view('details.index',['details' => $details]);
    }
    public function indexPaid()
    {
        $details = Detail::detailPaid()->get();
        return view('details.index',['details' => $details]);
    }
    public function indexAll()
    {
        $details = Detail::get();
        return view('details.index',['details' => $details]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('details.create',['room_id'=>$request->input('room_id'),'start_date'=>$request->input('start_date'),'end_date'=>$request->input('end_date')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room_id = $request->input('room_id');
        $room =  Room::findOrFail($room_id);

        $detail = new Detail;
        $detail->room_id = $room_id;
        $detail->earnest_price = 'ยังไม่ได้ชำระเงิน';
        $detail->price_room = $room->room_category->price;
        $detail->checkin_date =  $request->input('start_date');
        $detail->checkout_date =  $request->input('end_date');

        $detail->user_id = Auth::user()->id;

        $detail->save();

        return redirect()->action('DetailsController@show',
        [Auth::user()->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = Detail::where('user_id',$id)->get();
        return view('details.show', ['details' => $details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Detail::findOrFail($id);
        return view('details.edit', ['detail' => $detail]);
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
        $detail = Detail::findOrFail($id);
        $detail->earnest_price= $request->input('earnest_price');
        $detail->status = $request->input('status');
        $detail->detail= $request->input('detail');
        $detail->save();

        return view('details.showadmin', ['detail' => $detail]);

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

    /* public function user() {
        $details = Detail::where('user_id', Auth::id())->get();
        ...
   } */
}
