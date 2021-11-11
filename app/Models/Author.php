<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['name'];
    //memberikan akses apa saja yang bisa diisi
    protected $fillable = ['name'];
    //mencatat waktu pembuatan dan update data otomatis
    public $timestapms = true;
    //membuat relasi one to many
    public function books()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->hasMany('App\Models\Book', 'author_id');
    }
}
