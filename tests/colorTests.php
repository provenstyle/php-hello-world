<?php declare(strict_types=1);

namespace tests {

    use PHPUnit\Framework\TestCase;
    use App\Color;

    final class colorTests extends TestCase
    {
        public function testCanInstantiate(): void
        {
            $target = new Color();
            $this->assertNotNull($target);
        }
    }

}