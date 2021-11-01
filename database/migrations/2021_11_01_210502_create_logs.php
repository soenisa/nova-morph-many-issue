<?php

use App\Models\Log;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = \App\Models\User::all()->first();
        Log::factory()->for($user, 'loggable')->create([
            'description' => 'test log 1',
        ]);

        Log::factory()->for($user, 'loggable')->create([
            'description' => 'test log 2',
        ]);

        Log::factory()->for($user, 'loggable')->create([
            'description' => 'test log 3',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
