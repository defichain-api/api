<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaktionsTable extends Migration
{
	public function up()
	{
		Schema::create('transaktions', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->float('value', 30, 8)->default(0);
			$table->boolean('coinbase')->default(false);

			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('transaktions');
	}
}
