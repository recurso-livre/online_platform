#!/bin/bash
# RECURSO LIVRE
# Arquivo:	    rl-composer-update.sh
# Descrição:    Arquivo para atualizar/recriar a pasta 'vendor' do projeto.
# Autor: 	    Cristian C. Mello
# Email: 	    <cristianc.mello@gmail.com>
# GitHub: 	    <https://github.com/cristiancmello>
###############################################################################

composer dump-autoload
composer update