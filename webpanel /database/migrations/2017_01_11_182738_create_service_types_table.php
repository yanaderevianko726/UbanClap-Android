<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0);
            $table->integer('agent_id')->default(0);
            $table->string('name');
            $table->string('provider_name')->nullable();
            $table->string('image')->nullable();
            $table->string('marker')->nullable();
            $table->integer('fixed')->nullable();
            $table->float('price', 10, 2)->default(0);
            $table->float('type_price', 10, 2)->default(0);
            $table->enum('calculator', ['DEFAULT','FIXED', 'HOUR', 'DAILY', 'WEIGHT','ESTIMATE','PSQFT'])->default('DEFAULT');
            $table->binary('description')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('service_types');
    }
}
