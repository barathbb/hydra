<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatehotelfooddailiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotelfooddailies', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('hotelid');
            $table->integer('foodid');
            $table->integer('price');
            $table->integer('maximumquantity');
            $table->timestamps();
			$table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hotelfooddailies');
	}

}
