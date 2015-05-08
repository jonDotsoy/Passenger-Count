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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id_operario');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->boolean('estado')->default(true);
			$table->enum('tipo_usuario',['admin', 'usuario']);
			

			$table->rememberToken();
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
