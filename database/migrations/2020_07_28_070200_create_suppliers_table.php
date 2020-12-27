<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('shop_name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->string('account_name')->nullable();
            $table->integer('account_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('city');
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
        Schema::dropIfExists('suppliers');
    }
}