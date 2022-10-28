<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'excerpt', 'body', 'image_path', 'is_published', 'min_to_read'
    ];

    // protected $table = 'post';

    // protected $primarykey = 'title';

    // protected $timestamps = false;
    
    // protected $dateTime = 'dd-mm-yyyy';

    // protected $connection = 'sqlite';
    
    // protected $attibutes = [
    //     'is_published' => true
    // ];

}
