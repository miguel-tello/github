import ntlk
from nltk.corpus import stopwords


def word_count(string=None):
    counts = dict()
    en_stops = set(stopwords.words('english'))
    if str != None and isinstance(string,str):
        words = string.split()

        for word in words:
            if word not in en_stops:
                if word in counts:
                    counts[word] += 1
                else:
                    counts[word] = 1

    return counts
