# Portfolio 2024 - George Gavasheli

A modern, interactive personal portfolio website showcasing design, frontend, and backend development expertise. Built with Laravel 11, Vue 3, and Inertia.js for a seamless single-page application experience.

## 🚀 Features

- **Single Page Application** - Smooth navigation with Inertia.js
- **Interactive UI** - Custom animations and perspective effects
- **Responsive Design** - Optimized for all devices
- **Modern Stack** - Laravel 11 + Vue 3 + Vite
- **Portfolio Sections**:
  - Home/Introduction
  - Designer Expertise
  - Frontend Development Skills
  - Backend Development Skills
  - Works/Projects Gallery
  - Contact Form
  - About Section

## 🛠️ Tech Stack

### Backend
- **Laravel 11** - PHP Framework
- **PHP 8.2+** - Server-side language
- **Inertia.js** - Server-side routing with SPA experience
- **SQLite** - Database (default)

### Frontend
- **Vue 3** - Progressive JavaScript framework
- **Vite** - Fast build tool and dev server
- **SASS** - CSS preprocessor
- **Axios** - HTTP client
- **jQuery** - DOM manipulation (legacy scripts)

### Development Tools
- **Laravel Pint** - Code style fixer
- **PHPUnit** - Testing framework
- **Laravel Sail** - Docker development environment (optional)

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18.x
- NPM or Yarn
- SQLite (or MySQL/PostgreSQL if preferred)

## 🔧 Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd Portfolio-2024
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies

```bash
npm install
# or
yarn install
```

### 4. Environment Configuration

Copy the example environment file and generate application key:

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure Database

The project uses SQLite by default. Create the database file:

```bash
touch database/database.sqlite
```

Or update `.env` to use MySQL/PostgreSQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Build Frontend Assets

For development:
```bash
npm run dev
```

For production:
```bash
npm run build
```

### 8. Start Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## 🐳 Docker Setup (Optional)

Using Laravel Sail for Docker-based development:

```bash
# Install Sail
composer require laravel/sail --dev

# Start Sail
./vendor/bin/sail up

# Run migrations
./vendor/bin/sail artisan migrate

# Install npm dependencies
./vendor/bin/sail npm install

# Run dev server
./vendor/bin/sail npm run dev
```

## 📁 Project Structure

```
Portfolio-2024/
├── app/                    # Laravel application code
│   ├── Http/
│   │   ├── Controllers/   # Application controllers
│   │   └── Middleware/    # Inertia middleware
├── resources/
│   ├── js/
│   │   ├── assets/        # Images, styles, fonts
│   │   ├── components/    # Vue components
│   │   ├── pages/         # Inertia pages
│   │   └── app.js         # Main JS entry point
│   └── views/
│       └── app.blade.php  # Main Blade template
├── routes/
│   └── web.php            # Web routes
├── public/                # Public assets
├── database/              # Migrations and seeders
└── tests/                 # Test files
```

## 🎨 Key Components

- **Index.vue** - Main portfolio page
- **ExpertisedIn_Designer.vue** - Design skills showcase
- **ExpertisedIn_Front.vue** - Frontend skills showcase
- **ExpertisedIn_Back.vue** - Backend skills showcase
- **Works.vue** - Portfolio projects gallery
- **Contact.vue** - Contact information
- **MessageUs.vue** - Contact form
- **AboutApp.vue** - About section

## 🧪 Testing

Run the test suite:

```bash
php artisan test
# or
./vendor/bin/phpunit
```

## 🔨 Development Commands

```bash
# Start development server
php artisan serve

# Watch and compile assets
npm run dev

# Build for production
npm run build

# Run code style fixer
./vendor/bin/pint

# Clear application cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## 📝 Configuration

### Customizing Portfolio Content

Edit the Vue components in `resources/js/components/` to update:
- Skills and expertise
- Project showcases
- Contact information
- About section

### Styling

Main styles are located in `resources/js/assets/css/`:
- `main.sass` - Main stylesheet entry point
- `base/` - Base styles, fonts, variables
- `modules/` - Component-specific styles
- `layouts/` - Layout styles

## 🚀 Deployment

### Build for Production

```bash
# Install dependencies
composer install --optimize-autoloader --no-dev
npm install

# Build assets
npm run build

# Optimize Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Environment Variables

Update `.env` for production:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👤 Author

**George Gavasheli**

Portfolio showcasing expertise in:
- UI/UX Design
- Frontend Development (Vue.js, Vite, SASS, CSS, JavaScript, jQuery, Bootstrap, Tailwind)
- Backend Development (Laravel, PHP, MySQL, APIs)

---

Built with ❤️ using Laravel and Vue.js
