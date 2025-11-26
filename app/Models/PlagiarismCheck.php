<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlagiarismCheck extends Model
{
    protected $fillable = [
        'document_a',
        'document_b',
        'similarity_percentage',
    ];

    protected $casts = [
        'similarity_percentage' => 'decimal:2',
    ];
}
