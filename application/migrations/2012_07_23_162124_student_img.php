<?php

class Student_Img {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('students', function($table)
		{
			// Adding image link
			$table->string('img')->length(60)->default('0')->nullable();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('students', function($table)
		{
		// Dropping image link
		$table->drop_column('img');
		});
	}

}