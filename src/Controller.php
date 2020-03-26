<?php

namespace Rentit;

abstract class Controller implements View
{
    protected $request;

    function __construct($request)
    {
        $this->request = $request;
    }

    function error($string)
    {
        $this->render(['error'=>$string], 'error');
    }

    function render(?array $dataview = null, ?string $template = null)
    {
        if ($dataview) {
            extract($dataview);
        }

        if ($template == "") {
            include 'Templates/' . $this->request->getController() . '.tpl.php';
        } else {
            include 'Templates/' . $template . '.tpl.php';
        }
    }

    function pre_array($array1){
        echo "<div><pre>".nl2br(print_r($array1,true))."</pre></div>";
    }

}