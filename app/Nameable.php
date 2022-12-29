<?php

namespace App {
    interface Nameable {
        function setName(string $name);
        function getName(): string;
    }
}