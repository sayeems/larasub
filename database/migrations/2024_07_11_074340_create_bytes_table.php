<?php

use App\Models\User;
use App\Models\Type;
use App\Models\Visibility;
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
        Schema::create('bytes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Type::class);
            $table->foreignIdFor(Visibility::class);
            $table->string('title')->nullable(false);
            $table->uuid('uuid')->unique()->nullable(false);
            $table->longText('body')->nullable(false);
            $table->integer('views');
            $table->integer('copy_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bytes');
    }
};
