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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('short_desc', 255)->nullable();
            $table->string('cart_desc', 255)->nullable();
            $table->text('long_desc')->nullable();
            $table->float('price');
            $table->string('main_image_url', 255)->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->integer('gender');
            $table->dateTime('imported_date')->nullable();
            $table->timestamps(0); // created_at, updated_at with no fractional seconds

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
