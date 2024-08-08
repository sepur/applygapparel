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
        // Schema::create('lygsewingoutput', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('lygSewingOutput', function (Blueprint $table) {
            $table->date('TrnDate');
            $table->string('OperatorName', 50);
            $table->string('StyleCode', 50);
            $table->string('SizeName', 50);
            $table->string('DestinationCode', 50);
            $table->integer('QtyOutput');

            $table->primary(['TrnDate', 'OperatorName', 'StyleCode', 'SizeName', 'DestinationCode', 'QtyOutput']);
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
        Schema::dropIfExists('lygSewingOutput');
    }
};
