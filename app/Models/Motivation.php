<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivation extends Model
{
    protected $table = 'motivation';

    protected $fillable = [
        'intitule'
    ];

    public function abonne()
    {
        return $this->hasMany(Abonne::class, 'id_motivation');
    }
}
