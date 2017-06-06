<?php 
namespace App;
use App\Tarea;
use \Illuminate\Database\Eloquent\Model;
 
class Usuario extends Model {
    protected $table = 'usuario';

    //Ejemplo de definir campos
    protected $fillable = ['nombre','email','password'];

}

