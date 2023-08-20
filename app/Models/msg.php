<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class msg extends Model
{
    use HasFactory;

    protected $fillable =['user_id','MsgText'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
