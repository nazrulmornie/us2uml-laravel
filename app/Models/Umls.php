<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umls extends Model
{
    use HasFactory;

    protected $table = 'umls';
    protected $primaryKey = 'id';
    protected $fillable = ['project_name', 'image', 'user_id', 'diagram_id'];

    public function story(){
        return $this->hasMany(UserStory::class, 'uml_id');
    }

    public function diagram_type(){
        return $this->belongsTo(DiagramType::class, 'diagram_id');
    }
}
