<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisation extends Model
{
    use HasFactory;
    protected $table = 'organisation';
    protected $fillable = ['nom', 'adresse', 'code_postal','ville','statut'];
}
