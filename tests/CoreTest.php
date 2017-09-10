<?php
namespace Hidehalo\Nanoid\Test;

use Hidehalo\Nanoid\Core;
use Hidehalo\Nanoid\CoreInterface;
use Hidehalo\Nanoid\Generator;
use Hidehalo\Nanoid\GeneratorInterface;
use PHPUnit\Framework\TestCase;

class CoreTest extends TestCase
{
    /**
     * @group testing
     * @dataProvider coreProvider
     * @param CoreInterface $core
     * @param GeneratorInterface $generator
     */
    public function testRandom(CoreInterface $core, GeneratorInterface $generator)
    {
        $alph = 'abcdefghijk0123456789';
        $size = 5;
        $ret = $core->random($generator, $alph, $size); 
        $this->assertEquals($size, strlen($ret));
    }

    /**
     * Core Provider
     *
     * @return mixed
     */
    public function coreProvider()
    {
        return [
            [new Core(), new Generator()]
        ];
    }
}