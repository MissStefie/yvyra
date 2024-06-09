<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;
    protected $fillable = [
        'Familia', 'Nombre_Cientifico', 'Nombre_Comun', 'Nombre_PY', 'Nombre_BR', 'Nombre_ARG',
        'Descripcion', 'Principales_Usos', 'Porte', 'Altura', 'Extinto',
        'ENE_Floracion', 'FEB_Floracion', 'MAR_Floracion', 'ABR_Floracion', 'MAY_Floracion',
        'JUN_Floracion', 'JUL_Floracion', 'AGO_Floracion', 'SEP_Floracion', 'OCT_Floracion',
        'NOV_Floracion', 'DIC_Floracion', 'ENE_Frutacion', 'FEB_Frutacion', 'MAR_Frutacion',
        'ABR_Frutacion', 'MAY_Frutacion', 'JUN_Frutacion', 'JUL_Frutacion', 'AGO_Frutacion',
        'SEP_Frutacion', 'OCT_Frutacion', 'NOV_Frutacion', 'DIC_Frutacion', 'CA', 'TY', 'PIK', 'ITA',
        'YR', 'LIM', 'POZ', 'CAR', 'MBA', 'Alto_Paraguay', 'Alto_Parana', 'Amambay', 'Boqueron',
        'Caaguazu', 'Caazapa', 'Canindeyu', 'Central', 'Concepcion', 'Cordillera', 'Guaira',
        'Itapua', 'Misiones', 'Neembucu', 'Paraguari', 'Presidente_Hayes', 'San_Pedro'
    ];
}
