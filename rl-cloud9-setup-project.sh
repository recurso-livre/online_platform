# RECURSO LIVRE
# Arquivo:	    rl-cloud9-setup-project.sh
# Descrição:    Arquivo para preparar criar o preparar o projeto para o Cloud9.
# Autor: 	    Cristian C. Mello
# Email: 	    <cristianc.mello@gmail.com>
# GitHub: 	    <https://github.com/cristiancmello>
###############################################################################

# Renomear workdir
cd ..
mv online_platform app

# Gerar chave de aplicação dentro do diretório
cd app
cp .env.example .env
php artisan key:generate

# Configurar o Cloud9
echo "Configurando o Cloud9..."
sudo sed -i -e 's|workspace|workspace/app/public|g' /etc/apache2/sites-available/001-cloud9.conf
