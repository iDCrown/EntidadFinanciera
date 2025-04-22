<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CuentaAhorros extends Model
{
    protected $primaryKey = 'id_cuentaA';

    protected $fillable = [
        'id_cuentaA', 
        'id_cliente_producto'
    ];



    // public function books()
    // {
    //     return $this->hasMany(Book::class);
    // }
}