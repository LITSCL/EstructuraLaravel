<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $table = "producto"; //Las variables tienen que estar en inglés.
    protected $primaryKey = "codigo";
    protected $keyType = "string";
    protected $fillable = ["codigo", "nombre", "precio", "categoria_id", "created_at", "updated_at"];
    
    //1. Creando las relaciones "Many To One" (Muchos a uno), esto permite que el ORM reconozca las relaciones entre las tablas de la base de datos.
    public function getCategoria()
    {
    	return $this->belongsTo(Categoria::class, "categoria_id"); //Este método permite traer un registro único de la clave foránea.
    }
}
