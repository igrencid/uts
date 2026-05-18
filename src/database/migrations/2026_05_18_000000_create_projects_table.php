<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('short_description', 512)->nullable();
            $table->text('problem_analysis')->nullable();
            $table->text('system_requirements')->nullable();
            $table->text('tech_stack')->nullable();
            $table->text('design_diagram')->nullable();
            $table->string('report_pdf')->nullable();
            $table->boolean('is_final_report')->default(false);
            $table->string('status')->default('draft');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
