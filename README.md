# Josias Barbearia - Backend API

## Conteúdo

- [Informações](#informações)
- [Instalação](#passo-a-passo-para-instalação)

### Informações

- PHP 7.2.24
- MySQL 5.7.30
- Laravel Framework 7.16.1

### Passo a passo para instalação

Clonar o repositório
```
git clone https://github.com/natanaelphp/josias-barbearia-backend.git
cd josias-barbearia-backend
```

Rodar composer
```
composer install
```

Criar arquivo .env copiando do .env.example
```
cp .env.example .env
```

Preencher o JWT_SECRET no arquivo .env
```
php artisan jwt:secret
```

Gerar chave da aplicação
```
php artisan key:generate
```

Criar o banco de dados e atualizar o arquivo .env
Exemplo:
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=josias-barbearia
DB_USERNAME=root
DB_PASSWORD=root
```

Rodar migrations e seeds
```
php artisan migrate:fresh --seed
```

Rodar o servidor de desenvolvimento
```
php artisan serve --port=8081
```

Ao acessar http://localhost:8081/ deverá exibir a tela de welcome padrão do laravel.


### Agora vamos para o front-end
https://github.com/natanaelphp/josias-barbearia-frontend/blob/master/README.md