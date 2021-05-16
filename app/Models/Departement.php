<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class departement extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="departements";
    protected $fillable=['designation','localisation'];
    protected $dates=['deleted_at'] ;

    public function immoblis()
    {
        return $this->hasMany(Immobli::class);
    }

}
