<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
           'eid' => $this ->id,
          'title' => '<p> №'.$this->id.'</p>'.'<h5>'.$this->name.'</h5>'.'<p>'.$this->created_at.'</p>',

        ];
    }
}
