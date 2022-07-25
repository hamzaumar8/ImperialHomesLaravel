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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('mailing_address');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('website')->nullable();
            $table->string('details_of_service_goods');
            $table->date('established_date');
            $table->integer('gross_annual_sale')->unsigned();
            $table->enum('legal_structure', ['corporation', 'partnership', 'sole proprietorship', 'joint venture', 'franchise', 'non-profit']);
            $table->enum('business_type', ['retailer', 'construction contractor', 'distributor', 'manufacturer', 'wholesaler', 'consultant', 'freight / transportation', 'service provider', 'other']);
            $table->string('other')->nullable();
            $table->string('geographical_area');
            $table->enum('prev_work_status', ['yes', 'no']);
            $table->enum('insured', ['yes', 'no']);
            $table->enum('bonded', ['yes', 'no']);
            $table->enum('licensed', ['yes', 'no']);
            $table->string('license_number')->nullable();
            $table->text('additional_information')->nullable();
            $table->string('tin');
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('beneficiary_name');
            $table->string('account_number');
            $table->string('vendor_number')->nullable();
            $table->date('date_approved')->nullable();
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
        Schema::dropIfExists('companies');
    }
};