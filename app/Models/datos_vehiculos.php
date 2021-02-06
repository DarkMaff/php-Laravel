<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos_vehiculos extends Model
{
  protected $fillable = [
  'id', 'patente', 'vehiculo', 'valor_permiso', 'interes_ajustes', 'multas_impagas','subtotal'
  ];
}
