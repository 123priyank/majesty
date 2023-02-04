<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('enagic_email')->unique();
            $table->string('contact_number');
            $table->string('alternative_contact_number');
            $table->string('blood_group');
            $table->date('birth_date');
            $table->date('date_of_birth_spouse');
            $table->date('anniversary_date');
            $table->string('home_address');
            $table->string('country');
            $table->string('district');
            $table->string('state');
            $table->string('city');
            $table->integer('status');
            $table->integer('profile_status');
            $table->string('role');
            $table->string('profile_pic');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('enagic_id_no');
            $table->string('enagic_sponser_name');
            $table->string('enagic_sponser_id');
            $table->string('device_mode');
            $table->date('joining_date');
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
        Schema::dropIfExists('users');
    }
}
