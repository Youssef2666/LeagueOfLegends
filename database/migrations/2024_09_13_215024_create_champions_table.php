<?php

use App\Models\CharacterClasses;
use App\Models\Legacy;
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
            $table->foreignIdFor(CharacterClasses::class); 
            $table->foreignIdFor(Legacy::class); 
            $table->foreignIdFor(Stat::class); //stats like hp, ad, etc.
            $table->foreignIdFor(Role::class, 'position'); 
            $table->string('adaptive_types'); 
            $table->float('pick_rate'); 
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
