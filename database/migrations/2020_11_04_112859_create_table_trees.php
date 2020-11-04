<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTrees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('object_key');
            $table->integer('object_value')->unsigned();
            $table->string('relation_key');
            $table->integer('relation_value')->unsigned();
            $table->integer('value')->index()->nullable()->default(0);
            $table->integer('rank')->default(0)->nullable()->index();
            $table->string('type')->nullable()->index();
            $table->dateTime('publish_date')->default(date("Y-m-d H:i:s"))->index();
            $table->index(['object_key','object_value','relation_key','relation_value']);
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
        Schema::dropIfExists('table_trees');
    }
}
