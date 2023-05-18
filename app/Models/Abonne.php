<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonne extends Model
{
    protected $table = 'abonne';
    public $timestamps = false;

    protected $casts = [
        'age' => 'int',
        'id_motivation' => 'int',
    ];

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'sexe',
        'profession',
        'rue',
        'code_postal',
        'ville',
        'pays',
        'telephone',
        'email',
        'id_motivation'
    ];

    public function motivation()
    {
        return $this->belongsTo(Motivation::class, 'id_motivation');
    }
}
