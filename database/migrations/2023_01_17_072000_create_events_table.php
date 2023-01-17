<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id("event_id");
            $table->date("date");
            $table->integer("max_number");
            $table->foreignId("trade_id")->references("trade_id")->on("traders");
            $table->boolean("status")->default(0);
            $table->timestamps();
        });

        Event::create(["date"=>"2020-10-20","max_number"=>100,"trade_id"=>1,"status"=>1]);
        Event::create(["date"=>"2020-11-20","max_number"=>200,"trade_id"=>2,"status"=>0]);
        Event::create(["date"=>"2020-12-20","max_number"=>300,"trade_id"=>3,"status"=>1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
