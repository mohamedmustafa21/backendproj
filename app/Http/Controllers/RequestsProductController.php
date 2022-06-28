<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestsProduct;


class RequestsProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RequestsProducts::all();
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
            'request_id' => 'required',
            'product_id' => 'required',
        ]);

        return RequestsProducts::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return RequestsProducts::find($id);
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
            'request_id' => 'required',
            'product_id' => 'required',
        ]);
            $requestsproducts = RequestsProducts::find($id);
            $requestsproducts->update($validated);
        return $requestsproducts;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return ('Deleted Successfully');
    }
}
