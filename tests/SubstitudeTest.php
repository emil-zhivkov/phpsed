<?php

namespace Emo\Sed;


use Emo\Sed\Sed;
use PHPUnit\Framework\TestCase;

final class SubstitudeTest extends TestCase
{

    public function testSubstitudeSearch()
    {
        $sed = shell_exec('sed --version');
        $this->assertStringContainsString('sed',$sed);
    }
}