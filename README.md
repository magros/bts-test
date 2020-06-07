# Demo
https://salty-ridge-92852.herokuapp.com/ 
Heroku database takes a few time to load, be patient

# How to install
1. Clone repository `git clone https://github.com/magros/bts-test.git`
2. Enter into directory `cd bts-test`
3. Install dependencies `composer install`
4. Create your own database with your mysql cli `create database bts;`
5. Execute mysql script to seeding schema `mysql -u youruser -pyourpassword -h localhost -Dbts < schema.sql`
6. Copy environment configuration file `cp .env.example .env` and then replace .env variables with your database settings
7. Start a server `php -S localhost:8000`
8. Now the application is running, open your browser in the url http://localhost:8000

# Run tests
After your had clone repository and install dependencies, execute `vendor/bin/phpunit`

# Improvements
1. Add form validations when an invoice is created
2. Add endpoints to edit and delete invoices
3. Add compatibility for DELETE and PATCH methods in Request.php
4. Add a way to extract variables from url path by example: api/invoices/:invoiceId should be able to inject invoiceId into closure function
5. Extract some vuejs components to avoid code duplicity
