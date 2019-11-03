<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uid')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->enum('role',['MARKETING','SUPPORTING','ACCOUNTING','ADMIN']);
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->enum('staff_status',['active','suspended','notactive','deleted']);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('activated_at')->nullable();
            $table->timestamp('non_actived_at')->nullable();
            $table->timestamp('suspended_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('staffs');
    }
}
