from tweeter_api import function
import unittest
import tweepy

consumer_key='write your consumer key here'
consumer_secret='write your consumer secret here'
access_token='write your acces token here'
access_token_secret='write your access token secret here'

auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access_token_secret)

api = tweepy.API(auth)

user = api.get_user('@realDonaldTrump')

class TestStringMethods(unittest.TestCase):

    def test_instanceof_dicc_con_usuario_real(self):
        self.assertIsInstance(function(api,user),dict)

    def test_usuario_no_real(self):
        assert function(api,'nounusuariorealespero')


if __name__ == '__main__':
    unittest.main()