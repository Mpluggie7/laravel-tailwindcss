<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->default(0);
            $table->string('code');
            $table->string('name');
            $table->float('cost')->default(0.00);
            $table->float('wholesale')->default(0.00);
            $table->float('retail')->default(0.00);
            $table->integer('sum_stock')->unsigned()->default(0)
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('products_lists');
    }
}
