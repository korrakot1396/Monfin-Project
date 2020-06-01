<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentsTableAddDetailId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->bigInteger('detail_id')->unsigned();
            $table->foreign('detail_id')
                ->references('id')
                ->on('details')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['detail_id']);
            $table->dropColumn('detail_id');
        });
        Schema::enableForeignKeyConstraints();
    }
}
