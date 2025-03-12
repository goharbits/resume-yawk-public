<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColorsAddFontSwap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('colors', function (Blueprint $table) {            
             $table->string('font')->after('accent')->nullable();      
             $table->string('swap')->after('font')->nullable();      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('colors', function (Blueprint $table) {            
             $table->dropColumn('font');
             $table->dropColumn('swap');
        });
    }
}