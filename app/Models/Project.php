<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\ProjectType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Project extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name_en',
        'name_bn',
        'slug',
        'client_name_en',
        'client_name_bn',
        'address_en',
        'address_bn',
        'area_en',
        'area_bn',
        'cost_en',
        'cost_bn',
        'description_en',
        'description_bn',
        'started_at',
        'status',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function project_type()
    {
        return $this->belongsTo(ProjectType::class);
    }
}
