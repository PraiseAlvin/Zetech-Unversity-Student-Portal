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
        Schema::create('table_examination_types', function (Blueprint $table) {
            $table->string("id");
            $table->string("examination_type");
            $table->integer("admin_id");
            $table->timestamps();
            $table->intger("is_deleted");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_examination_types');
    }
};
