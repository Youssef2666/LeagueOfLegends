<?php

use App\Models\Champion;
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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Champion::class);
            $table->integer('ad')->nullable(); // Base attack damage
            $table->integer('ap')->nullable(); // Base ability power
            $table->integer('armor')->nullable(); // Base armor
            $table->integer('mr')->nullable(); // Base magic resist
            $table->integer('hp')->nullable(); // Base health
            $table->float('health_regen')->nullable(); // Health regeneration
            $table->float('resource_regen')->nullable(); // Resource regeneration
            $table->integer('movement_speed')->nullable(); // Base movement speed
            $table->string('attack_range')->nullable(); // Attack range (e.g., "Melee (175)")
            $table->integer('mana')->nullable(); // Mana
            $table->float('mana_regen')->nullable(); // Mana regeneration
            $table->float('attack_speed')->nullable(); // Attack speed
            $table->float('crit_damage')->nullable(); // Critical damage
            $table->integer('energy')->nullable(); // Energy
            $table->float('energy_regen')->nullable(); // Energy regeneration
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
