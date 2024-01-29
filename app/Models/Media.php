<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'MediaType',
        'MediaURL',
        'Description',
        'FileName',
        'Size',
        'Model',
        'UploaderID',
    ];


    public function mediable()
    {
        return $this->morphTo();
    }
}
