<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->integer('user_id')->unsigned();
            $table->char('gender', 1);
            $table->date('dob');
            $table->char('religion', 1);
            $table->char('mother_tongue', 1);
            $table->char('country', 1);
            $table->integer('mobile');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('user_accounts')
                  ->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profiles');
    }
}
