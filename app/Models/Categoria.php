<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    
    protected $table = "categoria"; //Las variables tienen que estar en inglés.
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $fillable = ["id", "nombre", "created_at", "updated_at"];
    
    //1. Creando las relaciones "One To Many" (Uno a muchos), esto permite que el ORM reconozca las relaciones entre las tablas de la base de datos.
    public function getAllProducto()
    {
    	return $this->hasMany(Producto::class); //Este método permite obtener registros de la clave foránea.
    }
}
