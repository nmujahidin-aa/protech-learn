<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;

    protected $table = 'user_tests';
    protected $fillable = [
        'user_id',
        'packet',
        'score',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
