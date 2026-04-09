# DevTrack – Web Development Bug & Task Tracker

## Overview

DevTrack is a lightweight web application for tracking development tasks and bugs during a project.
It helps developers organize their work, manage task priorities, and track progress using a simple dashboard and task management system.

This application was developed as part of the Software Developer training program.

---

## Project Goal

The goal of this project is to build a web-based task management system that allows developers to:

* Register and manage development tasks
* Track bug reports and development progress
* Organize work using task status and priorities
* Visualize project progress through a dashboard

---

## Main Features

The DevTrack application currently includes the following functionality:

### Task Management

* Create new tasks
* Edit existing tasks
* Delete tasks

### Task Properties

Each task contains:

* Title
* Description
* Status (Open / In Progress / Done)
* Priority (Low / Medium / High)

### Dashboard

The dashboard provides a quick overview of:

* Total number of tasks
* Open tasks
* Tasks in progress
* Completed tasks

### Search System

Users can search for tasks using keywords to quickly find specific tasks.

### Kanban Board

Tasks are displayed in a simple Kanban-style board grouped by status:

* Open
* In Progress
* Done

### User Interface

* Responsive layout
* Built with Bootstrap 5
* Clean and simple design

---

## Technologies Used

This project was built using the following technologies:

* **PHP 8**
* **Laravel Framework**
* **MySQL Database**
* **Bootstrap 5**
* **HTML / CSS**
* **Git & GitHub**

---

## Project Structure

The application follows the **Laravel MVC architecture**.

```
app/
├── Models
├── Http/Controllers

resources/
├── views

routes/
├── web.php

database/
├── migrations
```

### MVC Explanation

**Models**
Handle the database structure and data logic.

**Controllers**
Process user requests and connect models with views.

**Views**
Blade templates used for displaying the user interface.

---

## Installation Instructions

Follow the steps below to run the project locally.

### 1. Clone the repository

```bash
git clone https://github.com/Emadabdi/devtrack.git
cd devtrack
```

### 2. Install dependencies

Install Laravel dependencies using Composer:

```bash
composer install
```

### 3. Configure environment file

Copy the example environment configuration:

```bash
cp .env.example .env
```

Edit the `.env` file and configure the database connection.

Example configuration:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=devtrack
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Run database migrations

Create the database tables:

```bash
php artisan migrate
```

### 6. Start the development server

Run the Laravel server:

```bash
php artisan serve
```

Open the application in your browser:

```
http://127.0.0.1:8000
```

---

## Example Workflow

1. Open the application
2. Create a new task
3. Assign priority and status
4. Track tasks via the task list or Kanban board
5. Monitor project progress via the dashboard

---

## Possible Future Improvements

Potential improvements for future versions include:

* User authentication and login system
* Drag & drop Kanban board
* Task comments and activity log
* Email notifications
* REST API integration
* Team collaboration features

---

## Development Process

The project was developed using a simplified Agile workflow:

* User stories defined during planning
* Implementation using Laravel MVC structure
* Version control using GitHub
* Iterative development and testing

---

## Author

Emad
Software Developer Student

This project was developed as part of a learning assignment during the Software Development program.
