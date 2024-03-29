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
            $table->bigIncrements('id');
            $table->string('regno')->nullable();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->text('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('subscription')->nullable();
            $table->string('password');
            $table->string('phone')->unique()->nullable();;
            $table->string('country')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('affiliation')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('participation_category')->nullable();
            $table->string('papertitle')->nullable();
            $table->string('image_url')->nullable();
            $table->string('document_url')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->nullable();
            $table->integer('payment_id')->unsigned()->nullable();

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
