<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'project_id',
        'image',
        'created_at',
        'updated_at'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
