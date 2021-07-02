<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'title' , 'content' , 'date_written',
        'post_imge' , 'votes_up' , 'votes_down',
        'catogory_id', 'author_id'
    ];
}
