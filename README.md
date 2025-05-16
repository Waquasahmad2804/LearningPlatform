# Learning Platform Project

## Project Setup

### Prerequisites

* PHP (version 8.0 or higher)
* Composer
* Laravel
* MySQL or any other supported database

### Installation Steps

1. Clone the Repository

   ```bash
   git clone https://github.com/Waquasahmad2804/LearningPlatform.git
   cd LearningPlatform
   ```

2. Install Dependencies

   ```bash
   composer install
   npm install && npm run dev
   ```

3. Copy Environment File

   ```bash
   cp .env.example .env
   ```

4. Generate Application Key

   ```bash
   php artisan key:generate
   ```

5. Configure Database

   * Open `.env` file and set your database credentials:

     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_username
     DB_PASSWORD=your_database_password
     ```

6. Run Database Migrations

   ```bash
   php artisan migrate
   ```

7. Seed Database

   ```bash
   php artisan db:seed
   ```

### Login Credentials

* The login credentials are provided in the database seeder file.

### Running the Project

```bash
php artisan serve
```

### Accessing the Application

* Open your web browser and visit: `http://localhost:8000`
