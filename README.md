# News Aggregator

News Aggregator is a web application developed using Laravel that aggregates news from various sources and provides users with a personalized news reading experience.

## Table of Contents
- [Project Architecture](#project-architecture)
- [Setup Instructions](#setup-instructions)
- [Usage Guide](#usage-guide)
- [Codebase Documentation](#codebase-documentation)

## Project Architecture

The project follows the standard Laravel architecture, with the following key components:
- **Controllers:** Responsible for handling incoming requests and returning responses.
- **Models:** Represent database tables and interact with the database.
- **Views:** Contain the HTML templates that are rendered and returned to the user.
- **Routes:** Define the URLs and corresponding controller methods for handling requests.
- **Middleware:** Handle incoming requests before they reach the controller, such as authentication and authorization.
- **Services:** Contains business logic that is not specific to any particular controller.

## Setup Instructions

1. **Clone the repository:**
    ```bash
    git clone https://github.com/Youcode-Classe-E-2023-2024/Team-A-News_Aggregator.git
    ```

2. **Update dependencies:**
    ```bash
    composer update
    ```

3. **Install dependencies:**
    ```bash
    composer install
    ```

4. **Copy the .env.example file to .env and configure your environment:**
    ```bash
    cp .env.example .env
    ```

5. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

6. **Create a database and update the .env file with your database credentials.**
    - *Follow the instructions in the [Database Setup](#create-a-database-and-update-the-env-file) section.*

7. **Run the database migrations and seed the database:**
    ```bash
    php artisan migrate --seed
    ```

8. **Start the Laravel development server:**
    ```bash
    php artisan serve
    ```

9. **Access the application in your browser at [http://localhost:8000](http://localhost:8000).**

## Create a Database and Update the .env File

This step involves creating a PostgreSQL database and configuring your project to connect to it.

### 1. Create a PostgreSQL database:

- **Using pgAdmin:**
    1. Right-click on "Servers" in the left panel and select "Create Server...".
    2. Choose your preferred connection method and follow the prompts.
    3. Once connected, right-click on "Databases" and select "Create...".
    4. Provide a descriptive name for your database (e.g., "team_a_news_aggregator").

- **Using the command line:**
    Open a terminal window and run the following command, replacing `<database_name>` with your desired name:
    ```bash
    createdb <database_name>
    ```
    Use code with caution.

### 2. Update the .env file:

1. Copy the `.env.example` file to a new file named `.env`.
2. Edit the `.env` file and replace the placeholder values like `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` with your actual database information.
3. Ensure the database-related variables are specifically configured for PostgreSQL:
    ```env
    DB_CONNECTION=pgsql
    DB_HOST=localhost
    DB_PORT=5432  # Default PostgreSQL port
    DB_DATABASE=<your_database_name>
    DB_USERNAME=<your_username>
    DB_PASSWORD=<your_password>
    ```
**Important:** Never commit the `.env` file to version control (e.g., Git) as it contains sensitive information.

# Usage Guide


- Register or login: Users can register for a new account or log in with an existing account.
- Add news sources: Admin can add news sources by providing the RSS feed URL.
- View news: Users can view the latest news.
- Filter news by category: Users can filter news articles by category to find articles of interest.
- Save favorite articles: Users can save their favorite articles to read later.
- Comment on articles: Users can comment on articles to share their thoughts with others.

