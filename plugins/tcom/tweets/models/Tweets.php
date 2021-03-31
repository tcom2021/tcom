<?php namespace Tcom\Tweets\Models;

use Model;

/**
 * Model
 */
class Tweets extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'tcom_tweets_tweet';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Relations


    public $belongsToMany =[
      'mentions' => [
        'tcom\tweets\models\Mention',
        'table' => 'tcom_tweets_tweet_mentions',
        'order' => 'mention'
      ]
    ];

    public $attachMany = [
'images' => 'System\Models\File'
];


}
