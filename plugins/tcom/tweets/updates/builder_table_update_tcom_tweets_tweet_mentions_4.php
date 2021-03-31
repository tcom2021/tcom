<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTcomTweetsTweetMentions4 extends Migration
{
    public function up()
    {
        Schema::table('tcom_tweets_tweet_mentions', function($table)
        {
            $table->dropPrimary(['tweets_id','mentions_id']);
            $table->renameColumn('mentions_id', 'mention_id');
            $table->primary(['tweets_id','mention_id']);
        });
    }
    
    public function down()
    {
        Schema::table('tcom_tweets_tweet_mentions', function($table)
        {
            $table->dropPrimary(['tweets_id','mention_id']);
            $table->renameColumn('mention_id', 'mentions_id');
            $table->primary(['tweets_id','mentions_id']);
        });
    }
}
