<?php

namespace App\Http\Controllers;

use App\Models\Request as SalesRequests;
use App\Http\Resources\Requests as RequestsResource;


use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = SalesRequests::all();
        return RequestsResource::collection($requests);
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required',
            'oncharge_user' => 'required',
            'date_of_call' => 'required',
            'date_for_call_back' => 'required',
            'status' => 'required',
        ]);

        return SalesRequests::create($validated);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request = SalesRequests::find($id)->all();
        return RequestsResource::collection($request);

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
            'oncharge_user' => 'required',
            'date_of_call' => 'required',
            'date_for_call_back' => 'required',
            'status' => 'required',
        ]);

            $salesrequest = SalesRequests::find($id);
            $salesrequest->update($validated);
        return $salesrequest;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SalesRequests::destroy($id);
        return ('Deleted Successfully');
    }
}
