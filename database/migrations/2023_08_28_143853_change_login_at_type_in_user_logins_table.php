<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Adicionar a nova coluna login_at_new
        Schema::table('user_logins', function (Blueprint $table) {
            $table->timestamp('login_at_new')->nullable();
        });

        // Copiar os valores da coluna login_at para login_at_new
        \DB::statement('UPDATE user_logins SET login_at_new = login_at');

        // Excluir a coluna login_at
        Schema::table('user_logins', function (Blueprint $table) {
            $table->dropColumn('login_at');
        });

        // Renomear a coluna login_at_new para login_at
        \DB::statement('ALTER TABLE user_logins CHANGE login_at_new login_at TIMESTAMP NULL DEFAULT NULL');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_logins', function (Blueprint $table) {
            //
        });
    }
};
