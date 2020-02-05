<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // add description col, change col(name)to(title)
        Schema::table('tasks', function (Blueprint $table) {
            $table->renameColumn('name', 'title');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('tasks', function (Blueprint $table) {
            $table->renameColumn('title', 'name');
        });
    }
}
