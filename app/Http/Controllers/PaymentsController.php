<?php

namespace App\Http\Controllers;


use App\Detail;
use Auth;
use App\Payment;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::detailNotPaid()->get();
        return view('payments.index',['payments' => $payments]);
    }

    public function indexPaid()
    {
        $payments = Payment::detailPaid()->get();
        return view('payments.index',['payments' => $payments]);
    }

    public function indexAll()
    {
        $payments = Payment::get();
        return view('payments.index',['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       /*  $payments = Payment::orderBy('id')->get();
        return view('payments.create',['payments' => $payments]); */
        return view('payments.create',['detail_id'=>$request->input('detail_id')]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail_id = $request->input('detail_id');
        $detail = Detail::findOrFail($detail_id);

        $payment = new Payment;
        $payment->net_price = $detail->price_room * $detail->nightStay; //เอาจำนวนคืนมาคูณ net รวมภาษี ราคาสุทธิ
        $payment->vat_price = $payment->net_price * .07; //ภาษี
        $payment->total_price = $payment->net_price + $payment->vat_price;//เอาจำนวนคืนมาคูณ
        $payment->detail_id = $detail_id;

        $payment->user_id = Auth::user()->id;

        $payment->save();

        return redirect()->action('PaymentsController@show',
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

        $payments= Payment::where('user_id',$id)->get();
        return view('payments.show', ['payments' => $payments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);
        return view('payments.edit', ['payment' => $payment]);
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
        $payment = Payment::findOrFail($id);

       /*  $imageName = $request->file('image')->getClientOriginalName();
        $payment->image = '/'.$request->file('image')->storeAs('/storage/images/payments', $imageName); */

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
        
        $payment->image = '/images/' . $imageName;

        $payment->save();

       /*  return redirect()->action('PaymentsController@show',
        [Auth::user()->id]); */
        return view('payments.showuser', ['payment' => $payment]);
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
