<?php
class chktor extends be_module { 
	public function process($ip,&$stats=array(),&$options=array(),&$post=array()) {
		$torlist=array(
'103.234.220.197',
'103.236.201.110',
'103.250.73.6',
'103.27.124.82',
'103.29.70.23',
'103.3.61.114',
'103.35.74.75',
'103.35.74.77',
'103.56.207.84',
'103.73.64.73',
'103.8.79.229',
'104.129.28.42',
'104.156.250.18',
'104.167.116.234',
'104.200.20.46',
'104.200.24.17',
'104.206.237.22',
'104.218.63.73',
'104.218.63.74',
'104.218.63.75',
'104.218.63.76',
'104.223.123.98',
'104.236.128.108',
'104.236.141.156',
'104.237.203.98',
'106.187.37.101',
'107.181.174.84',
'107.181.189.39',
'107.191.56.192',
'108.85.99.10',
'109.108.3.87',
'109.126.9.228',
'109.163.234.2',
'109.163.234.4',
'109.163.234.5',
'109.163.234.7',
'109.163.234.8',
'109.163.234.9',
'109.169.33.163',
'109.201.133.100',
'109.69.67.17',
'110.174.43.136',
'111.248.122.193',
'111.248.58.38',
'114.45.112.248',
'117.201.240.2',
'118.163.74.160',
'118.165.37.22',
'119.81.31.43',
'120.29.217.46',
'124.109.1.207',
'125.212.241.182',
'128.153.146.125',
'128.199.47.160',
'128.52.128.105',
'130.204.161.3',
'130.226.169.137',
'136.32.72.40',
'137.74.167.96',
'137.74.169.241',
'138.197.207.243',
'138.197.85.80',
'138.201.40.83',
'139.162.10.72',
'139.162.105.26',
'139.162.144.133',
'139.162.207.33',
'139.162.226.245',
'139.162.28.23',
'139.162.28.31',
'139.59.121.220',
'139.59.250.10',
'139.59.62.94',
'14.202.230.49',
'141.105.64.97',
'141.138.141.208',
'141.170.2.53',
'141.255.189.161',
'144.217.161.119',
'144.217.167.240',
'146.0.74.13',
'146.0.79.144',
'146.0.79.243',
'146.185.163.44',
'146.185.177.103',
'149.202.24.109',
'149.202.98.160',
'149.202.98.161',
'149.56.135.190',
'149.56.223.241',
'149.56.229.16',
'149.56.229.17',
'151.45.73.161',
'151.50.16.112',
'151.56.173.184',
'151.80.238.152',
'151.80.38.67',
'154.127.61.249',
'154.16.244.71',
'155.133.82.112',
'155.4.230.97',
'155.93.144.134',
'158.193.153.6',
'158.255.211.9',
'158.255.5.206',
'158.255.6.242',
'158.69.215.7',
'161.202.72.163',
'162.213.0.243',
'162.213.3.221',
'162.219.179.34',
'162.220.246.230',
'162.221.201.57',
'162.243.136.6',
'162.243.166.137',
'162.243.75.204',
'162.247.72.199',
'162.247.72.200',
'162.247.72.201',
'162.247.72.202',
'162.247.72.216',
'162.247.72.217',
'162.247.72.27',
'162.247.72.7',
'162.247.73.204',
'162.247.73.206',
'162.248.10.132',
'163.172.101.137',
'163.172.134.39',
'163.172.136.101',
'163.172.142.15',
'163.172.151.250',
'163.172.151.47',
'163.172.156.159',
'163.172.160.182',
'163.172.169.38',
'163.172.191.54',
'163.172.212.115',
'163.172.217.50',
'163.172.223.200',
'163.172.67.180',
'163.172.73.56',
'164.132.106.162',
'164.132.51.91',
'164.77.133.220',
'165.255.106.248',
'165.255.186.6',
'165.255.237.175',
'166.70.15.14',
'166.70.207.2',
'167.114.200.67',
'167.114.230.104',
'167.114.34.150',
'167.114.77.220',
'167.114.77.221',
'167.114.89.195',
'168.1.75.35',
'169.57.142.79',
'170.250.140.52',
'171.25.193.131',
'171.25.193.132',
'171.25.193.20',
'171.25.193.235',
'171.25.193.25',
'171.25.193.77',
'171.25.193.78',
'172.104.112.47',
'172.104.154.185',
'172.104.41.83',
'172.111.177.200',
'172.111.177.207',
'172.111.177.71',
'173.14.173.227',
'173.208.213.114',
'173.230.140.242',
'173.254.216.66',
'173.255.226.142',
'173.255.231.125',
'174.101.69.104',
'176.10.104.240',
'176.10.104.243',
'176.10.107.180',
'176.10.250.33',
'176.10.99.200',
'176.10.99.201',
'176.10.99.202',
'176.10.99.203',
'176.10.99.204',
'176.10.99.205',
'176.10.99.206',
'176.10.99.207',
'176.10.99.208',
'176.10.99.209',
'176.126.252.11',
'176.126.252.12',
'176.194.96.135',
'176.31.180.157',
'176.31.45.3',
'176.36.117.185',
'176.58.100.98',
'176.58.89.182',
'177.204.187.192',
'178.140.99.168',
'178.151.224.153',
'178.162.216.5',
'178.17.170.13',
'178.17.170.135',
'178.17.170.164',
'178.17.170.194',
'178.17.170.195',
'178.17.170.196',
'178.17.171.40',
'178.17.171.43',
'178.17.171.49',
'178.17.174.10',
'178.17.174.14',
'178.17.174.141',
'178.17.174.32',
'178.175.131.194',
'178.175.138.99',
'178.18.83.215',
'178.20.55.16',
'178.20.55.18',
'178.202.169.177',
'178.208.107.85',
'178.208.111.69',
'178.22.105.174',
'178.238.237.44',
'178.254.31.209',
'178.32.181.97',
'178.32.181.99',
'178.32.53.53',
'178.9.250.233',
'179.178.73.167',
'18.248.1.85',
'18.248.2.85',
'18.85.22.204',
'184.81.189.61',
'185.10.68.119',
'185.10.68.157',
'185.10.68.169',
'185.10.68.95',
'185.100.84.108',
'185.100.84.82',
'185.100.85.101',
'185.100.85.132',
'185.100.85.147',
'185.100.85.190',
'185.100.85.192',
'185.100.85.61',
'185.100.85.90',
'185.100.86.100',
'185.100.86.128',
'185.100.86.141',
'185.100.86.154',
'185.100.86.167',
'185.100.86.217',
'185.100.87.210',
'185.100.87.82',
'185.103.99.60',
'185.104.120.2',
'185.104.120.3',
'185.104.120.4',
'185.112.157.135',
'185.117.118.132',
'185.117.215.9',
'185.117.82.132',
'185.120.34.241',
'185.127.25.68',
'185.129.62.62',
'185.130.104.198',
'185.14.102.177',
'185.145.131.172',
'185.16.200.176',
'185.162.21.58',
'185.165.168.143',
'185.165.168.42',
'185.165.168.77',
'185.170.41.8',
'185.170.42.4',
'185.189.14.230',
'185.189.14.61',
'185.208.209.2',
'185.208.209.3',
'185.208.209.4',
'185.25.21.163',
'185.28.102.55',
'185.29.8.132',
'185.29.8.211',
'185.38.14.171',
'185.38.14.215',
'185.52.68.146',
'185.52.68.8',
'185.61.138.207',
'185.61.149.193',
'185.65.205.10',
'185.66.200.10',
'185.72.244.24',
'185.73.44.54',
'185.82.216.233',
'185.87.185.45',
'186.120.225.119',
'186.214.54.100',
'188.166.127.251',
'188.213.165.101',
'188.65.144.2',
'189.84.21.44',
'190.10.8.50',
'190.10.8.9',
'190.104.217.195',
'190.123.46.51',
'190.210.98.90',
'190.216.2.136',
'191.101.238.214',
'191.34.118.77',
'192.160.102.164',
'192.160.102.165',
'192.160.102.166',
'192.160.102.168',
'192.160.102.169',
'192.160.102.170',
'192.162.26.53',
'192.195.80.10',
'192.34.80.176',
'192.42.115.101',
'192.42.116.16',
'192.71.249.111',
'192.81.131.49',
'192.87.28.28',
'192.99.13.206',
'193.107.85.56',
'193.107.85.57',
'193.107.85.62',
'193.110.157.151',
'193.15.16.4',
'193.169.135.133',
'193.171.202.150',
'193.201.225.45',
'193.233.60.137',
'193.233.60.147',
'193.233.60.152',
'193.233.62.105',
'193.70.39.41',
'193.70.56.25',
'193.70.89.20',
'193.70.95.180',
'193.90.12.86',
'193.90.12.87',
'193.90.12.88',
'193.90.12.89',
'193.90.12.90',
'194.218.3.79',
'194.54.162.212',
'194.67.184.222',
'195.110.59.67',
'195.123.210.95',
'195.123.212.118',
'195.154.209.57',
'195.22.24.162',
'195.228.45.176',
'195.254.135.76',
'198.100.148.112',
'198.167.223.38',
'198.211.122.191',
'198.245.60.8',
'198.46.138.18',
'198.50.158.140',
'198.50.159.155',
'198.50.159.204',
'198.50.200.129',
'198.50.200.131',
'198.50.200.135',
'198.50.200.137',
'198.50.200.140',
'198.50.200.147',
'198.58.100.240',
'198.58.107.53',
'198.58.127.10',
'198.73.50.71',
'198.96.155.3',
'199.127.226.150',
'199.249.223.60',
'199.249.223.61',
'199.249.223.62',
'199.249.223.63',
'199.249.223.64',
'199.249.223.71',
'199.249.223.76',
'199.249.223.77',
'199.249.223.78',
'199.249.223.79',
'199.249.223.81',
'199.254.238.44',
'199.68.196.124',
'199.87.154.255',
'201.22.103.225',
'201.68.215.52',
'204.11.50.131',
'204.17.56.42',
'204.194.29.4',
'204.8.156.142',
'204.85.191.30',
'205.166.94.153',
'205.168.84.133',
'206.248.184.127',
'206.55.74.0',
'207.244.70.35',
'208.67.1.83',
'209.123.234.23',
'209.133.66.214',
'209.249.157.69',
'209.249.180.198',
'209.66.119.150',
'210.10.166.171',
'210.10.180.35',
'210.3.102.152',
'210.50.9.88',
'210.8.136.100',
'211.21.48.217',
'212.100.56.134',
'212.159.91.21',
'212.16.104.33',
'212.19.17.213',
'212.21.66.6',
'212.237.50.188',
'212.47.229.60',
'212.47.243.140',
'212.47.246.21',
'212.81.199.159',
'212.83.40.239',
'212.92.219.15',
'213.108.105.71',
'213.32.55.247',
'213.61.149.100',
'213.95.21.54',
'216.17.101.79',
'216.218.134.12',
'216.218.222.11',
'216.218.222.12',
'216.218.222.13',
'216.239.90.19',
'217.106.238.194',
'217.115.10.131',
'217.182.168.178',
'217.182.207.27',
'217.182.74.253',
'217.182.76.240',
'217.25.160.37',
'217.25.164.169',
'219.102.195.65',
'222.154.104.232',
'222.155.0.222',
'223.26.48.248',
'23.249.130.116',
'23.249.130.118',
'23.88.114.51',
'23.92.27.23',
'23.92.28.23',
'24.207.212.154',
'24.248.203.49',
'31.172.137.22',
'31.185.104.19',
'31.185.104.20',
'31.185.104.21',
'31.185.27.208',
'31.24.148.37',
'35.184.106.64',
'36.227.167.180',
'36.229.28.2',
'37.0.124.86',
'37.1.34.33',
'37.1.39.132',
'37.1.49.77',
'37.1.58.244',
'37.1.59.245',
'37.139.8.104',
'37.148.155.14',
'37.187.129.166',
'37.187.53.94',
'37.187.7.74',
'37.190.74.24',
'37.218.240.110',
'37.218.240.21',
'37.218.240.50',
'37.218.240.68',
'37.218.240.80',
'37.218.245.25',
'37.220.27.19',
'37.220.35.202',
'37.220.36.240',
'37.48.120.196',
'37.59.112.7',
'37.59.67.254',
'37.97.228.159',
'37.99.14.200',
'4.31.64.70',
'41.142.8.204',
'41.206.188.206',
'41.231.53.101',
'41.249.188.142',
'41.78.128.113',
'45.33.23.23',
'45.33.48.204',
'45.35.72.85',
'45.62.242.232',
'45.62.243.135',
'45.62.249.18',
'45.62.250.240',
'45.62.254.224',
'45.76.1.31',
'45.79.144.222',
'45.79.207.176',
'45.79.68.102',
'45.79.85.112',
'46.101.127.145',
'46.101.139.248',
'46.101.150.49',
'46.101.237.184',
'46.105.100.149',
'46.151.209.83',
'46.16.234.131',
'46.165.223.217',
'46.165.230.5',
'46.166.187.26',
'46.17.97.112',
'46.182.18.214',
'46.182.18.40',
'46.182.18.46',
'46.182.19.15',
'46.182.19.219',
'46.183.218.199',
'46.183.219.231',
'46.183.221.231',
'46.194.157.121',
'46.194.178.188',
'46.23.72.29',
'46.233.0.70',
'46.235.227.70',
'46.246.35.82',
'46.246.35.84',
'46.246.49.169',
'46.246.49.206',
'46.246.49.211',
'46.246.62.208',
'46.246.63.215',
'46.249.2.197',
'46.28.53.42',
'46.29.248.238',
'46.38.56.213',
'46.39.102.250',
'46.45.137.71',
'46.5.76.163',
'46.72.111.113',
'46.72.66.183',
'46.72.67.90',
'46.72.89.188',
'46.72.99.189',
'46.73.64.199',
'46.98.197.24',
'46.98.199.84',
'46.98.205.134',
'46.98.207.182',
'5.10.42.237',
'5.10.45.142',
'5.10.45.48',
'5.135.158.101',
'5.154.190.139',
'5.187.21.45',
'5.189.146.133',
'5.189.188.111',
'5.196.1.129',
'5.196.121.161',
'5.196.29.217',
'5.196.66.162',
'5.199.130.188',
'5.249.145.164',
'5.254.100.66',
'5.254.112.154',
'5.254.66.104',
'5.254.79.66',
'5.3.173.102',
'5.34.33.29',
'5.34.97.35',
'5.39.101.9',
'5.39.217.14',
'5.79.209.57',
'5.79.68.161',
'5.79.70.174',
'5.79.86.15',
'5.9.195.140',
'50.247.195.124',
'50.76.159.218',
'51.15.10.158',
'51.15.37.18',
'51.15.39.2',
'51.15.40.233',
'51.15.41.124',
'51.15.43.205',
'51.15.48.253',
'51.15.50.10',
'51.15.52.230',
'51.15.53.118',
'51.15.53.134',
'51.15.53.83',
'51.15.56.11',
'51.15.56.110',
'51.15.57.125',
'51.15.62.146',
'51.15.63.229',
'51.15.70.228',
'51.15.79.107',
'51.254.23.203',
'51.254.48.93',
'51.255.157.183',
'51.255.196.218',
'51.255.202.38',
'51.255.202.66',
'52.169.74.227',
'52.174.254.156',
'60.248.162.179',
'61.228.182.133',
'61.230.114.135',
'61.231.161.37',
'61.231.166.72',
'62.102.148.67',
'62.112.11.199',
'62.112.11.238',
'62.12.115.107',
'62.133.130.105',
'62.149.12.153',
'62.210.105.116',
'62.210.105.86',
'62.210.115.87',
'62.210.123.10',
'62.210.129.246',
'62.210.37.82',
'62.210.83.149',
'62.212.73.141',
'64.113.32.29',
'64.124.32.84',
'64.137.169.134',
'64.137.190.54',
'64.137.200.96',
'64.137.203.36',
'64.137.228.189',
'64.137.231.56',
'64.137.245.56',
'64.27.17.140',
'65.181.123.254',
'65.19.167.130',
'65.19.167.131',
'65.19.167.132',
'66.155.4.213',
'66.180.193.219',
'66.220.3.179',
'66.70.217.179',
'67.1.110.93',
'67.205.146.164',
'67.215.255.140',
'68.63.220.64',
'69.162.107.5',
'69.162.123.166',
'69.162.139.9',
'69.164.207.234',
'70.164.255.174',
'71.46.220.68',
'72.12.207.14',
'72.14.179.10',
'72.52.75.27',
'73.20.234.24',
'74.50.54.69',
'75.111.20.184',
'75.54.229.204',
'77.109.139.87',
'77.120.122.131',
'77.151.20.214',
'77.247.181.163',
'77.247.181.165',
'77.248.92.38',
'77.43.219.246',
'77.54.234.45',
'77.73.67.142',
'77.81.107.138',
'77.81.247.72',
'78.107.237.16',
'78.109.23.1',
'78.129.137.28',
'78.142.175.70',
'78.142.19.166',
'78.142.19.42',
'78.31.164.41',
'78.41.115.145',
'78.47.246.35',
'78.70.167.74',
'79.124.59.202',
'79.134.234.247',
'79.134.255.200',
'79.137.79.167',
'79.137.80.94',
'79.169.35.179',
'79.172.193.32',
'80.162.43.72',
'80.209.252.138',
'80.241.60.207',
'80.67.172.162',
'80.73.242.142',
'80.79.23.7',
'80.82.67.186',
'80.85.84.23',
'80.95.67.137',
'81.17.22.186',
'81.240.224.242',
'82.103.136.246',
'82.103.138.208',
'82.211.19.143',
'82.221.112.122',
'82.221.128.217',
'82.221.139.190',
'82.221.139.25',
'82.247.198.227',
'82.71.211.13',
'83.149.99.151',
'83.220.182.226',
'83.220.188.72',
'84.105.18.164',
'84.19.176.100',
'84.19.180.135',
'84.190.191.50',
'84.200.50.18',
'84.200.82.163',
'84.209.131.146',
'84.217.13.138',
'84.3.0.53',
'84.48.199.78',
'84.53.192.243',
'84.53.225.118',
'85.119.83.78',
'85.143.210.233',
'85.143.219.211',
'85.143.95.50',
'85.195.107.250',
'85.204.246.196',
'85.248.227.163',
'85.248.227.164',
'85.248.227.165',
'85.29.170.214',
'85.68.240.2',
'85.90.244.23',
'86.110.118.189',
'86.184.65.17',
'86.59.128.130',
'86.7.140.31',
'87.118.111.158',
'87.118.115.176',
'87.118.116.12',
'87.118.116.90',
'87.118.122.254',
'87.118.122.30',
'87.118.122.50',
'87.118.122.51',
'87.118.82.3',
'87.118.92.43',
'87.118.94.2',
'87.120.254.37',
'87.120.254.97',
'87.121.0.165',
'87.121.52.239',
'87.180.226.6',
'87.180.228.252',
'87.180.231.111',
'87.180.231.20',
'87.180.237.2',
'87.248.32.32',
'87.248.32.92',
'87.81.148.61',
'87.98.178.61',
'87.98.250.244',
'88.159.9.134',
'88.161.203.46',
'88.198.125.96',
'88.202.178.101',
'88.83.40.246',
'89.101.218.6',
'89.144.12.15',
'89.187.144.122',
'89.187.150.12',
'89.223.27.241',
'89.234.157.254',
'89.236.34.117',
'89.248.166.157',
'89.31.57.5',
'89.31.96.168',
'89.32.127.178',
'89.34.237.101',
'89.36.219.81',
'89.38.208.57',
'89.45.226.28',
'89.94.1.179',
'91.116.230.38',
'91.121.119.122',
'91.134.232.48',
'91.134.232.58',
'91.138.41.48',
'91.146.121.3',
'91.197.234.102',
'91.213.8.236',
'91.219.236.218',
'91.219.236.232',
'91.219.237.229',
'91.219.237.244',
'91.219.239.72',
'91.222.105.204',
'91.223.82.156',
'91.233.106.121',
'91.235.129.28',
'91.90.248.41',
'92.111.156.14',
'92.222.103.232',
'92.222.134.129',
'92.222.28.243',
'92.222.6.12',
'92.222.69.25',
'92.222.74.226',
'92.222.84.136',
'93.115.95.201',
'93.115.95.202',
'93.115.95.204',
'93.115.95.205',
'93.115.95.206',
'93.115.95.207',
'93.115.95.216',
'93.119.27.199',
'93.170.77.90',
'93.174.90.30',
'93.174.93.133',
'93.64.207.55',
'93.65.209.155',
'93.67.190.63',
'93.89.101.27',
'93.95.228.80',
'94.102.50.42',
'94.140.120.139',
'94.141.227.12',
'94.142.242.84',
'94.198.100.17',
'94.221.114.154',
'94.221.127.172',
'94.229.146.6',
'94.23.173.249',
'94.23.201.80',
'94.23.248.36',
'94.242.246.23',
'94.242.246.24',
'94.242.57.161',
'94.242.59.163',
'94.34.62.166',
'95.128.43.164',
'95.130.11.147',
'95.130.11.170',
'95.140.42.183',
'95.142.161.63',
'95.211.230.94',
'95.215.44.194',
'95.215.45.248',
'95.71.29.94',
'95.71.44.143',
'95.71.45.61',
'96.44.144.106',
'96.64.149.101',
'96.66.15.147',
'97.74.237.196'		
		);
		if (in_array($ip,$torlist)) return 'Tor Exit Node';
		return false;
		
		// return false if OK, return a reason if not.
	}
}



?>
