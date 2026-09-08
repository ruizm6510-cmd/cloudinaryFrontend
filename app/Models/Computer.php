<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    // Un computador tiene muchos aprendices
    public function aprendice(){
        return $this->hasOne(Aprendice::class);
    }
     protected $fillable=['number','brand'];

      protected $guarded = [
        'urlFoto'
    ];
}
