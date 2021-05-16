<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="categories";
    protected $fillable=['designation','famille'];
    
    public function immoblis(){
        return $this->hasMany(Immobli::class);
    }
}
