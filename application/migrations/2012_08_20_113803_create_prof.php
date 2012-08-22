<?php

class Create_Prof {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profs', function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Name
			$table->string('name');

			// Image link
			$table->string('img');

			// Description
			$table->string('description');

			// Title
			$title->string('title');

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
		Schema::drop('profs');
	}

}