<?php namespace Zmark\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZmarkContentCaracteristicas extends Migration
{
    public function up()
    {
        Schema::create('zmark_content_caracteristicas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('category');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zmark_content_caracteristicas');
    }
}
