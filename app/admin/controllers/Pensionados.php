<?php
namespace App\admin\controllers;

use App\Pensionado;
use App\admin\repositories\PensionadosRepository;
use Controller,View,Token,Session,Arr,Message;

class Pensionados extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        $mensaje = $_SESSION['flash_message'];
        //\Krumo::dump($mensaje);
        $pensionados = Pensionado::all();
        View::show('index', compact('pensionados'));
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View::show('create');
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        extract($_POST);
        $pensionado = new Pensionado;
        $pensionado->nombre = $nombre;
        $pensionado->apellido = $apellido;
        $pensionado->cedula = $cedula;
        $pensionado->save();
        Message::send('admin/pensionados','error', 'el pensionado se agrego exitosamente.');
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        $pensionado = Pensionado::find($id);
        View::show('show', compact('pensionado'));
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        $pensionado = Pensionado::find($id);
        View::show('edit' , compact('pensionado'));
    }

    // localhost/proyecto/modulo/principal/ID/put
    public function update($id)
    {
        extract($_POST);
        $pensionado = Pensionado::find($id);
        $pensionado->nombre = $nombre;
        $pensionado->apellido = $apellido;
        $pensionado->cedula = $cedula;
        $pensionado->save();
        header('Location: '.baseUrl.'admin/pensionados');
    }

    // localhost/proyecto/modulo/principal/ID/delete
    public function destroy($id)
    {
        $pensionado = Pensionado::find($id);
        $pensionado->delete();
        header('Location: '.baseUrl.'admin/pensionados');
    }

    public function redirect()
    {

        Message::send('admin/pensionados','error', 'el pensionado se agrego exitosamente.');
    }
}