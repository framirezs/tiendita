<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('products', function(Blueprint $table) {
      // These columns are needed for Baum's Nested Set implementation to work.
      // Column names may be changed, but they *must* all exist and be modified
      // in the model.
      // Take a look at the model scaffold comments for details.
      // We add indexes on parent_id, lft, rgt columns by default.
      $table->increments('id');
      $table->integer('parent_id')->nullable()->index();
      $table->integer('lft')->nullable()->index();
      $table->integer('rgt')->nullable()->index();
      $table->integer('depth')->nullable();

      // Add needed columns here (f.ex: name, slug, path, etc.)
      // $table->string('name', 255);

      $table->string('name',500);
      $table->string('slug');
      $table->string('brand',255);
      $table->string('sku',255)->unique();
      $table->string('description',10000);
      $table->integer('quantity');
      $table->decimal('price',6,2);
      $table->decimal('price_offer',6,2);
      $table->decimal('price_dealer',6,2);
      $table->boolean('badge',2);
      $table->string('image1',255);
      $table->string('image2',255);
      $table->string('image3',255);
      $table->boolean('visible',2);
      $table->string('created_at');
      $table->string('updated_at');

      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('products');
  }

}
