<?php namespace Zmark\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZmarkContentCaracteristicasProdutos extends Migration
{
    public function up()
    {
        Schema::create('zmark_content_caracteristicas_produtos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('caracteristica_id');
            $table->integer('produto_id');
            $table->primary(['caracteristica_id','produto_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zmark_content_caracteristicas_produtos');
    }
}
