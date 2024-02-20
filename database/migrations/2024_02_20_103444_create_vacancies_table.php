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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->required();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
            $table->text('main_vacancy')->required();
            $table->string('vacancy_img', 250)->required();
            $table->unsignedBigInteger('admin_id')->required();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
