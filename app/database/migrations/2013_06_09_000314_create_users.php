<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
		    $table->increments('id');
		    $table->string('uid', 32);
		    $table->string('birthday', 24)->nullable();
		    $table->string('givenName', 32);
		    $table->string('familyName', 32);
		    $table->string('email', 320);
		    $table->string('phone', 32)->nullable();
		    $table->string('image', 320);
		    $table->string('skills', 320)->nullable();
		    $table->string('about', 320)->nullable();
		    $table->string('role', 64)->nullable();
		    $table->timestamps();   
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}