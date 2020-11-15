<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectType extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name_en',
        'name_bn',
        'description_en',
        'description_bn',
        'created_at',
        'updated_at'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
