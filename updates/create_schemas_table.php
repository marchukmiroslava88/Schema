<?php namespace OnlineStore\Schema\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSchemasTable extends Migration
{
    public function up()
    {
        Schema::create('onlinestore_schema_schemas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('schema')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('onlinestore_schema_schemas');
    }
}
