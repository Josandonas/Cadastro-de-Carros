# CakePHP Esqueleto da Aplicação

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

O esqueleto da aplicação foi criado com [CakePHP](https://cakephp.org) 4.x.


Usou-se o sistema operacional [Ubuntu 20.4.2 LTS](https://ubuntu.com/download/desktop).

## Instalação

1. Faça o Download do [Composer](https://getcomposer.org/doc/00-intro.md) ou atualize ele `composer self-update`.
2. Baixe o Xampp 7.3.28 [Xamp](https://www.apachefriends.org/pt_br/download.html).
3. Caso seu sistema seja Linux dê este comando adicional:
   
```bash
sudo apt-get install php7.4-intl
```
## Banco de Dados

#### Windows

1. Abra a interface gráfica do Xampp e inicialize o servidor Apache e o MySQL.
2. Após isso dê Clique em no botão  `Admin` que está na mesma linha do MySQL.
3. Crie um banco chamado `carros`.
4. Abra o arquivo que está dentro da pasta ` dadosBancoCarros.txt` ou veja ele [Link_Banco_Carros](https://github.com/Josandonas/Cadastro-de-Carros/blob/master/dadosBancoCarros.txt).
5. Copie e Cole todo o conteúdo e execute, claro estando em uso o banco `carros`.

#### Ubuntu 
1. Faça o Download do MySQL Server pelo comando no terminal: 
```bash
sudo apt install mysql-server
```
2. Defina as permissões e crie um usuario dentro usando o comando (Nese ponto sugiro o link de guia: [Guia_Criação_User_Banco](https://www.digitalocean.com/community/tutorials/como-instalar-o-mysql-no-ubuntu-18-04-pt)):
```bash
sudo mysql_secure_installation
```    
Para ver a página inicial `http://localhost/Carros/`.

## Configuração



## O que foi utilizado no Layout

The app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default. You can, however, replace it with any other library or
custom styles.
