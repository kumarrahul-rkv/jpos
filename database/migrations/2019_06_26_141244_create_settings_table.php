<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('settings')){
            Schema::create('settings', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('shop_name');
                $table->longText('shop_description')->nullable();
                $table->string('shop_address')->nullable();
                $table->string('shop_email')->nullable();
                $table->string('shop_contact')->nullable();
                $table->string('shop_registration')->nullable();
                $table->string('shop_logo')->default('shop-logo.png');
                $table->string('shop_logo-mini')->default('shop-logo.png');
                $table->timestamps();
            });

            DB::table('settings')->insert([
                [
                    'shop_name' => 'jPOS Jwellery',
                    'shop_description' => 'This application is POS for jewellery shop',
                    'shop_address' => 'Bihar, India',
                    'shop_email' => 'jpos@email.com',
                    'shop_contact' => '+91 700000908',
                    'shop_registration' => 'ASP988723900907IN',
                    'shop_logo' =>  'shop-logo.png',
                    'shop_logo-mini' => 'shop-logo-mini.png',
                    'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                    'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                ]
            ]);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
