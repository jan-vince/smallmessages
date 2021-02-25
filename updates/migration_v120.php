<?php 

namespace JanVince\SmallMessages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration_v120 extends Migration
{
    public function up()
    {

        Schema::table('janvince_smallmessages_messages', function($table)
        {
            $table->text('cookie_pages_list')->nullable();
            $table->boolean('show_on_pages')->nullable();
            $table->text('show_on_pages_list')->nullable();
        });

    }

    public function down()
    {
        if (Schema::hasColumn('janvince_smallmessages_messages', 'show_on_pages')) 
        {

            Schema::table('janvince_smallmessages_messages', function($table)
            {
                $table->dropColumn('show_on_pages');
            });

        }

        if (Schema::hasColumn('janvince_smallmessages_messages', 'show_on_pages_list')) 
        {

            Schema::table('janvince_smallmessages_messages', function($table)
            {
                $table->dropColumn('show_on_pages_list');
            });

        }
    }
}
