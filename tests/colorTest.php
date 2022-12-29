<?php declare(strict_types=1);

namespace tests {

    use PHPUnit\Framework\TestCase;
    use App\Color;

    final class colorTest extends TestCase
    {
        private string $colorName = 'Red';

        public function testCanInstantiate(): void
        {
            $target = new Color($this->colorName);
            $this->assertNotNull($target);
        }

        public function testCanGetAndSetName(): void
        {
            $target = new Color($this->colorName);
            $this->assertSame($this->colorName, $target->getName());
            $this->assertSame($this->colorName, $target->name);
        }
    }

}