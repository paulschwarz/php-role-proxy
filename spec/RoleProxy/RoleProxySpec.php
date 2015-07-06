<?php

namespace spec\RoleProxy;

use example\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProxySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RoleProxy\RoleProxy');
    }

    function let()
    {
        $this->beConstructedWith(new User);
    }

}
