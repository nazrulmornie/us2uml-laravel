<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStory extends Model
{
    use HasFactory;

    protected $table = 'user_stories';
    protected $fillable = ['user_story', 'uml_id', 'user_id'];

    public function uml(){
        return $this->belongsTo(Umls::class, 'uml_id');
    }
}
