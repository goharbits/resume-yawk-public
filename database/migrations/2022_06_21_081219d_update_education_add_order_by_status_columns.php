<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEducationAddOrderByStatusColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('education', function (Blueprint $table) {
            $table->boolean('status')->default(true)->after('user_id');
            $table->integer('orderBy')->default(1)->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('education', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('orderBy');
        });
    }
}