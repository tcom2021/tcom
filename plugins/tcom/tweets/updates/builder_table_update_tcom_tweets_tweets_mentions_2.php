<?php namespace Tcom\Tweets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTcomTweetsTweetsMentions2 extends Migration
{
    public function up()
    {
        Schema::table('tcom_tweets_tweets_mentions', function($table)
        {
            $table->dropPrimary(['tweets_id','mentions_id']);
            $table->integer('tweet_id');
            $table->integer('mention_id');
            $table->dropColumn('tweets_id');
            $table->dropColumn('mentions_id');
            $table->primary(['tweet_id','mention_id']);
        });
    }
    
    public function down()
    {
        Schema::table('tcom_tweets_tweets_mentions', function($table)
        {
            $table->dropPrimary(['tweet_id','mention_id']);
            $table->dropColumn('tweet_id');
            $table->dropColumn('mention_id');
            $table->integer('tweets_id');
            $table->integer('mentions_id');
            $table->primary(['tweets_id','mentions_id']);
        });
    }
}
