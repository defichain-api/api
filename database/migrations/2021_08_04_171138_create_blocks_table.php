<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('height')->unique();
            $table->string('blockhash')->unique();
            $table->string('next_blockhash')->unique();
            $table->string('masternode_id')->index();
            $table->string('mn_operator')->index();
            $table->float('reward', 12, 8);
            $table->unsignedInteger('tx_count')->default(1);
            $table->timestamp('time');
            $table->timestamp('mediantime')->nullable();
            $table->float('difficulty', 20, 7)->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
