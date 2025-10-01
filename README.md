# Login System (PHP + MySQL)

## Project overview

This is a small, self-contained login system built with plain PHP and MySQL. It provides user signup, login and logout flows using PHP sessions. The project shows basic server-side validation, password hashing, and simple navigation that adapts when a user is logged in.

Typical pages included:

- `index.php` — landing / home page
- `signup.php` — create a new account
- `login.php` — authenticate
- `includes/` — PHP helpers and DB config

## Requirements

- XAMPP (Apache + MySQL) or any PHP + MySQL stack
- PHP 7.2+ (or later) recommended
- A browser (Chrome/Edge/Firefox)

## Setup & run (Windows / XAMPP)

1. Copy the project folder into your XAMPP `htdocs` directory, e.g.:

   C:\xampp\htdocs\login_system

2. Start Apache and MySQL from the XAMPP Control Panel.

3. Create the database and `users` table. You can use phpMyAdmin or the MySQL CLI. Example SQL to create the expected table:

```sql
CREATE DATABASE IF NOT EXISTS `loginsystem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `loginsystem`;

CREATE TABLE IF NOT EXISTS `users` (
  `usersId` INT NOT NULL AUTO_INCREMENT,
  `usersName` VARCHAR(100) NOT NULL,
  `usersEmail` VARCHAR(255) NOT NULL,
  `usersUid` VARCHAR(50) NOT NULL,
  `usersPwd` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`usersId`),
  UNIQUE KEY `usersUid` (`usersUid`),
  UNIQUE KEY `usersEmail` (`usersEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

4. Confirm database credentials in `includes/config.php`. By default the project expects:

```php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";
```

If your MySQL user or password differs, update `includes/config.php` accordingly.

5. Open the app in your browser:

```
http://localhost/login_system/
```

6. Register a new account via `signup.php`, then log in via `login.php`.

## Screenshots

Add screenshots to an `images/` folder in the project root and reference them in this file. Example markdown:

```md
![Home page](images/home.png)
![Login form](images/login.png)
```

Suggested screenshots to capture: Home, Signup form, Login form, Profile/welcome page.

## Troubleshooting

- If you see "Connection failed" errors, check `includes/config.php` and ensure MySQL is running.
- If pages are blank, enable PHP error reporting temporarily (only for development):

```php
ini_set('display_errors', 1);
error_reporting(E_ALL);
```

- If sessions aren't persisting, ensure `session_start()` is being called before any output (the project calls it in `header.php`).

## Optional: tutorial link

If you followed an external tutorial when building this project, add the link here:

[Add tutorial link here]

---

If you want, I can also add a minimal `TASKS.md` listing the six small tasks we discussed. Tell me if you want that created now.
