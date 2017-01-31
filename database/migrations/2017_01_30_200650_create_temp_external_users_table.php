<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempExternalUsersTable extends Migration
{
    public function up()
    {
        Schema::create('temp_external_users', function (Blueprint $table) {
            $table->string('custom_id')->primary();
            $table->string('custom_name');
            $table->string('custom_password');
            $table->string('role_code')->nullable();
            $table->string('email')->nullable();
        });

        $createViewSql = "
            CREATE VIEW v_users AS (
                select u.custom_id as id,
                       u.custom_id as username,
                         u.custom_name as name,
                         u.custom_password as password,
                         u.email,
                         u.role_code 
                from temp_external_users u
            )
        ";
        DB::statement($createViewSql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("drop view v_users");
        Schema::drop('temp_external_users');
    }
}
