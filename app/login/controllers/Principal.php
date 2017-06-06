<?php
namespace App\login\controllers;

use App\Usuario;
use Controller,View,Token,Session,Arr,Message;
use System\tools\rounting\Redirect;

class Principal extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		View::ver('login/principal/index');
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
	                'user_id'	=> $usuario->id,
	                'username'	=> $username,
	                'role'		=> $usuario->rol	
	            );

	            //$session->register(120); // Register for 2 hours.
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
}