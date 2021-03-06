<?php

class Create_Students_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creating Students table for Login Page
		Schema::create('students', function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Name
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();

			// Registration Number
			$table->string('reg_no')->unique();

			// Role (1 - Monkey, 0 - Human)
			$table->integer('role')->default(0);

			// Email ID and Password
			$table->string('email');
			$table->string('password')->nullable()->length(64);

			// Timestamps
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Dropping Students table to go back to Stone Age
		Schema::drop('students');
	}

}