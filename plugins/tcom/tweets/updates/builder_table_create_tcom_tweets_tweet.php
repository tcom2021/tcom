<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTcomTweetsTweet extends Migration
{
    public function up()
    {
        Schema::create('tcom_tweets_tweet', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('status')->nullable();
            $table->integer('rank')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tcom_tweets_tweet');
    }
}
