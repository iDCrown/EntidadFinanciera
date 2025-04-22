<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TarjetaCredito extends Model
{
    protected $primaryKey = 'id_tarjetaC'; 
    protected $fillable = [
        'id_tarjetaC', 
        'cupo', 
        'calificacion_cartera', 
        'id_cliente_producto'
    ];



    // public function books()
    // {
    //     return $this->hasMany(Book::class);
    // }
}