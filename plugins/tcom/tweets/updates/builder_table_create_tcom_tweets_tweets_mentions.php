<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTcomTweetsTweetsMentions extends Migration
{
    public function up()
    {
        Schema::create('tcom_tweets_tweets_mentions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tweet_id');
            $table->integer('mention_id');
            $table->primary(['tweet_id','mention_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tcom_tweets_tweets_mentions');
    }
}
