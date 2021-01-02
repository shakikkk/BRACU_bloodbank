<?php
class UserTest extends \PHPUnit\Framework\TestCase
{
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\User;
		$user->setFirstName('Billy ');
		// $user->setLastName('Willy');

		$this->assertEquals($user->getFirstName(), 'Billy');
		// $this->assertEquals($user->getLastName(), 'Willy');
	}
}
