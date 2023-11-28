<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Contact extends Model
{

    use HasFactory ;
   protected $table = "contact";
   protected $guarded = [''];
   protected $fillable = ['nom', 'email', 'prenom','tel','service','fonction'];

   
   public function scopeSearch($query, $searchTerm)
   {
       if ($searchTerm) {
           return $query->where(function ($query) use ($searchTerm) {
               $query->where('contact.nom', 'like', '%' . $searchTerm . '%')
                   ->orWhere('contact.prenom', 'like', '%' . $searchTerm . '%')
                   ->orWhere('organisation.nom', 'like', '%' . $searchTerm . '%');
           });
       }
       return $query;
   }
   // Dans le modèle Contact
    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }

}
