# FLAGMS

FLAGMS (Fiat Lux Academe Guidance Management System) is a comprehensive web-based platform designed to automate and streamline the operations of a school guidance office. This project was developed as a capstone project; it remains unfinished and was never officially implemented or used by the client. 🚀🏫

## Features

- ✓ **Role-Based Access**: Specialized interfaces and permissions for Administrators, Guidance Counselors, Teachers, Parents, and Students.
- ✓ **Student Records**: Digital management of student anecdotal records, individual inventories, and behavioral histories.
- ✓ **Administrative Tools**: Automated approval workflows for forms, offense tracking, and lost-and-found management.
- ✓ **Record Management**: Secure handling of both physical and digital records with detailed audit trails.
- ✓ **Guidance Program**: Scheduling and management of guidance services, program tags, and notifications.
- ✓ **Real-time Notifications**: Instant alerts for system updates and form approvals via Pusher integration.

## Tech Stack

- PHP (Laravel 10)
- Livewire 3
- MySQL Database
- Bootstrap 5
- Alpine.js
- Pusher (Notifications)

## Project Structure

```text
FLAGMS_Laravel-Livewire/
├── app/
│   ├── Http/          # Middleware and Controller logic
│   ├── Livewire/      # Core Livewire components for reactive UI
│   └── Models/        # Eloquent models and database relations
├── config/            # System configuration files
├── database/          # Migrations, seeders, and factories
├── public/            # Compiled assets and entry point
├── resources/
│   ├── css/           # Source styling files
│   └── views/         # Blade and Livewire view templates
└── routes/            # Web and system maintenance routes
```

The project follows the standard Laravel directory structure, leveraging Livewire for a modern, reactive user experience without complex JavaScript frameworks.

## Usage

1. **Authentication**: Use the login portal to access your role-specific dashboard (Admin, Guidance, Student, Parent, or Teacher).
2. **Student Profiling**: Use the Students module to update inventory records, log anecdotal entries, and track behavioral history.
3. **Form Submissions**: Students and Teachers can fill out and submit digital forms for guidance assistance or specific requests through the 'Fill Out Forms' section.
4. **Monitoring**: Administrators can use the Audit Trail to monitor all system activities, manage user accounts, and oversee database backups.

## How to Install

1. Clone the repository to your local environment.
2. Run `composer install` to install all PHP dependencies.
3. Run `npm install` and `npm run dev` to compile the front-end assets.
4. Create a `.env` file from `.env.example` and set up your database credentials.
5. Run `php artisan key:generate` to generate the application security key.
6. Run `php artisan migrate --seed` to initialize the database and create default users and roles.
7. Run `php artisan serve` to launch the application on `http://localhost:8000`.

## Development Team

- **Project Manager**: Justine Mae B. Juanima
- **Lead Developer / Back-end Developer**: Kimwel Lourence C. Beller
- **Front-end Developer**: Allysah Valerie C. Dela Cruz
- **UI/UX Designer**: Anne Louise D. Lopez
