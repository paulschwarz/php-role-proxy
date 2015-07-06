<?php

namespace spec\example\Role\User;

use example\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MyselfSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('example\Role\User\Myself');
    }

    function let()
    {
        $user = new User;
        $user->name = 'Bob';
        $user->password = 'p@ssw0rd';
        $this->beConstructedWith($user);
    }

    function it_should_be_able_to_get_readable_fields()
    {
        $this->name->shouldBe('Bob');
        $this->password->shouldBe('p@ssw0rd');
    }

    function it_should_be_able_to_set_writeable_fields()
    {
        $this->name = 'Bobby';
        $this->password = 's3cr3t';
        $this->name->shouldBe('Bobby');
        $this->password->shouldBe('s3cr3t');
    }
}
