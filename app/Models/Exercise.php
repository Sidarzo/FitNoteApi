<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public $fillable = ['id','title','duration','description','weight','repetition','serie','restDuration','type','program_id'];
    use HasFactory;

    public function program(){
        return $this->belongsTo(Program::class);
    }
}
