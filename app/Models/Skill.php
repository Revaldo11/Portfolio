<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function projects()
    {
        // Relasi 1:N (1 skill memiliki banyak project)
        return $this->hasMany(Project::class);
    }
}
