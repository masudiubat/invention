<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('project_type_id')->index();
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('slug');
            $table->string('client_name_en')->nullable();
            $table->string('client_name_bn')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_bn')->nullable();
            $table->string('area_en')->nullable();
            $table->string('area_bn')->nullable();
            $table->string('cost_en')->nullable();
            $table->string('cost_bn')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_bn')->nullable();
            $table->string('cover_image')->nullable();
            $table->date('started_at')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('project_type_id')->references('id')->on('project_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
