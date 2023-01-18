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
        Schema::table('umls', function (Blueprint $table) {
            $table->unsignedBigInteger('diagram_id')->nullable();
            $table->foreign('diagram_id')->references('id')->on('diagram_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('umls', function (Blueprint $table) {
            $table->dropColumn('diagram_id');
        });
    }
};
