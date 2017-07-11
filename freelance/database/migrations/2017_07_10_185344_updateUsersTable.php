<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $t) {
            $t->longText('profile_image_url');
            $t->string('first_name');
            $t->string('last_initial');
            $t->string('profile_title');
            $t->integer('hourly_amount');
            $t->string('location_city');
            $t->string('location_state');
            $t->string('skills');
            $t->string('profile_summary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
