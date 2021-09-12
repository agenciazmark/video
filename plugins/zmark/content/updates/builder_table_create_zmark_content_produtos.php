<?php namespace Zmark\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZmarkContentProdutos extends Migration
{
    public function up()
    {
        Schema::create('zmark_content_produtos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('status');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('brand');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zmark_content_produtos');
    }
}
