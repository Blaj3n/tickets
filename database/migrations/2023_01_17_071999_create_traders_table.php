<?php

use App\Models\Trader;
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
        Schema::create('traders', function (Blueprint $table) {
            $table->id("trade_id");
            $table->string("name");
            $table->string("description", 150);
            $table->timestamps();
        });

        Trader::create(["name"=>"Marge Simpson","description"=>"Homer's wife"]);
        Trader::create(["name"=>"Lois Griffin","description"=>"Peter's wife"]);
        Trader::create(["name"=>"Gyöngyösi Dorottya","description"=>"Bence's wife"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traders');
    }
};
