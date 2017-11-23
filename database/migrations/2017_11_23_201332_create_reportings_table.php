<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raw')->nullable();
            $table->string('type')->nullable();
            $table->string('victim_name')->nullable();
            $table->string('reporter_name')->nullable();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('contact')->nullable();
            $table->string('hotel')->nullable();
            $table->date('incident_date')->nullable();
            $table->string('evidence_url')->nullable();
-           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportings');
    }
}
