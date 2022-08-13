<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SetCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return [
        //     'id' => $this->id,
        //     'player1_id' => $this->player1_id,
        //     'player1_id' => $this->player1_id,
        //     'player2_id' => $this->player2_id,
        //     'date' => $this->date,
        //     'table_tupe' => $this->table_tupe,
        //     'tournament' => $this->tournament,
        //     'table_type' => $this->table_type,
        //     'venue' => $this->venue . "test",
        // ];
        return parent::toArray($request);
    }
}
