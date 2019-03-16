<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RequestCollection;
class StateCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
  //    var_dump($request->toArray());
  //echo 'HELLOMUTHAFUCKA';
//  $col = RequestCollection::collection($this->requests);
//  var_dump($col);
//      var_dump(RequestCollection::collection($this->requests[0]));
     return [
         'id' => 'x'.$this->id,
         'title' => $this->name,
         'item' => RequestCollection::collection($this->requests),
      ];
    }
}
