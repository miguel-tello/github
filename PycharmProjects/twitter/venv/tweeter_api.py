import ntlk
from nltk.corpus import stopwords
import tweepy
import string

def readtweets(api,user):
    number_of_tweets = 200
    tweets = api.user_timeline(screen_name=user)
    tmp = []

    tweets_for_csv = [tweet.text for tweet in tweets]
    for j in tweets_for_csv:
        tmp.append(j)
    return tmp



def word_count(string=None):
    counts = dict()
    en_stops = set(stopwords.words('english'))
    if str != None and isinstance(string,str):
        words = string.split()
        for word in words:
            if (word not in en_stops) or (word not in string.punctuation):
                if word in counts:
                    counts[word] += 1
                else:
                    counts[word] = 1

    return counts


def function(api,user):
    return word_count(readtweets(api,user))