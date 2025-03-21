# Key4Games API

<br>

## Installation & Setup
1. Clone the repository:
   ```sh
   git clone <repository_url>
   cd <project_directory>
   ```

2. Install dependencies:
   ```sh
   composer install
   ```

3. Configure the environment:
   - Copy `.env.example` to `.env`:
     ```sh
     cp .env.example .env
     ```
   - Update database credentials in `.env`.

4. Run database migrations and seeders:
   ```sh
   php artisan migrate:fresh --seed
   ```

5. Start the development server:
   ```sh
   php artisan serve
   ```

<br>

## API Endpoints

### Games
- **GET /games** - Retrieve all games.

- **POST /games** - Create a new game.
  - **Request Body:**
    ```json
    {
      "title": "string",
      "description": "string",
      "genre_id": [integer]
    }
    ```
  - **Response:**
    ```json
    {
      "id": 1,
      "title": "Game Title",
      "description": "Game Description",
      "genres": [
        {
          "id": 1,
          "name": "Genre Name"
        }
      ]
    }
    ```

- **GET /games/{id}** - Retrieve a single game by ID.

- **PUT /games/{id}** - Update a game.
  - **Request Body:**
    ```json
    {
      "title": "string",
      "description": "string",
      "genre_id": [integer]
    }
    ```

- **DELETE /games/{id}** - Delete a game.

<br>

### Genres
- **GET /genres** - Retrieve all genres.

- **POST /genres** - Create a new genre.
  - **Request Body:**
    ```json
    {
      "name": "string"
    }
    ```
  - **Response:**
    ```json
    {
      "id": 1,
      "name": "Genre Name"
    }
    ```

- **GET /genres/{id}** - Retrieve a single genre by ID.

- **PUT /genres/{id}** - Update a genre.
  - **Request Body:**
    ```json
    {
      "name": "string"
    }
    ```

- **DELETE /genres/{id}** - Delete a genre.

<br>

## Database Configuration
Ensure the `.env` file contains the correct database details:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```