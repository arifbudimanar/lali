# Lali - Laravel Livewire Starter Project

![Laravel](https://img.shields.io/badge/Laravel-10-f4645f.svg?style=for-the-badge&logo=laravel&logoColor=red&labelColor=ffff&color=FF2D20)
![PHP Version Require](https://poser.pugx.org/arifbudimanar/lali/require/php?style=for-the-badge)
![License](https://poser.pugx.org/arifbudimanar/lali/license?style=for-the-badge)
![Latest Stable Version](https://poser.pugx.org/arifbudimanar/lali/v?style=for-the-badge)
![Total Downloads](https://poser.pugx.org/arifbudimanar/lali/downloads?style=for-the-badge)

![Banner](public/lali.png)

Lali - Laravel Livewire Starter Project is The skeleton application for the Laravel starter project with TALL Stack.

-   [TailwindCSS](https://tailwindcss.com/)
-   [AlpineJS](https://alpinejs.dev/)
-   [Laravel](https://laravel.com/)
-   [Livewire](https://livewire.laravel.com/)

Build with Livewire full page component and SPA (Single Page Application) with wire:navigate. It provides a feature-rich boilerplate to kickstart your project and accelerate your development process. Ready to go create your awesome project.

## Table of Contents

-   [Demo](#demo)
-   [System Requirements](#system-requirements)
-   [Built in Packages](#built-in-packages)
-   [Tailwind Plugin](#tailwind-plugin)
-   [Features](#features)
-   [Installation](#installation)
-   [Contributing](#contributing)
-   [License](#license)

## Demo

-   [Lali](http://68.183.184.25/)
-   [Lali Pro](http://143.198.206.231/)

User : user.example@mail.com - password

Admin : admin.example@mail.com - password

I personally recommended to register your own email to try the email verification system.

## System Requirements

-   PHP 8.2
-   Composer
-   NodeJS & NPM
-   MySQL

## Built in Packages

-   [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
-   [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
-   [Pest](https://pestphp.com/)
-   [Laravel Lang](https://github.com/Laravel-Lang/lang)
-   [Livewire Toaster](https://github.com/masmerise/livewire-toaster)
-   [Laravel Socialite](https://laravel.com/docs/10.x/socialite) (Pro)
-   [Spatie Permission](https://spatie.be/docs/laravel-permission/) (Pro)
-   [Browser Sessions](https://github.com/cjmellor/browser-sessions) (Pro)

## Tailwind Plugin

-   [Forms](https://github.com/tailwindlabs/tailwindcss-forms)
-   [Typography](https://tailwindcss.com/docs/typography-plugin)

## Features

LaLi comes packed with essential features and a well-structured codebase to get you started quickly:

-   Auth Layout
    -   [x] Register
        -   [x] OAuth (Github, Gmail) (Pro)
    -   [x] Login
        -   [x] OAuth (Github, Gmail) (Pro)
    -   [x] Logout
    -   [x] Verify Email
    -   [x] Password
        -   [x] Confirm Password
        -   [x] Request Password Reset
        -   [x] Reset Pasword
        -   [x] Create Pasword (Pro)
    -   [x] Terms of Service
    -   [x] Privacy Policy
-   Main Layout
    -   [x] Home
    -   [x] Example
-   App Layout
    -   [x] User Dashboard
    -   [x] Profile
        -   [x] Profile Information
        -   [x] Linked Account (Pro)
        -   [x] Roles and Permissions (Pro)
        -   [x] Update Password
        -   [x] Browser Sessions (Pro)
        -   [x] Delete Account
    -   [x] Settings
        -   [x] Language
        -   [x] Terms of Service and Privacy Policy
    -   [x] Example
-   Admin Layout
    -   [x] Admin Dashboard
        -   [x] User Statistic
            -   [x] Total Users
            -   [x] Admin Role Users (Pro)
            -   [x] Registered User This Month
            -   [x] Verified Email User
            -   [x] Unverified Email User
        -   [x] Latest Created User
        -   [x] Latest Updated User
    -   [x] User
        -   [x] Create
        -   [x] Index
            -   [x] Delete
            -   [x] Search
            -   [x] Sort By
            -   [x] Sort Direction
            -   [x] Per Page
            -   Filter
                -   [x] Email Status (Pro)
                -   [x] Role (Pro)
            -   Select
                -   [x] Select (Pro)
                -   [x] Deselect (Pro)
                -   [x] Select Page (Pro)
                -   [x] Deselect Page (Pro)
                -   [x] Select All (Pro)
                -   [x] Deselect All (Pro)
            -   Bulk Actions
                -   [x] Delete (Pro)
                -   [x] Assign Role (Pro)
                -   [x] Remove Role (Pro)
        -   [x] Show
        -   [x] Edit
            -   [x] User Information
            -   [x] User Roles (Pro)
            -   [x] User Permissions (Pro)
    -   [x] Roles (Pro)
        -   [x] Create (Pro)
        -   [x] Index (Pro)
            -   [x] Delete (Pro)
            -   [x] Search (Pro)
            -   [x] Sort By (Pro)
            -   [x] Sort Direction (Pro)
            -   [x] Per Page (Pro)
        -   [x] Show (Pro)
        -   [x] Edit (Pro)
    -   [x] Permissions (Pro)
        -   [x] Create (Pro)
        -   [x] Index (Pro)
            -   [x] Delete (Pro)
            -   [x] Search (Pro)
            -   [x] Sort By (Pro)
            -   [x] Sort Direction (Pro)
            -   [x] Per Page (Pro)
        -   [x] Show (Pro)
        -   [x] Edit (Pro)
    -   [x] Example
-   Custom Error Page
    -   [x] 401
    -   [x] 402
    -   [x] 403
    -   [x] 404
    -   [x] 419
    -   [x] 429
    -   [x] 500
    -   [x] 503
-   Tested with Pest
    -   [x] Feature Test
-   Livewire
    -   SPA (Single Page Application) with wire:navigate
    -   Full Page Livewire Component
    -   Toaster Notification
    -   4 Layouts
        -   [x] Auth Layout
        -   [x] Main Layout
        -   [x] App Layout (default)
        -   [x] Admin Layout
-   Theme Auto by System Preferences with TailwindCSS
    -   [x] Dark Mode
    -   [x] Light Mode
-   Languages
    -   [x] English (default)
    -   [x] Indonesian
    -   [x] Turkey (Pro)

## Installation

### Via Composer

1. Create a new project
    ```
    composer create-project arifbudimanar/lali
    ```
2. Run NPM Install
    ```
    npm install
    ```
3. Ready to use
    ```
    php artisan serve
    ```

### Via Git Clone

1. Clone this repository
    ```
    git clone https://github.com/arifbudimanar/lali.git
    ```
2. Run Composer Install
    ```
    composer install
    ```
3. Run NPM Install
    ```
    npm install
    ```
4. Copy .env.example to .env
    ```
    cp .env.example .env
    ```
5. Run NPM Dev
    ```
    npm run dev
    ```
6. Run Migration and Seeding
    ```
    php artisan migrate
    php artisan db:seed
    php artisan db:seed Usereeder
    ```
7. Run the server (Optional)
    ```
    php artisan serve
    ```
8. Open the browser and go to http://localhost:8000 or http://lali.test

## Email Verification

Use email testing like [Mailpit](https://github.com/axllent/mailpit) (local), [Mailtrap](https://mailtrap.io/) (online), etc for testing local user email verification.

## Contributing

1. [Fork](https://help.github.com/articles/fork-a-repo/) the [arifbudimanar/lali](https://github.com/arifbudimanar/lali) repository
2. Clone repository: `git clone https://github.com/[your_github_username]/lali.git`
3. Create your feature branch: `git checkout -b my-new-feature`
4. Commit your changes: `git commit -m 'Add some feature' -s`
5. Push feature branch: `git push origin my-new-feature`
6. Submit a pull request

## Sponsors

Thank you to my sponsors! It helps me to keep working on this project and help the demo server spinning.

1. [juhniorsantos](https://github.com/juhniorsantos) - $10

Sponsor me and your name will be on the list also get access to private repo Lali Pro.

[Github Sponsor](https://github.com/sponsors/arifbudimanar)

[Paypal](https://www.paypal.com/paypalme/arifbudimanar)

## License

LaLi is open-source software licensed under the [MIT License](https://github.com/arifbudimanar/lali/blob/main/LICENSE). Feel free to use it in your projects, and we appreciate any contributions or feedback you might have.
