<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('map_user_settings', function (Blueprint $table): void {
            $table->boolean('auto_confirm_signature_prompt')->default(false)->after('preselect_signature_enabled');
        });
    }

    public function down(): void
    {
        Schema::table('map_user_settings', function (Blueprint $table): void {
            $table->dropColumn('auto_confirm_signature_prompt');
        });
    }
};
