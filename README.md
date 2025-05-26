<p align="center">
    <img src="https://static.codetiv.cz/github-logo.png" width="300" alt="Logo" />
</p>

## Web template

This is a base Laravel based website template

## Installation using create-project

```
composer create-project codetiv/web-starter <folder_name>
```

## Installation using git clone

### 1. clone the repository
```
git clone <repository_url> <folder_name>
```

### 2. install dependencies
```
composer install
```

### 3. copy the environment file
(you can also do this manually)
```
cp .env.example .env
```

### 4. generate key for application
```
php artisan key:generate
```

### 5. migrate database 
(it can also create new database)
```
php artisan migrate
```

### 6. install front end dependencies
```
npm install
```