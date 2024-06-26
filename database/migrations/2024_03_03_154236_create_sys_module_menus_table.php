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
        Schema::create('sys_module_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('route_name')->nullable();
            $table->string('link_path')->nullable();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('created_by')->nullable();
            $table->integer('order_menu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_module_menus');
    }
};
