from __future__ import unicode_literals
import unidecode
import unicodedata
import sys
coding = sys.stdout.encoding
from selenium import webdriver 
from selenium.webdriver.common.keys import Keys 
import time 
import xlrd

print("Iniciando nosso robo...\n")

arq = open('/var/www/html/logIps/arquivos/saida.txt','w')
ips= []
dh = []
fh = []
#lendo o excel
# modelo de excel -> 200.198.34.88	2021-06-05 10:10:10	+0300
 
workbook = xlrd.open_workbook('dominios.xls')
sheet = workbook.sheet_by_index(0)


for linha in range(0,sheet.nrows):
	ips.append(sheet.cell_value(linha,0).encode('utf-8'))
	dh.append(sheet.cell_value(linha,1).encode('utf-8'))
	fh.append(sheet.cell_value(linha,2).encode('utf-8'))

driver = webdriver.Chrome('/var/www/html/logIps/chromedriver')
driver.get("https://registro.br/tecnologia/ferramentas/whois/")

for ip in ips:
	pesquisa = driver.find_element_by_id("whois-field")
	pesquisa.clear() #Limpando a barra de pesquisa
	pesquisa.send_keys(ip)
	pesquisa.send_keys(Keys.RETURN)
	time.sleep(2)
	resultados = driver.find_element_by_class_name('cell-owner')
	texto ="Ips %s %s %s %s \n" % (ip,dh[0],fh[0],resultados.text)
	texto= texto.strip()
	texto = unidecode.unidecode(texto)
	texto = texto+"\n"
	arq.write(texto)
arq.close	
driver.close()
