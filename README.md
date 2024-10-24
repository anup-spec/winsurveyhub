#Installation Instructions
##Driver and PHP Library setup
1. Install WAMP, MongoDB, Composer
2. Setup MongoDB
"C:\Program Files\MongoDB\Server\8.0\bin\mongod.exe" --dbpath "C:\wamp64\www\WINSurveyHub\data\db"
3. Install MongoDB PHP Driver and DLL
- go to https://pecl.php.net/package/mongodb/1.10.0/windows
- Copy the php_mongodb.dll file to C:\wamp64\bin\php\php8.0.26\ext
4. Enable the Extension
- Open "C:\wamp64\bin\apache\apache2.4.54.2\bin"
- Add extension=mongodb
- Save PHP.ini file
5. Restart WAMP
6. Create composer.json and generate autoload file to your working site
- Run composer require "mongodb/mongodb=^1.0.0" via. Prompt or gitbash.