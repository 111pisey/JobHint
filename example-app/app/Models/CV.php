<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'interesting_position', 'Location'
     ];
     public $table='cv';
}
