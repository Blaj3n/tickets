<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('role');
            $table->timestamps();
        });

        User::create(["name"=>"Homer Simpson","email"=>"homersimpson@gmail.com","age"=>35,"role"=>"worker"]);
        User::create(["name"=>"Peter Griffin","email"=>"petergriffin@gmail.com","age"=>40,"role"=>"customer"]);
        User::create(["name"=>"Ulrich Bence","email"=>"ulrichbence@gmail.com","age"=>25,"role"=>"CEO"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
