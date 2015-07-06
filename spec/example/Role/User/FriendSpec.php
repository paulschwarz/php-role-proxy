<?php

namespace spec\example\Role\User;

use example\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FriendSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('example\Role\User\Friend');
    }

    function let()
    {
        $user = new User;
        $user->name = 'Bob';
        $user->password = 'p@ssw0rd';
        $this->beConstructedWith($user);
    }

    function it_has_readable_fields()
    {
        $this->getReadable()->shouldReturn(['name']);
    }

    function it_should_be_able_to_get_readable_fields()
    {
        $this->name->shouldBe('Bob');
    }

    function it_should_not_be_able_to_get_unreadable_fields()
    {
        $this->password->shouldBe(NULL);
    }
}
