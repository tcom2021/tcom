<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTcomTweetsTweet2 extends Migration
{
    public function up()
    {
        Schema::table('tcom_tweets_tweet', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tcom_tweets_tweet', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
