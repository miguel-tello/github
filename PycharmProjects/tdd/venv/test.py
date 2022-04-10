from words_in_string import word_count
import unittest

class TestStringMethods(unittest.TestCase):

    def test_entry_variable_empty(self):

        self.assertEqual(word_count(), {})
    def test_entry_variable_not_string(self):

        self.assertEqual(word_count(1), {})
    def test_entry_variable_void_string(self):

        self.assertEqual(word_count(''),{})
    def test_entry_1_word_string(self):
        dicc={'word': 1}
        self.assertEqual(word_count('word'),dicc)
    def test_entry_2_equals_words_string(self):
        dicc = {'word': 2}
        self.assertEqual(word_count('word word'), dicc)
    def test_entry_stopword(self):
        dicc = {}
        self.assertEqual(word_count('the'), dicc)

if __name__ == '__main__':
    unittest.main()