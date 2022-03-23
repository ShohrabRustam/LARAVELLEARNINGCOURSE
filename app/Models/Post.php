<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "posts";
    protected $primarykey = 'id';
    protected $fillable=[
        'title',
        'content'
    ];
    protected $dates= ['deleted_at'];
}
