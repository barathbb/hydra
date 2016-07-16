<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('address');
            $table->integer('pincode');
            $table->integer('cityid');
            $table->integer('latitude');
            $table->integer('longitude');
            $table->integer('phonenumber');
            $table->integer('openingtime');
            $table->integer('closingtime');
            $table->string('workingdays');
            $table->string('image');
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
		Schema::drop('hotels');
	}

}
