<?php

class Del_Profs_And_Create_Members {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('profs');
		Schema::create('members', function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Name
			$table->string('name');

			// Image link
			$table->string('img');

			// Description
			$table->string('research_interest');

			// Title
			$table->string('title');

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
		Schema::drop('members');
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
			$table->string('title');

			// Timestamps
			$table->timestamps();
		});
	}

}