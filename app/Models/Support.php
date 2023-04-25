<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'subject', 'status', 'body'];
    protected $date = ['created_at', 'updated_at'];
}
