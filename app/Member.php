<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function meetingName($id)
    {
        $mname = Meetings::where('id', $id)->first();
        echo $mname->m_name;
    }

    public function meetingDesc($id)
    {
        $mname = Meetings::where('id', $id)->first();
        echo $mname->m_desc;
    }

    public function meetingDate($id)
    {
        $mname = Meetings::where('id', $id)->first();
        echo $mname->m_date;
    }

    public function profilePictureMember()
    {
        if ($this->picture) {
            return "/storage/{$this->picture}";
        }
        return asset('white')."/img/favicon.png";
    }

}
