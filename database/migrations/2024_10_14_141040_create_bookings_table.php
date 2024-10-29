<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('anun', 50);
            $table->string('azganun', 50);
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('phone', 15)->unique();
            $table->timestamps();
        });
    }
};
