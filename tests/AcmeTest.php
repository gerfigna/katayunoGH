<?php

declare(strict_types=1);

namespace Test;

use Acme\Dummy;
use PHPUnit\Framework\TestCase;

class AcmeTest extends TestCase
{
    public function testAlwaysTrue(){
        $obj = new Dummy();

        $this->assertTrue($obj->alwaysTrue());
    }

}
