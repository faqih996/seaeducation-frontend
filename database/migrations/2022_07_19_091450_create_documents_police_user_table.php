<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_police_user', function (Blueprint $table) {
            $table->id();
            $table->string('doc_name')->nullable();
            $table->string('slug')->nullable();
            $table
                ->foreignId('detail_user_id')
                ->references('id')
                ->on('detail_users')
                ->onDelete('cascade');
            $table->string('police_type')->nullable();
            $table->string('place_issued')->nullable();
            $table->date('issued_date')->nullable();
            $table->date('expired_date')->nullable();
            $table->string('docs_status')->nullable();
            $table->string('certificate')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('documents_police_user');
    }
};