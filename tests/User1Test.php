<?php
use PHPUnit\Framework\TestCase;
use App\Entity\User1;

class User1Test extends TestCase
{
    public function testUserHasValidEmailFormat(): void
    {
        $user = new User1();
        $user->setEmail('endrick.los@gmail.com');

        $this->assertEquals('endrick.los@gmail.com', $user->getEmail());
    }

    public function testUserHasNameAndSurname(): void
    {
        $user = new User1();
        $user->setNom('los');
        $user->setPrénom('endrick');

        $this->assertEquals('los', $user->getNom());
        $this->assertEquals('endrick', $user->getPrénom());
    }

    public function testUserIsAtLeast13YearsOld(): void
    {
        $user = new User1();
        $user->setAge(14);

        $this->assertGreaterThanOrEqual(13, $user->getAge());
    }
}
