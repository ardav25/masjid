<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableDonasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donasis', function (Blueprint $table) {
            // Adding columns for ATM names and account numbers
            $table->string('nama_atm_1')->nullable();
            $table->string('nama_atm_2')->nullable();
            $table->string('nama_atm_3')->nullable();

            $table->string('no_rek_1')->nullable();
            $table->string('no_rek_2')->nullable();
            $table->string('no_rek_3')->nullable();

            // Adding columns for e-money names
            $table->string('emoney_1')->nullable();
            $table->string('emoney_2')->nullable();
            $table->string('emoney_3')->nullable();

            // Adding columns for virtual account numbers
            $table->string('nomer_va_1')->nullable();
            $table->string('nomer_va_2')->nullable();
            $table->string('nomer_va_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donasis', function (Blueprint $table) {
            // Dropping the added columns
            $table->dropColumn([
                'nama_atm_1', 'nama_atm_2', 'nama_atm_3',
                'no_rek_1', 'no_rek_2', 'no_rek_3',
                'emoney_1', 'emoney_2', 'emoney_3',
                'nomer_va_1', 'nomer_va_2', 'nomer_va_3'
            ]);
        });
    }
}
