<?php

namespace Epl\Tests\Command\Image;

use Epl\Command\Image\ClearImageBufferCommand;
/**
 * @author Dmitry Petrov <dmitry.petrov@opensoftdev.ru>
 */
class ClearImageBufferCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function toEplString()
    {
        $command = new ClearImageBufferCommand();
        $this->assertEquals(chr(10) . 'N' . chr(10), $command->toEplString());
    }
}
