<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('stfName');
            $table->char('stfGender', 1);
            $table->integer('stfConactNo');
            $table->unsignedInteger('jobtitles_id');
            $table->char('loginName', 50)->unique();
            $table->string('password');
            $table->timestamps();
            
            $table->index('jobtitles_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
