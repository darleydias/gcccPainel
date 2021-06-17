from __future__ import unicode_literals
import unidecode
import unicodedata
import sys
coding = sys.stdout.encoding
from selenium import webdriver 
from selenium.webdriver.common.keys import Keys 
import time 

print("Iniciando nosso robo...\n")
entrada = open('/var/www/html/logIps/uploads/listaIps.txt','r')
linhas = entrada.readlines()

saida = open('/var/www/html/logIps/arquivos/provedores.txt','w')
driver = webdriver.Chrome('/var/www/html/logIps/chromedriver')
driver.get("https://www.melissa.com/v2/lookups/iplocation/ip/")

for linha in linhas:
	pesquisa = driver.find_element_by_id("ip")
	pesquisa.clear() #Limpando a barra de pesquisa
	pesquisa.send_keys(linha)
	pesquisa.send_keys(Keys.RETURN)
	time.sleep(2)
	resultados = driver.find_element_by_id("tableInfo50")
	#texto ="Ips %s %s " % (linha,resultados.text)
	#texto = linha.rstrip('\n') + " - " + resultados.text
	texto = resultados.text
	print(texto.rstrip('\n'))
entrada.close
saida.close
driver.close()
