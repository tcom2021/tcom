<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTcomTweetsTweet extends Migration
{
    public function up()
    {
        Schema::table('tcom_tweets_tweet', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tcom_tweets_tweet', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
