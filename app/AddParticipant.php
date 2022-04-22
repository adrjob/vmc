<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddParticipant extends Model
{
    use HasFactory;

    public function participantsName($id)
    {
        $participatns = AddParticipant::where("m_id", $id)->get();
        return $participatns->name;
    }
}
