<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    //
    protected $table = 'tbl_files';
    protected $fillable = [
        'file'
    ];
}
