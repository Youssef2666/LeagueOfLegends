<?php

use App\Models\CharacterClasses;
use App\Models\Legacy;
use App\Models\Region;
use App\Models\Role;
use App\Models\Stat;
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
        Schema::create('champions', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('title'); 
            $table->foreignIdFor(CharacterClasses::class, 'character_class_id'); 
            $table->foreignIdFor(Legacy::class); 
            $table->foreignIdFor(Role::class, 'position_id'); 
            $table->foreignIdFor(Region::class);
            $table->float('pick_rate')->nullable(); 
            $table->float('win_rate')->nullable(); 
            $table->float('ban_rate')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions');
    }
};
