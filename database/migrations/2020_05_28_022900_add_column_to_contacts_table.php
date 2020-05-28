<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumns('contacts', ['email', 'phone', 'city', 'language']))
        {
            Schema::table('contacts', function (Blueprint $table)
            {
                $table->string('email');
                $table->string('phone');
                $table->string('city');
                $table->string('language');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumns('contacts', ['email', 'phone', 'city', 'language']))
        {
            Schema::table('contacts', function (Blueprint $table)
            {
                $table->dropColumn('email');
                $table->dropColumn('phone');
                $table->dropColumn('city');
                $table->dropColumn('language');
            });
        }
    }
}
