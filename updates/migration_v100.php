<?php 

namespace JanVince\SmallMessages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration_SM_v100 extends Migration
{
    public function up()
    {
        Schema::create('janvince_smallmessages_messages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->string('title')->nullable()->index();
            $table->string('slug')->nullable()->index();
            $table->text('content')->nullable();
            $table->datetime('date_from')->nullable();
            $table->datetime('date_to')->nullable();
            $table->boolean('active')->nullable();
            $table->string('cookie_allow')->nullable();
            $table->string('cookie_lifetime_days')->nullable();
            $table->timestamps();
        });

        Schema::create('janvince_smallmessages_categories', function($table)
        {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('title')->nullable()->index();
            $table->string('slug')->nullable()->index();
            $table->text('content')->nullable();
            $table->string('color')->nullable();
            $table->integer('sort_order')->unsigned()->index()->nullable();
            $table->boolean('active')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('janvince_smallmessages_messages');
        Schema::dropIfExists('janvince_smallmessages_categories');
    }
}
