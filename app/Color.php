<?php

namespace App {

    class Color
    {
        private string $name;

        function getName():string {
            return $this->name;
        }
        function setName($name):void {
            $this->name = $name;
        }
    }

}
