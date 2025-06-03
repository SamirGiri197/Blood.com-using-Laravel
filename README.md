# Blood.com

**Blood.com** is a web-based platform developed using **Laravel** and **PHP** as a **final year undergraduate project**. The primary objective of this project is to **connect blood donors and recipients efficiently and securely**.

## 🔍 Overview

In emergency situations, timely access to blood donors can save lives. Blood.com is designed to bridge the gap between those who need blood and those willing to donate.

The website allows users to register as either:
- **Donors** – People who want to donate blood.
- **Recipients/Users** – People who are looking for donors.

## ✅ Key Features

- 🔐 **User Registration and Authentication**  
  Users can register as donors or recipients with email and phone number verification.

- 🩸 **Donor Information Listing**  
  With the donor's consent, their details (name, blood group, location, and contact info) are displayed publicly to help recipients reach out.

- 📬 **Messaging & Contact System**  
  Recipients can directly **message donors via the website** or **call them** using the provided contact info.

- 📢 **Urgent Blood Requests & Notifications**  
  When a user posts an **urgent blood requirement**, registered donors with **matching blood group and location** receive **instant notifications** via email or SMS (if enabled).

## 🛠️ Built With

- [Laravel](https://laravel.com/) – PHP web framework
- [PHP](https://www.php.net/) – Backend language
- [MySQL](https://www.mysql.com/) – Database
- HTML, CSS, JavaScript – Frontend technologies

## 🚀 Getting Started

To run this project locally:

1. Clone the repository:
   ```bash
      https://github.com/SamirGiri197/Blood.com-using-Laravel.git 

  
2.Install dependencies
composer install

3. Copy .env.example to .env and update database credentials:
   cp .env.example .env

4. Generate application key:
php artisan key:generate

5. Run migrations
php artisan migrate

6. Start the local development server:
   php artisan serve



