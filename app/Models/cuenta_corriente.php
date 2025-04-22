<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CuentaCorriente extends Model {
    protected $primaryKey = 'id_cuentaC';

    protected $fillable = [
        'id_cuentaC', 
        'salario_minimo', 
        'id_cliente_producto'
    ];



    // public function books()
    // {
    //     return $this->hasMany(Book::class);
    // }
}