<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeSearch(Builder $query, ?string $search)
    {
        if (!$search) {
            return;
        }

        $query->where('name', 'like', "{$search}%");
    }
}
