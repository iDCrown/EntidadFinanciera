<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EncargoF extends Model
{
    protected $primaryKey = 'id_encargo';

    protected $fillable = [
        'id_encargo', 
        'valor_minimo', 
        'minimo_permanencia', 
        'id_cliente_producto'
    ];



    // public function books()
    // {
    //     return $this->hasMany(Book::class);
    // }
}