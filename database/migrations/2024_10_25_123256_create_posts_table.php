<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // To create columns in table (string represents varchar - 255 chars)
            $table->string('title',70); //title to be less than or equal to 70 chars
            // text field type - with name of the column
            $table->text('description');
            // boolean fields can contain either 0 or 1
            $table->boolean('status');
            $table->timestamps(); //creates two cols 1.created_at and 2.updated_at

            //More DataTypes
            /*
                $table->date('date') -> to store date fields
                $table->dateTime('date_time') -> to store date and time
                $table->time('time');

                $table->decimal('amount') -> to store decimal values
                $table->double('tax')->default(0) -> to set default value
                $table->float('denominant')
                $table->integer('price')->nullable() -> user didnt give any value at the input time - it can have value null


            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
