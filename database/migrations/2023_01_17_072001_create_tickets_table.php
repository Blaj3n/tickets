<?php

use App\Models\Ticket;
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
        
        Schema::create('tickets', function (Blueprint $table) {
            $table->primary(['event_id', 'user_id']);
            $table->foreignId("event_id")->references("event_id")->on("events");
            $table->foreignId("user_id")->references("id")->on("users");
            $table->boolean("status")->default(0); //0:visszamondott, 1:élő
            $table->timestamps();
        });

        Ticket::create(["event_id"=>1,"user_id"=>1,"status"=>1]);
        Ticket::create(["event_id"=>2,"user_id"=>2,"status"=>1]);
        Ticket::create(["event_id"=>3,"user_id"=>3,"status"=>0]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }

};
