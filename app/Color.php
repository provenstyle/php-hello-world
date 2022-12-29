<?php

namespace App {

    class Color
    {
        public string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        function getName():string {
            return $this->name;
        }
        function setName($name):void {
            $this->name = $name;
        }
    }

}
