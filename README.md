# Housing MIS Laravel Project
GIS-Enabled Housing Management Information System.

to connect with backend (mysql database) :
git clone https://github.com/YOUR_USERNAME/YOUR_REPO.git then,
cd YOUR_REPO

in terminal: 
composer install

npm install
npm run build

cp .env.example .env

# After copying .env, open the .env file manually and update your database details:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=your_database_name
# DB_USERNAME=your_database_username
# DB_PASSWORD=your_database_password

php artisan key:generate

php artisan migrate

php artisan serve

# After running the server, open http://127.0.0.1:8000 in your browser to view the project.
