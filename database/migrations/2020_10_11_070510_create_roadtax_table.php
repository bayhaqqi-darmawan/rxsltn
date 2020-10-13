<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoadtaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roadtax', function (Blueprint $table) {
            $table->id();
            $table->string('user_ic');
            $table->integer('selectedBluecard')->unique();
            $table->integer('selectedInsurance')->unique();
            $table->enum('approval', ['Approved','Rejected', 'Pending'])->default('Pending');
            $table->string('reason')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('roadtax');
    }
}
