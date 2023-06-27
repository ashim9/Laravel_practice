<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = ['name','division_id'];

    public function divisions(){
        return $this->belongsTo(Division::class, 'division_id');
    } 
}
