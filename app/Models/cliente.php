<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
    protected $primaryKey = 'id_cliente';
    
    protected $fillable = [
        'id_cliente', 
        'nombre', 
        'telefono', 
        'correo'
    ];



    // public function books()
    // {
    //     return $this->hasMany(Book::class);
    // }
}