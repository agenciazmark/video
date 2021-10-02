<?php namespace Zmark\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZmarkContentProdutos2 extends Migration
{
    public function up()
    {
        Schema::table('zmark_content_produtos', function($table)
        {
            $table->integer('categoria_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zmark_content_produtos', function($table)
        {
            $table->dropColumn('categoria_id');
        });
    }
}
