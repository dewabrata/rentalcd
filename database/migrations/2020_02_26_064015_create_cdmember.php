<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdmember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    /*id
name
address
phone
ktp
member_date
active_date
*/
    {
        Schema::create('cdmembers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('address',100);
            $table->string('phone',100);
            $table->string('ktp',100);
            $table->dateTime('member_date');
            $table->dateTime('active_date');
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
        Schema::dropIfExists('cdmembers');
    }
}
