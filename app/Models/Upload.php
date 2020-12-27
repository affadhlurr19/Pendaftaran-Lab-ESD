<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    public $primaryKey = 'id';

    protected $table = 'uploadfile';

    protected $fillable = [
        'id_user', 'file_CV', 'path_CV', 'file_KSM', 'path_KSM', 'file_ML', 'path_ML', 'file_Personalities', 'path_Personalities', 'extensi_file'
    ];
}

