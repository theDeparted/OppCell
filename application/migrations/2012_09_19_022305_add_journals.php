	<?php

class Add_Journals {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('journals', function($table)
		{
			// Autoincrement ID
			$table->increments('id')->unsigned();

			// Name
			$table->string('name');

			// Image link
			$table->string('rating');

			// Description
			$table->string('nationality');

			// Timestamps
			$table->timestamps();
		});
		Schema::table('papers', function($table)
		{
			$table->integer('Journal');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('journals');
		Schema::table('papers', function($table)
		{
			$table->drop_column('Journal');
		});
	}

}