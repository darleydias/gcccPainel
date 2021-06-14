# -*- coding: utf-8 -*-
import scrapy


class LoginseiSpider(scrapy.Spider):
    name = 'loginSei'
    #start_urls = ['https://sistemasgsi.mpmg.mp.br/']
    start_urls = ['https://seisip.mpmg.mp.br/sip/login.php?sigla_orgao_sistema=MPMG&sigla_sistema=SEI&infra_url=L3NlaS8=']

    def parse(self, response):
    	self.log('visitei a página de login: ')

    
