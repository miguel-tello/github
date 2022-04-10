import argparse
import sys
import logging

def ole(str1,str2):
    if len(str1)>=10 or len(str2)>=10:
        raise TypeError
    return str1.replace(" ","")+str2.replace(" ","")



def run():

    ole(sys.argv)


if __name__ == '__main__':
    run()
