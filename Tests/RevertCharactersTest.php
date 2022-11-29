<?php
namespace Tests;

require 'Modules/RevertCharacters.php';
require 'Interfaces/ITest.php';

use PHPUnit\Framework\TestCase;
use Interfaces\ITest;
use Modules\RevertCharacters;

class RevertCharactersTest extends TestCase implements ITest
{
    private $class;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->class = new RevertCharacters();
        parent::__construct($name, $data, $dataName);
    }

    public function testEase()
    {
        $this->assertEquals(self::easyTest[1], $this->class->revertCharacters(self::easyTest[0]));
    }

    public function testMiddle()
    {
        $this->assertEquals(self::middleTest[1], $this->class->revertCharacters(self::middleTest[0]));
    }

    public function testHard()
    {
        $this->assertEquals(self::hardTest[1], $this->class->revertCharacters(self::hardTest[0]));
    }
}