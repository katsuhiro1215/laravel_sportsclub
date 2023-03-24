<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('usertype')->nullable()->comment('Manager', 'Employee');
            $table->string('username');
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname_kana')->nullable();
            $table->string('firstname_kana')->nullable();
            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->text('profile_photo_path')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mobile_number')->nullable();

            $table->date('birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('postcode')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('religion')->nullable();

            $table->double('salary')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=inactive, 1=active');

            $table->rememberToken();
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
        Schema::dropIfExists('vendors');
    }
};
