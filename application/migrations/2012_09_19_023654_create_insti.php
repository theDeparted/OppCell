<?php

class Create_Insti {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('institute',function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Name
			$table->string('name');

			// Image link
			$table->string('location');

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
		Schema::drop('institute');
	}

}