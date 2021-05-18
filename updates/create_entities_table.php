<?php namespace OnlineStore\Schema\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateEntitiesTable extends Migration
{
    public function up()
    {
        Schema::create('onlinestore_schema_schemas_entities', function (Blueprint $table) {
            $table->integer('schema_id')->unsigned()->nullable()->default(null);
            $table->integer('entity_id')->unsigned()->nullable()->default(null);
            $table->string('entity_type')->nullable();

            $table->index(['schema_id', 'entity_id', 'entity_type']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('onlinestore_schema_schemas_entities');
    }
}
