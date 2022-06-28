<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Requests extends JsonResource
{

    
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'customer' => $this->customer,
            'user' => $this->user,
            'request_products' => $this->request_products,
            'date_of_call' => $this->date_of_call,
            'date_for_call_back' => $this->date_for_call_back,
            'status'=> $this->status

        ]; 
    }
}
