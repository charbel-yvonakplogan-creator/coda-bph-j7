<?php

class Router {

    public function  __construct() {

    }

    public function handleRequest(array $get) : void {

         // si j'ai reçu une route
        if(isset($get["route"]))
        {
            if($get["route"] === "a-propos")
            {
             $ctrl = new PageController();
             
             $ctrl ->about();

            }
            else if($get["route"] === "")
            {
               $ctrl = new PageController();

               $ctrl -> home();
            }

            else {
                $ctrl = new PageController();

                $ctrl -> notFound();
            }

    }
}

}

?>

