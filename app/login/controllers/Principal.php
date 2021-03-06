<?php
namespace App\login\controllers;

use App\Usuario;
use Controller,View,Token,Session,Arr,Message,Redirect;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
	    $session = new Session();

	    // Check if the session registered.
	    if ($session->isRegistered()) {
	        // Check to see if the session has expired.
	        // If it has, end the session and redirect to login.
	        if ($session->isExpired()) {
	            $session->end();
	        	Redirect::to('login/principal/login');
	        } else {
	            // Keep renewing the session as long as they keep taking action.
	            $session->renew();
	            $usuario = (object) Session::get('current_user');
	            $url = $usuario->rol.'/principal';
	            Redirect::to($url);
	        }
	    } else {
	        Redirect::to('login/principal/login');
	    }
    }
    
    public function login()
    { 
    	View::ver('login/principal/login');
    }

    public function verificar()
    {
		extract($_POST);
		$usuario = Usuario::where('usuario',$username)->first();
		if($usuario)
		{
			$iguales = password_verify($password, $usuario->password);
			if($iguales)
			{
	            $session = new Session();

	            // You can define what you like to be stored.
	            $user = array(
	                'id'	=> $usuario->id,
	                'usuario'	=> $usuario->usuario,
	                'nombre'  => $usuario->nombre,
	                'apellido' => $usuario->apellido,
	                'cargo'	=> $usuario->cargo,
	                'rol'		=> $usuario->rol	
	            );

	           	$session->register(120); // Register for 2 hours.
	            $session->set('current_user', $user);
	            //header('location: '.baseUrl.'admin/pensionados');
	            Redirect::send('admin/pensionados','success','Bienvenido al sistema');
			}
			else
			{
	            Redirect::send('login/principal','error','Contraseña incorrecta.');
			}
		}
		else
		{
            Redirect::send('login/principal','error','Usuario incorrecto.');
		}

		Arr::show($usuario);
    }

    public function clave()
    {
		$password = password_hash('123', PASSWORD_DEFAULT);
		echo $password;
	}

	public function sesion()
	{
		$usuario = Session::get('current_user');
		//echo $usuario['role'];
		echo $usuario->role;
		//Arr::show(Session::get('usuario'));
	}

	public function logout()
	{
		Session::end();
		Redirect::to('');
	}
}