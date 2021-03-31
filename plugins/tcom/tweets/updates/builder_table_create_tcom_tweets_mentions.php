<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTcomTweetsMentions extends Migration
{
    public function up()
    {
        Schema::create('tcom_tweets_mentions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('country')->nullable();
            $table->string('mention');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tcom_tweets_mentions');
    }
}
