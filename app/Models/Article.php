<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [] ;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function magazine()
    {
        return $this->belongsTo(Magazine::class);
    }
    
}
