import shutil
from time import sleep

import requests
from bs4 import BeautifulSoup
from urllib.parse import urljoin

pokedex_data = []

url = 'https://www.pokemon.com/es/pokedex/'

response = requests.get(url)

parsed_html = BeautifulSoup(response.text, 'html.parser')

links = parsed_html.find('h2', text='Pokédex Nacional').findNext().findAll('a', href=True)

for link in links:
    sleep(1)
    url = urljoin(url, link['href'])
    response = requests.get(url)
    parsed_html = BeautifulSoup(response.text, 'html.parser')
    pokemon_name = parsed_html.find('meta', {'name': 'pkm-title'})['content']
    pokemon_number = parsed_html.find('meta', {'name': 'pkm-id'})['content']
    pokemon_image = parsed_html.find('meta', {'property': 'og:image'})['content']
    pokemon_description = parsed_html.find('meta', {'name': 'description'})['content']
    print('{} - {} - {} - {}'.format(pokemon_number, pokemon_name, pokemon_image, pokemon_description))

    # img_response = requests.get(pokemon_image, stream=True)
    # with open('img/{}.png'.format(pokemon_number), 'wb') as file:
    #     shutil.copyfileobj(img_response.raw, file)
