<?php  
namespace System\template;

use System\template\Template;

class View
{
    public static function ver($vista, $array=Null)
    {
        $view = new Template();
        if ($array) {
            foreach ($array as $name => $value) {
                //$this->vars[$name] = $value;
                $view->$name = $value;
                //echo $view->title;
            }
        }

        list($modulo, $controlador,$vista) = explode('/', $vista);

        $view->baseUrl = baseUrl;
        $view->content = $view->render('app/'.$modulo.'/views/'.$controlador.'/'.$vista.'.php');
        echo $view->render('app/'.$modulo.'/views/theme/'.$modulo.'.php');
    }

    public static function verTemplate($vista, $theme, $array=Null)
    {
        $view = new Template();
        if ($array) {
            foreach ($array as $name => $value) {
                //$this->vars[$name] = $value;
                $view->$name = $value;
                //echo $view->title;
            }
        }

        list($modulo, $controlador,$vista) = explode('/', $vista);
        $view->baseUrl = baseUrl;
        $view->content = $view->render('app/'.$modulo.'/views/'.$controlador.'/'.$vista.'.php');
        echo $view->render('app/'.$modulo.'/views/theme/'.$theme.'.php');
    }

    public static function show($vista, $array=Null)
    {
        $view = new Template();
        if ($array) {
            foreach ($array as $name => $value) {
                //$this->vars[$name] = $value;
                $view->$name = $value;
                //echo $view->title;
            }
        }

        $modulo = URI_MODULO;  
        $controlador = URI_CONTROLADOR;  

        $view->baseUrl = baseUrl;
        $view->content = $view->render('app/'.$modulo.'/views/'.$controlador.'/'.$vista.'.php');
        echo $view->render('app/'.$modulo.'/views/theme/'.$modulo.'.php'); 
    } 
}