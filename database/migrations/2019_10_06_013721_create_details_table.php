<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->bigInteger('earnest_price')->default(0);
            $table->bigInteger('price_room')->default(0);
            $table->enum('status',['ชำระเงินแล้ว','ยังไม่ได้ชำระเงิน'])->default('ยังไม่ได้ชำระเงิน');
            $table->enum('detail',['หลักฐานการชำระเงินถูกต้อง','หลักฐานการชำระเงินไม่ถูกต้อง กรุณาอัพโหลดหลักฐานใหม่','ยังไม่ได้อัพโหลดหลักฐานการชำระเงิน'])->default('ยังไม่ได้อัพโหลดหลักฐานการชำระเงิน');



            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->foreign('room_id')
                  ->references('id')
                  ->on('rooms')
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
        Schema::dropIfExists('details');
    }
}
