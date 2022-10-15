<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('lots')) {
            Schema::create('lots', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description');
                $table->timestamps();

                $table->unsignedBigInteger('category_id')->nullable();

                $table->index('category_id', 'lot_category_idx');

                $table->foreign('category_id', 'lot_category_fk')->on('categories')->references('id');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lots');
    }
}
