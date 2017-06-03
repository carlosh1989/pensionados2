<?php 
namespace App;
use \Illuminate\Database\Eloquent\Model;
 
class Pensionado extends Model {
    protected $table = 'pensionados';
	public $timestamps = false;
    //Ejemplo de definir campos
    protected $fillable = ['id_autorizado','id_discapacidad','id_municipio','id_parroquia','cedula','nombre','apellido','direccion','telefono','fecha_nacimiento','edad','estado_civil','fecha_registro','sexo'];

}

