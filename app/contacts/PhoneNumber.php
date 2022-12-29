<?php

namespace app\contacts {

    class PhoneNumber {
        public PhoneNumberType $type;
        public string          $number;

        public function __construct(PhoneNumberType $type, string $number)
        {
            $this->type   = $type;
            $this->number = $number;
        }
    }

}
