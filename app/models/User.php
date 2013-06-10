<?php

class User extends Eloquent {

	protected $table = 'users';
	protected $guarded = array('id');

	public function getId()
	{
		return $this->getKey();
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getEmail()
	{
		return $this->email;
	}
	
	public function getFirstName()
	{
		return $this->givenName;
	}
	
	public function getLastName()
	{
		return $this->familyName;
	}
	
	public function getPhone()
	{
		return $this->phone;
	}
	
	public function getRole()
	{
		return $this->role;
	}
	
	public function getSkills()
	{
		return $this->skills;
	}
	
	public function getAbout()
	{
		return $this->about;
	}
	
	public function getPlace()
	{
		return $this->place;
	}

}