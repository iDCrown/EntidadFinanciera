<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ClienteProducto extends Model
{
    protected $primaryKey = 'id_cliente_producto';
    protected $fillable = [
        'id_cliente_producto', 
        'id_cliente', 
        'id_producto', 
        'fecha'
    ];



    // public function books()
    // {
    //     return $this->hasMany(Book::class);
    // }
}