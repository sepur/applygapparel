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
        // Schema::create('lygStyleSize', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('lygStyleSize', function (Blueprint $table) {
            $table->string('StyleCode', 50);
            $table->integer('SizeSort');
            $table->string('SizeName', 10);

            $table->primary(['StyleCode', 'SizeSort', 'SizeName']);
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
        Schema::dropIfExists('lygStyleSize');
    }
};
