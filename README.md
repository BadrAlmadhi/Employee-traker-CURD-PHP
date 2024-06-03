# PHP CRUD Project

## Description

This PHP CRUD (Create, Reade, Update, Delete) project is a simple web application that demonstrates basic CRUD operation using PHP and MySQL. This application is designed to learn and apply what I have learned in PHP, this application helped me understand how to perform these operations in wen development environment. 

## Table of Contents (Optional)

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Credits](#credits)
- [License](#license)

## Features

* Create new User
* Read and display existing records
* Update existing records
* Delete records
* User-friendly interface

## Installation

Before we begin, ensure you have the following installed on your system:

* [XAMPP](https://www.apachefriends.org/) (Includes Apache, MySQL, PHP, and Perl).
* Visual Studio Code (VS Code)

### Setup 

1. Download XAMPP: Go to the [XAMPP website](https://www.apachefriends.org/) and install latest version suitable for your operations system. 

2. Download VS Code: Install Visual Code from [official website](https://code.visualstudio.com/download).

3. Clone the Repository: 
```https://github.com/BadrAlmadhi/Employee-traker-CURD-PHP.git``` 

4. Move project to XAMPP directory: Copy the cloned repository to ```htdocs``` directory of your XAMPP installation (usually located in `c:\xampp\htdocs`)

5. Start XAMPP: Open XAMPP control panel and start Apache and Mysql modules. 

6. Create Databases: open browser and go `http://localhost/phpmyadmin`. Then, create database name `crud_db` and import the provided SQL files.

7. Configure Database Connection: to connect data create config.php file to match your database configuration:

``` 
<?php>
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";
?>
```

## Usage

1. Access the application: Open browser and navigate to `http://localhost/index.php`.

2. Preform CRUD operation: Use the provided interface to create, read, update, and delete users in the databases. 

