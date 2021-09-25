<?php namespace Zmark\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZmarkContentProdutos extends Migration
{
    public function up()
    {
        Schema::table('zmark_content_produtos', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('zmark_content_produtos', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
