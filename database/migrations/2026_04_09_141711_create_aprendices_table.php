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
        Schema::create('aprendices', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('cell_number');
            //FK1 
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')->onDelete('set null');
                //FK2
                $table->unsignedBigInteger('computer_id')->nullable();
            $table->foreign('computer_id')
                ->references('id')
                ->on('computers')->onDelete('set null');
                $table->string('urlFoto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendices');
    }
};
