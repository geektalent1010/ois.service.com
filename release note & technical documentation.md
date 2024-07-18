# OIS Website Technical Documentation

## User Guide

### Introduction

#### Overview of Application

The OIS web application is designed to streamline and enhance user interactions by providing a robust platform for managing personal profiles, customizing dashboards, and receiving notifications. Key features include:

-   User-friendly interface for profile management.
-   Customizable dashboard with various widgets.

This project is built using Laravel for the backend, MySQL for the database, SCSS for styling, and is hosted on Digital Ocean.

User roles and permissions are categorized as follows:

-   SuperAdmin: Has full access to all features and settings.
-   Admin: Has access to features and settings assigned by the SuperAdmin.
-   User: Has access to their personal dashboard and profile management only.

### Getting Started

#### Account Creation and Login

1. **Create an Account**:
    - Click on the "Sign Up" button on the homepage.
    - Fill in the required information (name, email, password).
    - Verify your email address through the link sent to your inbox.
2. **Log In**:
    - Enter your email and password on the login page.
    - Click "Log In" to access your dashboard.

#### Navigating the Dashboard

-   The dashboard is the main hub where you can manage your profile, customize widgets.
-   Use the sidebar menu to switch between different sections such as Profile, Dashboard Settings.

### Features

#### Profile Management

-   **Update Personal Information**:
    -   Go to the Profile section.
    -   Edit fields such as name, email, and contact details.
    -   Click "Save" to update your information.
-   **Change Password**:
    -   Navigate to Security Settings in your profile.
    -   Enter your current password and the new password.
    -   Confirm the new password and click "Change Password".

#### Dashboard Customization

-   **Customizing Layout and Widgets**:
    -   Go to Dashboard Settings.
    -   Drag and drop widgets to rearrange them.
    -   Add new widgets by clicking "Add Widget" and selecting from the list.
-   **Setting Preferences**:
    -   Adjust settings for each widget (e.g., data sources, display options).
    -   Save configurations by clicking "Save Preferences".

#### Notifications

-   **Managing Notification Settings**:
    -   Access Notification Settings from the sidebar.
    -   Choose which types of notifications to receive (e.g., email, SMS, push notifications).
-   **Viewing and Interacting with Notifications**:
    -   Notifications are displayed in the Notification Center.
    -   Click on a notification to view details or mark it as read.

### Troubleshooting

#### Common Issues

-   **Login Issues**:
    -   Ensure your email and password are correct.
    -   If you forgot your password, click "Forgot Password" to reset it.
-   **Profile Updates**:
    -   Check if all required fields are filled in correctly.

#### Contact Support

-   **For Unresolved Issues**:
    -   Visit the Support page.
    -   Fill out the contact form with your issue details.
    -   Submit the form and our support team will get back to you.

### FAQ

-   **How do I change my email address?**
    -   Navigate to Profile > Email Settings and follow the instructions.
-   **Can I customize the notification sound?**
    -   Yes, go to Notification Settings and select your preferred sound.

## API Documentation

### Overview

#### API Introduction

Our API allows developers to interact with the OIS application programmatically. Use cases include automating tasks, integrating with other services, and extending application functionality.

### Authentication

-   **Obtain API Keys**:
    -   Log in to your account.
    -   Go to API Settings and click "Generate API Key".
-   **Authenticate Requests**:
    -   Include the API key in the Authorization header as a Bearer token.

### Endpoints

#### User Endpoints

-   **Registration**:
    -   `POST /api/users/register`
    -   Request:
    ```json
    {
        "name": "John Doe",
        "email": "john.doe@example.com",
        "password": "securepassword"
    }
    ```
    -   Response (Success):
    ```json
    {
        "message": "User registered successfully"
    }
    ```
-   **Login**:
    -   `POST /api/users/login`
    -   Request:
    ```json
    {
        "email": "john.doe@example.com",
        "password": "securepassword"
    }
    ```
    -   Response (Success):
    ```json
    {
        "token": "jwt-token"
    }
    ```

#### Data Endpoints

-   **Create Data**:
    -   `POST /api/data`
    -   Request:
    ```json
    {
        "title": "New Data",
        "description": "Description of the data"
    }
    ```
    -   Response (Success):
    ```json
    {
        "id": 1,
        "title": "New Data",
        "description": "Description of the data"
    }
    ```
-   **Read Data**:
    -   `GET /api/data/{id}`
    -   Response (Success):
    ```json
    {
        "id": 1,
        "title": "New Data",
        "description": "Description of the data"
    }
    ```
-   **Update Data**:
    -   `PUT /api/data/{id}`
    -   Request:
    ```json
    {
        "title": "Updated Data",
        "description": "Updated description"
    }
    ```
    -   Response (Success):
    ```json
    {
        "id": 1,
        "title": "Updated Data",
        "description": "Updated description"
    }
    ```
-   **Delete Data**:
    -   `DELETE /api/data/{id}`
    -   Response (Success):
    ```json
    {
        "message": "Data deleted successfully"
    }
    ```

### Error Handling

#### Error Codes

-   **400 Bad Request**: Invalid request parameters.
-   **401 Unauthorized**: Missing or invalid authentication token.
-   **404 Not Found**: Resource not found.
-   **500 Internal Server Error**: Unexpected server error.

#### Debugging

-   **Tools**: Use tools

## Developer Guide

### Environment Setup

#### System Requirements

-   **Hardware**: Minimum 4GB RAM, 2 GHz CPU.
-   **Software**:
    -   OS: Windows 10, macOS, or Linux.
    -   Laravel: v8.x or higher.
    -   MySQL: v5.7 or higher.
    -   SCSS: Latest version.
    -   Docker: Latest version.
    -   Digital Ocean: Account setup for deployment.

#### Installation

1. **Clone the Repository**:
    ```sh
    git clone https://github.com/your-repo/ois-webapp.git
    cd ois-webapp
    ```
2. **Install Dependencies**:
    ```sh
    composer install
    npm install
    ```
3. **Setup Database**:

    - Start MySQL and create a new database.
    - Configure the database connection in the `.env` file.
    - Run migrations:

    ```sh
    php artisan migrate
    ```

4. **Run Docker Containers**:
    ```sh
    docker-compose up
    ```

### Project Structure

#### Codebase Overview

-   **Frontend**:
    -   `resources/js`: JavaScript files, Vue.js components.
    -   `resources/sass`: SCSS files for styling.
    -   `public`: Static files.
-   **Backend**:
    -   `app`: Laravel application source code.
    -   `routes`: API route definitions.
-   **Config**:
    -   `config`: Configuration files for different environments.

### Frontend

#### Framework

-   **Vue.js**: The frontend is built using Vue.js.
-   **Building and Running**:
    ```sh
    npm run dev
    ```

### Backend

#### Architecture

-   **Laravel**: The backend is built with Laravel.
-   **Running Locally**:
    ```sh
    php artisan serve
    ```

### Development Workflow

#### Version Control
