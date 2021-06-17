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
dt = []
hr = []
fh = []
#lendo o excel
# modelo de excel de entrada  nome tem que ser ips xls  lista comeca na linha 9 coluna c - ENDERECO DE IP    DATA	HORA	FUSO

workbook = xlrd.open_workbook('ips.xls')
sheet = workbook.sheet_by_index(0)


for linha in range(8,sheet.nrows):
	ips.append(str(sheet.cell_value(linha,2)).encode('utf-8'))
	dt.append(str(sheet.cell_value(linha,4)).encode('utf-8'))
	hr.append(str(sheet.cell_value(linha,5)).encode('utf-8'))
	fh.append(str(sheet.cell_value(linha,6)).encode('utf-8'))

driver = webdriver.Chrome('/var/www/html/logIps/chromedriver')
driver.get("https://registro.br/tecnologia/ferramentas/whois/")

for ip in ips:
	pesquisa = driver.find_element_by_id("whois-field")
	pesquisa.clear() #Limpando a barra de pesquisa
	pesquisa.send_keys(ip)
	pesquisa.send_keys(Keys.RETURN)
	time.sleep(2)
	resultados = driver.find_element_by_class_name('cell-owner')
	texto ="%s %s %s %s %s " % (ip,dt[0],hr[0],fh[0],resultados.text)
	texto= texto.strip()
	texto = unidecode.unidecode(texto)
	texto = texto+"\n"
	arq.write(texto)
arq.close	
driver.close()
