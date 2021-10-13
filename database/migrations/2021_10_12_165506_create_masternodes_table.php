<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasternodesTable extends Migration
{
    public function up()
    {
        Schema::create('masternodes', function (Blueprint $table) {
            $table->string('masternodeId')->unique();
            $table->string('ownerAddress')->unique();
            $table->string('operatorAddress')->unique();
            $table->string('state');
            $table->unsignedInteger('mintedBlocks')->default(0);
            $table->string('timelock')->nullable()->index();
            $table->json('targetMultiplier')->default('[]');
            $table->integer('creationHeight')->default(-1);
            $table->integer('resignHeight')->default(-1);
            $table->string('resignTx')->nullable();
            $table->string('banTx')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('masternodes');
    }
}
