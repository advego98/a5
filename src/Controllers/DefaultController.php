<?php

namespace Rentit\Controllers;

use Rentit\Controller;
use Rentit\Models\Property;


final class DefaultController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }
    public function index(){

        $prop=new Property();

        $content=$prop->GetAllPropieties();

        $i=0;

        $html="<table> <tr>";

        foreach ($content as $inmueble){
            $i++;
            if ($i==0){
                $html.="<tr>";
            }

            $html.="<td>Titulo: ".$inmueble['title']."<br/>descipcion: ".$inmueble['description']."</td>";

            if ($i==2){
                $html.="</tr>";
                $i=0;
            }

        }
        $html.="</tr></table>";
        $data=['title'=>'Default',
            'html'=>$html];
        $this->render($data, "");
    }


    public function json(array $dataview)
    {
        // TODO: Implement json() method.
    }
}