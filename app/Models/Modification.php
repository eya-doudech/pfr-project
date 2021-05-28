<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modification extends Model
{
    use HasFactory;
    protected $fillable = ['immobli_id', 'old_val', 'new_val', 'modified_attribute'];

    public function immobili()
    {

        return $this->belongsTo(Immobli::class);
    }
}
