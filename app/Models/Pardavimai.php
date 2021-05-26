<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pardavimai extends Model
{
    use HasFactory;
    
    protected $table = 'pardavimai';

    protected $fillable = [
        'darbuotojai_id',
        'greitis',
        'aptarnavimas',
        'rekomendacija',
        'pastabos',
        'sutikimas',
    ];
}
