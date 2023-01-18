<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagramType extends Model
{
    use HasFactory;

    protected $table = 'diagram_types';
    protected $fillable = ['diagram_name'];

    public function uml(){
        return $this->hasMany(Umls::class);
    }
}
