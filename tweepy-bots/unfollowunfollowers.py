#!/usr/bin/env python
# bots/followfollowers.py

import tweepy
import logging
from config import create_api
from random import uniform
import time
import utils
import os

logging.basicConfig(level=logging.INFO)
logger = logging.getLogger()

def cleanup_friends(api):
    unfollowed_list_file_name=os.path.dirname(os.path.realpath(__file__)) + os.sep + "unfollowed_list.txt"
    interval = 0.5 #uniform(0.4,0.9) # minutes uniform(2.5, 10.0)  Random float:  2.5 <= x <= 10.0
    followers = api.followers_ids(api.me().id)
    print("Followers: ", len(followers))
    friends = api.friends_ids(api.me().id)
    print(isinstance(friends, list))
    print(friends[-1])
    print(friends[-2])
    print(friends[-3])
    friends = friends
    print("You follow:", len(friends))
    iterated_friends = 0
    unfollowed = 0
    followers_cap = 500
    for friend in friends[1050:]:
        iterated_friends += 1
        logger.info(f"Number of iterated friends: {iterated_friends}")
        # fetching the user
        user = api.get_user(friend)
        # fetching user follower count
        followers_count = user.followers_count 
        friend_screen_name = user.screen_name
        logger.info(f"User {friend_screen_name}({friend}) has {followers_count} followers")
        if friend not in followers and followers_count < followers_cap:
            try:
                logger.info(f"Unfollowing user {friend_screen_name}")
                api.destroy_friendship(friend)
                utils.write_to_file(unfollowed_list_file_name, friend_screen_name)
                unfollowed += 1
                logger.info(f"Number of unfollowed: {unfollowed}")
                logger.info(f"Sleeping {interval} minutes")
                time.sleep(60 * interval)
            except tweepy.TweepError as e:
                logger.error(e.reason)
            except UnicodeEncodeError as e:
                logger.error(e.reason)
                pass
            except ConnectionResetError:
                logger.error("Error detected")
                pass

def main():
    api = create_api()
    cleanup_friends(api)

if __name__ == "__main__":
    main()