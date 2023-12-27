<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nid');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->string('province');
            $table->string('district');
            $table->string('sector');
            $table->string('village');
            $table->string('ubudehe');
            $table->string('asset');
            $table->string('education');
            $table->string('disability');
            $table->string('desease');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
