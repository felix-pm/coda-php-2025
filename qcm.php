<?php

class User
{
	private function __construct(private string $username)
	{

	}

	public function getUsername() : string
	{
		return $this->username;
	}
}

$user = new User("Gaston");
echo $user->username;