<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'id_producto', 
        'nombre'
    ];



    // public function books()
    // {
    //     return $this->hasMany(Book::class);
    // }
}