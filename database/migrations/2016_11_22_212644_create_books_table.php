<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('books', function(Blueprint $table) {
            $table->increments('id');
            $table->string('isbn', 13);
            $table->string('author', 100);
            $table->string('title', 100);
            $table->integer('category_id');
            $table->float('price');
            $table->string('description');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }
}
