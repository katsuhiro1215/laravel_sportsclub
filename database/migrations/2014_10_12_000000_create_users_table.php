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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usertype')->nullable()->comment('Member, Student,Customer');
            $table->string('username')->nullable();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('lastname_kana');
            $table->string('firstname_kana');
            
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
            $table->string('father_name')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_phone_number')->nullable();
            
            $table->string('id_no')->nullable();
            $table->string('code')->nullable();
            $table->string('role')->nullable();
            $table->date('join_date')->nullable();
            $table->integer('designation_id')->nullable();

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
        Schema::dropIfExists('users');
    }
};
