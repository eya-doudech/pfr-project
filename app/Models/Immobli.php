<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Immobli extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['designation', 'quantite', 'codeAbar', 'dateDentree', 'dateDeSortie', 'categorie_id', 'departement_id', 'user_id'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
