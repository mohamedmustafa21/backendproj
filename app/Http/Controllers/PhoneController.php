<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;


class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Phone::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    //     $phones = $request->get("data");
    //     // echo (json_encode($phones));


    //     foreach($phones as $phone)
    // {

    //     $container = new Phone([
    //         'customer_id' => $phone['customer_id'],
    //         'phone' => $phone['phone'],
    //       ]);
    //     $container->save();
    // }
    // return response()->json('Successfully added');
        $validated = $request->validate([
            'customer_id' => 'required',
            'phone' => 'required',
        ]);

        return Phone::create($validated);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Phone::find($id);
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
        $validated = $request->validate([
            'id' => 'required',
            'customer_id' => 'required',
            'phone' => 'required',
        ]);
            $phone = Phone::find($id);
            $phone->update($validated);
            return $phone;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Phone::destroy($id);
        return ('Deleted Successfully');
    }
}
