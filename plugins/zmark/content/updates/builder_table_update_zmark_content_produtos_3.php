<?php namespace Zmark\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZmarkContentProdutos3 extends Migration
{
    public function up()
    {
        Schema::table('zmark_content_produtos', function($table)
        {
            $table->text('faq')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zmark_content_produtos', function($table)
        {
            $table->dropColumn('faq');
        });
    }
}
