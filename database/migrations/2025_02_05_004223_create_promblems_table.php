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
        Schema::create('promblems', function (Blueprint $table) {
            $table->id();          
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->foreignId('status_id')
                  ->constrained('statuses')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->string('descrition');
            $table->string('solutions');
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promblems');
    }
};
