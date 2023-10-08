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
        Schema::create('todolist', function (Blueprint $table) {
            $table->increments('id');            //No.
            $table->string('task');              //タスク
            $table->string('priority');          //優先度
            $table->date('deadline');            //期日（日時）
            $table->string('manager');           //担当者
            $table->string('remarks');           //備考
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todolist');
    }
};
