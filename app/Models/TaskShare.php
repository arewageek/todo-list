<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskShare extends Model
{
    //
    protected $fillable = ['task_id', 'user_id', 'role'];
}
