set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down --message 'Aplikasi ini akan segera diperbarui. Silahkan coba lagi dalam beberapa menit') || true
    # update codebase
    git pull origin master
# exit maintenance mode
php artisan up

echo 'Application deployed!'
