<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public static $wrap = false;
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
            "firstname" => $this->firstname,
            "surname" => $this->surname,
            "lastname" => $this->lastname,
            "birthdate" => $this->birthdate,
            "group" => $this->group
        ];
    }
}
