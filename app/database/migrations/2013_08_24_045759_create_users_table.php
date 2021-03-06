<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('
			CREATE TABLE users (
				id serial PRIMARY KEY,
				created_at timestamp,
				updated_at timestamp,
				username varchar,
				password varchar,
				email varchar,
				group_id integer,
				permissions hstore,
				active boolean,
				activation_key boolean
			);
		');
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
