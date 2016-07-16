<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatehotelfooddefaultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotelfooddefaults', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id');
            $table->integer('food_id');
            $table->integer('price');
            $table->string('recurringtype');
            $table->integer('recurringcount');
            $table->integer('maximum quality');
            $table->string('photos');
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
		Schema::drop('hotelfooddefaults');
	}

}
