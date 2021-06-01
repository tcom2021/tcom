import tweepy
import time
import sys
from datetime import datetime
from config import  create_api, create_api_List, create_api_test
from limits import limits
import random
import os
import utils
import logging
import atexit

api = create_api_test()
  
# the ID of the user
id = 1168167671151628290
  
# fetching the user
user = api.get_user(id)
api.get_user(id)
ids = api.followers_ids(id)
print("USER NAME = ", user.screen_name)

keywords=["Consulate", "consulate", "Embassy", "embassy", "Ambassador"]
potential_deplomats = []
for page in tweepy.Cursor(api.followers_ids, screen_name="AbiyAhmedAli").pages():
    ids.extend(page)
    for id in page:
        try:
            user = api.get_user(id)
            if "Ethiopia" in user.description:
                for key in keywords:
                    if key in user.description:
                        potential_deplomats.append(id)
                        potential_deplomats.append([user.screen_name, user.description])
        except tweepy.TweepError as e:
            print(e.reason)
            continue
    time.sleep(60)

print(len(ids)) 
# fetching the followers_count
followers_count = user.followers_count
keywords=["Consulate", "consulate", "Embassy", "embassy", "Ambassador"]
print("The number of followers of the user are : " + str(followers_count))



