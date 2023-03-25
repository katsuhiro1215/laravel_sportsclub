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
            $table->string('username', 100)->nullable();
            $table->string('lastname', 50);
            $table->string('firstname', 50);
            $table->string('lastname_kana', 50);
            $table->string('firstname_kana', 50);
            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->text('profile_photo_path')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->string('mobile_number', 15)->nullable();

            $table->date('birth')->nullable();
            $table->string('gender', 5)->nullable();
            $table->string('postcode', 10)->nullable();
            $table->string('address1', 5)->nullable();
            $table->string('address2', 30)->nullable();
            $table->string('address3', 100)->nullable();
            $table->string('religion', 30)->nullable();
            $table->string('father_name', 50)->nullable();
            $table->string('father_phone_number', 15)->nullable();
            $table->string('mother_name', 50)->nullable();
            $table->string('mother_phone_number', 15)->nullable();
            $table->text('information')->nullable();
            
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
