# 🌸 Fluap Flower Shop

A modern, responsive flower shop website built with Laravel featuring both frontend customer interface and admin dashboard.

## 🚀 Features

### Frontend (Customer Interface)
- **Homepage**: Showcases featured flowers, occasions, and categories
- **Flower Catalog**: Browse flowers by categories and types
- **Occasion Pages**: Special occasion flower arrangements
- **Category Pages**: Flowers organized by categories
- **Shopping Cart**: Add flowers to cart with quantity management
- **Responsive Design**: Works perfectly on all devices
- **Modern UI**: Beautiful, user-friendly interface

### Admin Dashboard
- **Secure Authentication**: Admin login with session management
- **Category Management**: CRUD operations for flower categories
- **Occasion Management**: Manage special occasions and events
- **Type Management**: Organize flowers by types
- **Flower Management**: Complete flower catalog management
- **Profile Management**: Admin account settings
- **Image Upload**: Support for flower and occasion images

## 🛠️ Technology Stack

- **Backend**: Laravel 11 (PHP 8.2+)
- **Frontend**: Bootstrap 5, FontAwesome
- **Database**: MySQL
- **Authentication**: Laravel's built-in auth system
- **File Storage**: Local file system for images

## 📋 Requirements

- PHP 8.2 or higher
- Composer
- MySQL 5.7 or higher
- Node.js (for asset compilation)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd rosivaflowershop
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   ```bash
   # Update .env file with your database credentials
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=flower_shop
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the database**
   ```bash
   php artisan db:seed
   ```

8. **Create storage link**
   ```bash
   php artisan storage:link
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

## 👤 Default Admin Credentials

After running the seeder, you can login to the admin dashboard with:

- **Email**: `admin@flowershop.com`
- **Password**: `admin123`

Or use the manager account:
- **Email**: `manager@flowershop.com`
- **Password**: `manager123`

## 📁 Project Structure

```
rosivaflowershop/
├── app/
│   ├── Http/Controllers/
│   │   ├── FrontendController.php      # Frontend pages
│   │   ├── AdminAuthController.php     # Admin authentication
│   │   ├── CategoryController.php      # Category management
│   │   ├── OccationController.php      # Occasion management
│   │   ├── TypeController.php          # Type management
│   │   └── FlowerController.php        # Flower management
│   ├── Models/
│   │   ├── Category.php
│   │   ├── Occation.php
│   │   ├── Type.php
│   │   └── Flower.php
│   └── Http/Middleware/
│       └── RedirectIfNotAuthenticated.php
├── resources/views/
│   ├── frontend/                       # Customer-facing views
│   │   ├── layout.blade.php
│   │   ├── parts/
│   │   └── ui/
│   └── backend/                        # Admin dashboard views
│       ├── layout.blade.php
│       ├── auth/
│       ├── parts/
│       └── [category,occation,type,flower]/
├── routes/
│   ├── web.php                         # Main routes
│   ├── frontend.php                    # Frontend routes
│   └── admin.php                       # Admin routes
└── database/
    ├── migrations/                     # Database structure
    └── seeders/                       # Sample data
```

## 🌐 Routes

### Frontend Routes
- `/` - Homepage
- `/flower` - Flower catalog
- `/category/{id}` - Category detail page
- `/occasion/{id}` - Occasion detail page
- `/categories` - All categories
- `/flowers` - All flowers

### Admin Routes
- `/admin/login` - Admin login
- `/admin/table` - Dashboard
- `/admin/category` - Category management
- `/admin/occations` - Occasion management
- `/admin/types` - Type management
- `/admin/flowers` - Flower management
- `/admin/profile` - Admin profile

## 🎨 Features Overview

### Customer Features
- **Browse Flowers**: View flowers by categories and types
- **Occasion Shopping**: Find flowers for specific occasions
- **Shopping Cart**: Add items and manage quantities
- **Responsive Design**: Mobile-friendly interface
- **Search & Filter**: Easy navigation through flower catalog

### Admin Features
- **Secure Dashboard**: Protected admin interface
- **Content Management**: Full CRUD for all content types
- **Image Management**: Upload and manage flower/occasion images
- **User Management**: Admin profile and password management
- **Data Analytics**: View counts and statistics

## 🔧 Development

### Adding New Features
1. Create migrations for database changes
2. Update models with relationships
3. Create controllers for new functionality
4. Add routes in appropriate route files
5. Create views in frontend or backend directories
6. Update navigation as needed

### Database Seeding
The project includes comprehensive seeders:
- `AdminUserSeeder` - Creates admin accounts
- `CategorySeeder` - Creates flower categories
- `TypeSeeder` - Creates flower types
- `OccationSeeder` - Creates special occasions
- `FlowerSeeder` - Creates sample flowers

## 🚀 Deployment

1. **Production environment setup**
   ```bash
   composer install --optimize-autoloader --no-dev
   npm run build
   ```

2. **Environment configuration**
   - Set `APP_ENV=production`
   - Configure database credentials
   - Set up file storage

3. **Database setup**
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🆘 Support

For support, please contact the development team or create an issue in the repository.

---

**Built with ❤️ using Laravel**
