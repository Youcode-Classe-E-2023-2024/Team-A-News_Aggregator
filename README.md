
## News Aggregator

News Aggregator is a web application developed using Laravel that aggregates news from various sources and provides users with a personalized news reading experience.

### Table of Contents
- Project Architecture
- Setup Instructions
- Usage Guide
- Codebase Documentation


### Project Architecture
The project follows the standard Laravel architecture, with the following key components:
- Controllers: Responsible for handling incoming requests and returning responses.
- Models: Represent database tables and interact with the database.
- Views: Contain the HTML templates that are rendered and returned to the user.
- Routes: Define the URLs and corresponding controller methods for handling requests.
- Middleware: Handle incoming requests before they reach the controller, such as authentication and authorization.
- Services: Contains business logic that is not specific to any particular controller.

## Setup Instructions

1. Clone the repository:
   ```bash
    https://github.com/Youcode-Classe-E-2023-2024/Team-A-News_Aggregator.git

2. Navigate to the project directory:
   ```bash
     cd Aggregator_App

3. Install dependencies::
   ```bash
    composer install

4. Copy the .env.example file to .env and configure your environment:
   ```bash
    cp .env.example .env

5. Generate an application key:
   ```bash
    php artisan key:generate
   
6. Create a database and update the .env file with your database credentials.

7. Run the database migrations and seed the database:
    ```bash
    php artisan migrate --seed

8. Start the Laravel development server:
    ```bash
    php artisan serve

9. Access the application in your browser at http://localhost:8000.

# Usage Guide


- Register or login: Users can register for a new account or log in with an existing account.
- Add news sources: Admin can add news sources by providing the RSS feed URL.
- View news: Users can view the latest news.
- Filter news by category: Users can filter news articles by category to find articles of interest.
- Save favorite articles: Users can save their favorite articles to read later.
- Comment on articles: Users can comment on articles to share their thoughts with others.

