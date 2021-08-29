<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JsonDBSave extends Model
{
    use HasFactory;
    protected $table='json_d_b_saves';
    protected $guarded = ['id'];
}
