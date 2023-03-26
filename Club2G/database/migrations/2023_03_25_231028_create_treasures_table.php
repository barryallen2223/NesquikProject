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
 Schema::create('treasures', function (Blueprint $table) {
 $table->id();
 $table->string('name');
 $table->string('startsAt');
 $table->string('endsAt');
 $table->text('description');
 $table->smallInteger('points');
 //$table->Ubications('ubications_list');
 $table->timestamps();
 });
 }
 /**
 * Reverse the migrations.
 *
 * @return void
 */
 public function down()
 {
 Schema::dropIfExists('treasures');
 }
};