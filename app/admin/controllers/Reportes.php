<?php
namespace App\admin\controllers;

use App\Autorizado;
use App\Pensionado;
use App\admin\models\ReportesModel;
use Controller,View,Token,Session,Arr,Message,Redirect;
use System\tools\security\Permission;

class Reportes extends Controller
{
    function __construct()
    {
        parent::__construct();
        Permission::withRole('admin');
    }

    public function index()
    {
		View::ver('admin/reportes/index');
    }

    public function autorizados()
    {
    	$autorizados = Autorizado::all();
    	View::show('autorizados', compact('autorizados'));
    }

    public function lista_pensionados()
    {
    	$pensionados = Pensionado::all();
		$mpdf = new \mPDF('','Letter',11,'arial');
		ob_start();
		include('app/admin/views/reportes/encabezado.php');
		$mpdf->SetHTMLHeader(ob_get_clean());
		$mpdf->SetHTMLFooter('
		<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>
		<td width="80%"><span style="font-weight: bold; font-style: italic;">Nota: De uso Exclusivo para la Distribución de PDVAL.</span></td>
		<td width="20%" style="text-align: right; ">{PAGENO}/{nbpg}</td>
		</tr></table>

		');
		$mpdf->AddPage('', // L - landscape, P - portrait 
		'', '', '', '',
		5, // margen izquierdo
		5, // margen derecho
		40, // margin arriba
		5, // margin abajo
		0, // margin encabezado
		0); // margin pie de pagina

		ob_start();
		include("app/admin/views/reportes/pensionados.php");
		$mpdf->WriteHTML(ob_get_clean(),2);
		$nombre = "Pensionados.pdf";
		$mpdf->Output($nombre,'D');
	}

    public function lista_autorizados()
    {
		$mpdf = new \mPDF('','Letter',11,'arial');
		ob_start();
		include('app/admin/views/reportes/encabezado.php');
		$mpdf->SetHTMLHeader(ob_get_clean());
		$mpdf->SetHTMLFooter('
		<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>
		<td width="80%"><span style="font-weight: bold; font-style: italic;">Nota: De uso Exclusivo para la Distribución de PDVAL.</span></td>
		<td width="20%" style="text-align: right; ">{PAGENO}/{nbpg}</td>
		</tr></table>

		');
		$mpdf->AddPage('', // L - landscape, P - portrait 
		'', '', '', '',
		5, // margen izquierdo
		5, // margen derecho
		40, // margin arriba
		5, // margin abajo
		0, // margin encabezado
		0); // margin pie de pagina

		ob_start();
    	$autorizados = Autorizado::all();
		include("app/admin/views/reportes/autorizados.php");
		$mpdf->WriteHTML(ob_get_clean(),2);
		$nombre = "autorizados.pdf";
		$mpdf->Output($nombre,'D');
		//Arr::show($autorizados);
	}
}