import os
from datetime import datetime, time

class limits():
    today_follow = 0
    today_tweet = 0
    today_messages = 0
    today_like = 0
    today_starts = datetime.now()
    f_name_Limit = os.path.dirname(os.path.realpath(__file__)) + os.sep + 'dailyLimitlog.txt'
    def __init__(self):
        self.update_Open()

    def update_Open(self):
        filename = open(self.f_name_Limit, encoding="utf-8")
        line = filename.readlines()
        filename.close()
        
        if(len(line)==5):
            date = line[0].rstrip()
            if(self.date_diff(date)==0):
                self.today_starts = datetime.strptime(date, '%Y-%m-%d %H:%M:%S.%f')
                self.today_tweet = int(line[1].rstrip())
                self.today_follow = int(line[2].rstrip())
                self.today_messages = int(line[3].rstrip())
                self.today_like = int(line[4].rstrip())
            else:
                self.today_starts = datetime.now()
                self.today_tweet = 0
                self.today_follow = 0
                self.today_messages = 0
                self.today_like = 0
        else:
            self.today_starts = datetime.now()
            self.today_tweet = 0
            self.today_follow = 0
            self.today_messages = 0
            self.today_like = 0


    def update_today_follow(self): 
        self.update_Open()
        self.today_follow +=1
        self.update_Limits()

    def update_today_tweet(self): 
        self.update_Open()
        self.today_tweet +=1
        self.update_Limits()


    def update_today_messages(self): 
        self.update_Open()
        self.today_messages +=1
        self.update_Limits()

    def update_today_like(self): 
        self.update_Open()
        self.today_like +=1
        self.update_Limits()

    def update_Limits(self): 
        txt = str(self.today_starts) + "\n" + str(self.today_tweet) + "\n" + str(self.today_follow) + "\n" + str(self.today_messages)+ "\n" + str(self.today_like)
        with open(self.f_name_Limit, 'w') as filetowrite:
            filetowrite.write(txt)

    def date_diff(self, dt2):
        date1 = datetime.strptime(dt2, '%Y-%m-%d %H:%M:%S.%f')
        now = datetime.now()
        timedelta = now - date1
        return timedelta.days
    
    def tweetlimit(self):
        self.update_Open()
        if self.today_tweet < 2000:
            return True
        else:
            return False
    
    def messageslimit(self):
        self.update_Open()
        if self.today_messages < 1000:
            return True
        else:
            return False
    
    def followlimit(self):
        self.update_Open()
        if self.today_follow < 400:
            return True
        else:
            return False

    def likelimit(self):
        self.update_Open()
        if self.today_like < 1000:
            return True
        else:
            return False
    
    #Specified date



#  Direct Messages (daily): The limit is 1,000 messages sent per day.
#  Tweets: 2,400 per day. The daily update limit is further broken down into smaller limits for semi-hourly intervals. Retweets are counted as Tweets.
#  Changes to account email: 4 per hour.
#  Following (daily): The technical follow limit is 400 per day. Please note that this is a technical account limit only, and there are additional rules prohibiting aggressive following behavior. 
#  Following (account-based): Once an account is following 5,000 other accounts, additional follow attempts are limited by account-specific ratios. 


# Test cases
# t = '2021-04-16 00:51:40.590472'
# #print(date_diff(t))
# my_Limits = Limits()

# for i in range(20):
#     my_Limits.update_today_follow()
#     my_Limits.update_today_like()
#     my_Limits.update_today_messages()
#     my_Limits.update_today_tweet()

# my_Limits.update_Limits()
# print("test pass")