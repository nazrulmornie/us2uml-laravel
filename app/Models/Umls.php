<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umls extends Model
{
    use HasFactory;

    protected $table = 'umls';
    protected $primaryKey = 'id';
    protected $fillable = ['project_name', 'image', 'user_id'];
}
