<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = [];

public function product(){
    return $this->hasMany(Product::class);
}
public function comment(){
    return $this->hasMany(Comment::class);
}
}

