<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('orders', function (Blueprint $table) {
            $table->id('id', 50);
            $table->timestamps();
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('set null');
            $table->enum('status', ['Waiting for Payment', 'Processing', 'Suspended', 'Cancelled', 'Completed']);
            $table->enum('payment_method', ['bkash', 'Nagad', 'Card', 'COD']);
            $table->string('shipping_address', 100);
            $table->string('billing_address', 100);
            $table->enum('shipping_method', ['Sundarban', 'eCourier', 'Steadfast']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
