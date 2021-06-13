# CakePHP Application Skeleton

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

O esqueleto da aplicação foi criado com [CakePHP](https://cakephp.org) 4.x.

## Installation

1. Faça o Download do [Composer](https://getcomposer.org/doc/00-intro.md) ou atualize ele `composer self-update`.
2. Baixe o Xampp 7.3.28 [Xamp](https://www.apachefriends.org/pt_br/download.html).
3. Caso seu sistema seja Linux dê este comando adicional:
   
```bash
sudo apt-get install php7.4-intl
```


Then visit `http://localhost:8765` to see the welcome page.

## Configuration

Read and edit the environment specific `config/app_local.php` and setup the 
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

## Layout

The app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default. You can, however, replace it with any other library or
custom styles.
