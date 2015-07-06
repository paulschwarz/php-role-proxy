<?php

namespace spec\example\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('example\Entity\User');
    }

    function it_has_fields()
    {
        $this->name->shouldBe(NULL);
        $this->password->shouldBe(NULL);
    }
}
