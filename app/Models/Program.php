<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public $fillable = ['name','user_id'];

    public function exercices(){
        return $this->hasMany(Exercise::class);
    }
}
