<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['id_off','category_name'];

    public function categories()
    {
        return $this->hasMany(self::class,'id_off');
    }
}
