<?php
namespace Rentit\Controllers;


use Rentit\Controller;
use Rentit\Models\Property;
use Rentit\Session;

class PropertyController extends  Controller
{

    public function __construct($request)
    {

        parent::__construct($request);

    }

    public function index()
    {

        $data = ["title" => "prueba"];
        $this->render($data);

    }

    public function create_property($tit,$desc,$precio){
        $property=Property::create([
            'title'=>$tit,
            'description'=>$desc,
            'price'=>$precio,
            'user_id'=>1]);
        return $property;
    }



    public function add (){
        $this->render(null, "add");
    }

    public function create(){
        if (!empty($_REQUEST['tit']) && !empty($_REQUEST['desc']) &&!empty($_REQUEST['precio'])){


            $tit = filter_input(INPUT_POST, 'tit', FILTER_SANITIZE_STRING);
            $desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
            $precio = filter_input(INPUT_POST, 'precio', FILTER_SANITIZE_STRING);

            try {
                $prop = $this->create_property($tit, $desc, $precio);
                header('location:/');
            } catch (\PDOException $e) {
                $this->error($e->getMessage());
            }

        } else{

            $this->error("Fill the form");

        }

    }

    public function json(array $dataview)
    {
        // TODO: Implement json() method.
    }

}