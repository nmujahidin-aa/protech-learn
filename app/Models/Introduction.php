<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    use HasFactory;

    protected $table = 'introductions';

    protected $fillable = [
        'stage',
        'purpose',
        'guide',
    ];
}
