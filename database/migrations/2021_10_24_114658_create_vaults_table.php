<?php

use App\Models\LoanScheme;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaultsTable extends Migration
{
    public function up()
    {
        Schema::create('vaults', function (Blueprint $table) {
            $table->string('vaultId')->unique();
            $table->foreignIdFor(LoanScheme::class, 'loanSchemeId');
            $table->string('ownerAddress')->index();
            $table->boolean('isUnderLiquidation')->default(false)->index();
            $table->boolean('invalidPrice')->default(false)->index();
            $table->json('collateralAmounts')->nullable();
            $table->json('loanAmounts')->nullable();
            $table->json('interestAmounts')->nullable();
            $table->float('collateralValue', 22, 8)->default(0);
            $table->float('loanValue', 22, 8)->default(0);
            $table->integer('currentRatio')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vaults');
    }
}
