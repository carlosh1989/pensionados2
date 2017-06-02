<?php
namespace App\admin\controllers;

use App\admin\repositories\PensionadoRepository;
use Controller,View,Token,Session,Arr,Message;

class Pensionado extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // localhost/proyecto/modulo/principal
    public function index()
    {
        View::show('index');
    }

    // localhost/proyecto/modulo/principal/create
    public function create()
    {
        View::show('create');
    }

    // localhost/proyecto/modulo/principal/
    public function store()
    {
        //Guardar datos enviados de -create-
    }

    // localhost/proyecto/modulo/principal/ID
    public function show($id)
    {
        View::show('show', compact('id'));
    }

    // localhost/proyecto/modulo/principal/ID/edit
    public function edit($id)
    {
        extract($_post);
        $pensionado = Pensionado::find($id);
        View::show('edit' , compact('id','pensioando'));
    }

    // localhost/proyecto/modulo/principal/ID/put
    public function update($id)
    {
        $pensionado = Pensionado::find($id);
        $pensioando->nombre = $nombre;
        $pensionado->save();
        $this->index();
    }

    // localhost/proyecto/modulo/principal/ID/delete
    public function destroy($id)
    {
        //Borrar un registro usando el ID
    }
}