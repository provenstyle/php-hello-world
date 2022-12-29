<?php declare(strict_types=1);

namespace tests {

    use PHPUnit\Framework\TestCase;
    use App\Contacts\PhoneNumber;
    use App\Contacts\PhoneNumberType;
    use App\Contacts\Person;

    final class personTest extends TestCase
    {
        public function testCanInstantiate(): void
        {
            $target = new Person();
            $this->assertNotNull($target);
        }

        public function testPhoneNumbers(): void
        {
            $person = new Person();
            $person->firstName = 'Michael';
            $person->lastName  = 'Dudley';
            $person->phoneNumbers  = array(
                new PhoneNumber(PhoneNumberType::Home,   '555-555-1000'),
                new PhoneNumber(PhoneNumberType::Mobile, '555-555-2000'),
                new PhoneNumber(PhoneNumberType::Work,   '555-555-3000'),
            );

            $this->assertSame(3, count($person->phoneNumbers));
        }
    }

}