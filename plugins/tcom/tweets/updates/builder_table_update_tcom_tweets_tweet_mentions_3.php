<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTcomTweetsTweetMentions3 extends Migration
{
    public function up()
    {
        Schema::rename('tcom_tweets_tweet_mention', 'tcom_tweets_tweet_mentions');
    }
    
    public function down()
    {
        Schema::rename('tcom_tweets_tweet_mentions', 'tcom_tweets_tweet_mention');
    }
}
