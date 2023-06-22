<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    
    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'project_date',
        'programming_languages',
        'link',
        'type_id',
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}