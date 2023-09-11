<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrincipalPositions extends Model
{
    use HasFactory;
    protected $table = 'principal_positions';
    protected $primaryKey = 'id';

    public function principals() : HasMany
    {
        return $this->hasMany(Principals::class);
    }
}
