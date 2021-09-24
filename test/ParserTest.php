<?php

namespace EmtiazZahid\Ndjson\Test;

use PHPUnit\Framework\TestCase;
use EmtiazZahid\Ndjson\Parser;

class ParserTest extends TestCase
{
    protected $file = 'test_sample.ndjson';

    public function testDecode()
    {
        $base_path = dirname(__FILE__);
        $decode = Parser::decode($base_path . '/' . $this->file);

        $this->assertIsArray($decode);
        $this->assertCount(3, $decode);
    }

    public function testEncode()
    {
        $array = [
            ['foo' => 'bar'],
            ['hello' => 'world']
        ];
        $encode = Parser::encode($array);

        $this->assertIsString($encode);
        $this->assertContains('{"foo":"bar"}', $encode);
        $this->assertContains('{"hello":"world"}', $encode);
    }
}
