<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTcomTweetsMentions extends Migration
{
    public function up()
    {
        Schema::rename('tcom_tweets_mention', 'tcom_tweets_mentions');
    }
    
    public function down()
    {
        Schema::rename('tcom_tweets_mentions', 'tcom_tweets_mention');
    }
}
