<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tabel Games (Menyimpan status room)
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('room_code')->unique(); // Kode unik misal "XJ92"
            $table->enum('status', ['waiting', 'playing', 'finished'])->default('waiting');
            $table->enum('phase', ['day', 'night'])->default('day'); // Fase Siang/Malam
            $table->integer('day_count')->default(1); // Hari ke-1, ke-2, dst
            $table->timestamp('phase_ends_at')->nullable(); // Untuk timer (opsional)
            $table->timestamps();
        });

        // 2. Tabel Game Players (Pivot antara User & Game + Status Pemain)
        Schema::create('game_players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Peran: villager, werewolf, seer, doctor, guardian
            $table->string('role')->nullable(); 
            
            // Status hidup/mati
            $table->boolean('is_alive')->default(true);
            
            // Apakah dia host room ini?
            $table->boolean('is_host')->default(false);
            
            // Mencegah user join 2x di game yang sama
            $table->unique(['game_id', 'user_id']); 
            $table->timestamps();
        });

        // 3. Tabel Actions/Votes (Mencatat segala aksi: Vote Siang & Aksi Malam)
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            
            // Siapa yang melakukan aksi (Link ke game_players, BUKAN user_id)
            $table->foreignId('player_id')->constrained('game_players')->onDelete('cascade');
            
            // Siapa targetnya? (Link ke game_players juga)
            $table->foreignId('target_id')->nullable()->constrained('game_players')->onDelete('cascade');
            
            // Jenis aksi: 'vote_kick' (siang), 'kill' (werewolf), 'heal' (doctor), 'check' (seer)
            $table->string('type'); 
            
            // Aksi ini dilakukan pada hari ke berapa?
            $table->integer('day_count'); 
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('actions');
        Schema::dropIfExists('game_players');
        Schema::dropIfExists('games');
    }
};