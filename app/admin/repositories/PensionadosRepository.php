<?php
namespace App\admin\repositories;

use App\Pensionado;
use Eloquent;
use System\tools\session\Message;

class PensionadosRepository 
{
    function __construct()
    {
		new Eloquent();
    }

    public function ingresar($data)
    {
    	extract($data);
    	$existePensionado = Pensionado::where('cedula',$cedula)->first();
    	
    	if(!$existePensionado)
    	{
			$pensionado = Pensionado::create($data);

			if($pensionado->id)
			{
            	Message::send('admin/pensionados','success', 'el pensionado se agrego exitosamente.');
			}
			else
			{
				$mensaje = 'Error al guardar datos de pensionado';
            	Message::send('admin/pensionados/create','error', $mensaje);
			}
    	}
    	else
    	{
    		$mensaje = 'El pensionado ya se encuentra en el sistema';
            Message::send('admin/pensionados/create','error', $mensaje);
    	}
    }
}