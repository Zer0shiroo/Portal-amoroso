<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('grievances', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('bother');
            $table->string('mood');
            $table->string('severity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grievances');
    }
};
