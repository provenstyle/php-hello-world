<?php

namespace App {

    class Animal implements Nameable {
        private sting $name;
        function setName(string $name) {
           $this->name = $name;
        }
        function getName(): string {
            return $this->name;
        }
    }
}