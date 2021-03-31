<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTcomTweetsMention extends Migration
{
    public function up()
    {
        Schema::rename('tcom_tweets_mentions', 'tcom_tweets_mention');
    }
    
    public function down()
    {
        Schema::rename('tcom_tweets_mention', 'tcom_tweets_mentions');
    }
}
