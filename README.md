# **Palulmni**


## **Prerequisites**
Make sure you have the following installed on your system:

PHP: Version 8 or higher
MySQL: For the database
Composer: For managing PHP dependencies
A web server like Apache or Nginx (or a development environment like XAMPP, WAMP, or MAMP)

## **Seput**

---

### 1. Clone the Repository
Clone the project repository to your local machine:
```bash
git clone https://github.com/gimmevsc/palumni_public
cd <project_name>
```

### 2. Install PHP Dependencies
Use Composer to install required dependencies:

```bash
composer install
```
### 3. Set Up Environment Variables
Create a .env file in the project root by copying .env.example:

```bash
cp .env.example .env
```
Open the .env file and fill in the required values


### 4. Import the Database
Open your MySQL and import palumni.sql (e.g., phpMyAdmin, MySQL Workbench, or command-line)

### 5. Run the Project
Start the web server and MySQL services.
Open the browser and navigate to the project URL.
