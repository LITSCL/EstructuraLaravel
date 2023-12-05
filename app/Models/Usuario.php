<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
	use Notifiable;
	
	protected $table = "usuario"; //Las variables tienen que estar en inglés.
	protected $primaryKey = "rut";
	protected $keyType = "string";
	protected $fillable = ["rut", "nombre", "apellido", "email", "clave", "tipo", "remember_token", "created_at", "updated_at"];
	
	public function getAuthPassword()
	{
		return $this->clave;
	}
}
