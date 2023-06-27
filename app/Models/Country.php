<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    use HasFactory;
    protected $fillable = ['name'];

    public function division(){
        return $this->hasOne(Division::class,'division_id');
    }
}
