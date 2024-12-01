<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Nombre de la tabla personalizada
    protected $table = 'usuarios';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'id_rol',
    ];

    // Campos ocultos al serializar el modelo
    protected $hidden = [
        'contraseña',
        'remember_token',
    ];

    // Método para especificar que Laravel usará la columna `contraseña`
    // en lugar de `password` para la autenticación
    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    // Casters para transformar atributos al obtenerlos del modelo
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
