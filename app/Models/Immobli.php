<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Immobli extends Model
{

    use HasFactory;
    use SoftDeletes;
    //protected $with=["categorie_id",] ;
    protected $fillable = ['designation', 'quantite', 'codeAbar', 'dateDentree', 'dateDeSortie', 'categorie_id', 'departement_id', 'user_id'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Categorie::class,'categorie_id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function modifications()
    {
        return $this->hasMany(Modification::class);
    }
}
