<?php

class Create_Paper {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('papers', function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Title
			$table->string('title');

			// Abstract
			$table->string('abstract');

			// Journal

			// Date of Publication
			$table->date('date_pub');

			// Keywords

			// Link
			$table->string('link');

			// DOI
			$table->string('doi');

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
		Schema::drop('papers');
	}

}