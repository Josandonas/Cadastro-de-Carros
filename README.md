# Aplicação feita em CakePHP

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
2. Defina as permissões e crie um usuario dentro usando o comando (Nesse ponto sugiro o link de guia: [Guia_Criação_User_Banco](https://www.digitalocean.com/community/tutorials/como-instalar-o-mysql-no-ubuntu-18-04-pt)):
```bash
sudo mysql_secure_installation
```    
3. Após crie o banco `carros`:
```bash
create database carros;
```  
4. Depois de criar carregue o banco:
```bash
use carros;
```     
5. Abra o arquivo que está dentro da pasta ` dadosBancoCarros.txt` ou veja ele [Link_Banco_Carros](https://github.com/Josandonas/Cadastro-de-Carros/blob/master/dadosBancoCarros.txt).
6. Copie e Cole todo o conteúdo e execute, claro estando em uso o banco `carros`.


## Configuração

#### Windows

1. Copie e cole a pasta toda dentro do seguinte caminho: `C:\xampp\htdocs\`
2. Abra qualquer navegador e insira o link nele:
```bash
http://localhost/Carros/
```     
#### Ubuntu

1. Copie e cole a pasta toda para dentro do caminho: `/opt/lampp/htdocs/`
2. Não esqueça de antes inicializar o Xampp
```bash
sudo /opt/lampp/xampp start
```    
3. Caso não consiga copiar a pasta e colar dentro do htdocs use o seguintes comandos no terminal:
> ```bash
> cd ..
> ``` 
> Após isso você terá antecedido uma pasta estando aqui: `/opt/lampp/ ` logo em seguida execute:
> ```bash
> sudo su 
> ``` 
> Insira sua senha como super usuário e execute o comando que dará permissão para colar a pasta dentro do htdocs:
> ```bash
> chmod 777 htdocs/
> ``` 
4. Abra qualquer navegador e insira o link nele:
```bash
http://localhost/Carros/
```   

## O que foi utilizado no Layout

* O esqueleto da aplicação usa [Milligram](https://milligram.io/) (v1.3) minimalist CSS
* Bootstrap Versão 5.0 [Documentação_Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/)
* Bootstrap Icons Versão 1.4.0 [Documentação_BootstrapIcons](https://icons.getbootstrap.com)

## Autor

* **José Sandonas** - *Developer Full Stack* - [git Josandonas](https://github.com/Josandonas)

## LICENSE

[MIT](LICENSE)