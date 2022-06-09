<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    public function scopeOnline($query){
        return $query->where('status', 1);
    }
    
    /**
     * Permet d'indiquer qu'un job est a un seul utilisateur (user)
     *
     * @return void
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
