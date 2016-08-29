#!/bin/bash
# RECURSO LIVRE
# Arquivo:	    rl-elastic-search-setup.sh
# Descrição:    Script de instalação do Elastic Search
# Autor: 	    Cristian C. Mello
# Email: 	    <cristianc.mello@gmail.com>
# GitHub: 	    <https://github.com/cristiancmello>
###############################################################################

echo "Instalação do Oracle Java 8 JRE"
sudo add-apt-repository -y ppa:webupd8team/java
sudo apt-get update
sudo apt-get -y install oracle-java8-installer

# testar setup do java
# java -version

# Downloading e Instalação do ElasticSearch
echo "Download do ElasticSearch"
cd ..
wget https://download.elastic.co/elasticsearch/elasticsearch/elasticsearch-2.3.5.deb

echo "Instalação do ElasticSearch"
sudo dpkg -i elasticsearch-2.3.5.deb

sudo update-rc.d elasticsearch defaults

echo "Configuração do Elastic Search"
cd app
sudo cp -i elasticsearch.yml /etc/elasticsearch

# Iniciar serviço do elasticsearch
echo "Iniciando o serviço do Elastic Search"
sudo service elasticsearch start

echo "Espere por cerca de 10s para iniciar o servidor do elasticsearch..."
echo "Para testar se o servidor do elasticsearch está funcionando (caso retorno um JSON de exemplo, execute:"
echo "$ curl -X GET 'http://localhost:9200'"
echo -e "\n"
echo "Informações úteis:"
echo "Para reiniciar ou parar o servidor do elasticsearch, faça:"
echo "[Reiniciar] $ sudo service elasticsearch restart"
echo -e "[Parar]     $ sudo service elasticsearch stop\n"

echo "Para mais informações, consulte: "
echo "[Projeto do Elastic Search para o Laravel] <https://github.com/elasticquent/Elasticquent>"
echo "[Instalação e Config. do Elastic Search]   <https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-elasticsearch-on-ubuntu-14-04>"
echo 'Após a configuração do Service Provider do Elastic Search, não esqueça: $ php artisan vendor:publish --provider="Elasticquent\ElasticquentServiceProvider"'
echo "Para apagar o index: $ curl -XDELETE 'http://localhost:9200/*'"

# https://chartio.com/resources/tutorials/how-to-delete-data-from-elasticsearch
# https://www.elastic.co/guide/en/elasticsearch/reference/current/_cluster_health.html
