<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CreditoRotativo extends Model
{
    protected $primaryKey = 'id_rotativo';

    protected $fillable = [
        'id_rotativo', 
        'cupo', 
        'calificacion_cartera', 
        'id_cliente_producto'
    ];



    // public function books()
    // {
    //     return $this->hasMany(Book::class);
    // }
}