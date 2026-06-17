# Islamic Marriage Biodata - Laravel Application

A full-featured Islamic marriage biodata generator built with Laravel 12, offering a modern, bilingual (Bengali/English) interface with two beautifully designed themes (Dark Navy Blue and Golden White). Perfect for Muslim communities worldwide.

## ✨ Features

- **Bilingual Support** – Toggle between Bengali and English instantly
- **Two Elegant Themes** – Choose between Dark Navy Blue or Golden White
- **Dynamic PDF Generation** – Generate professional biodata PDFs with Browsershot
- **Photo Upload** – Upload and embed photos directly in the PDF
- **Custom Fields** – Add unlimited custom fields dynamically
- **Duplicate Prevention** – Smart duplicate detection using name + father + mother combination
- **Responsive Design** – Works on all devices
- **Print-Ready** – Optimized for printing

## 🛠️ Tech Stack

- **Backend**: Laravel 12, PHP 8.2
- **Frontend**: Tailwind CSS, HTML5
- **PDF Generation**: Spatie Laravel PDF with Browsershot
- **Database**: MySQL
- **Fonts**: Kalpurush (Bengali), Noto Serif Bengali


## 🚀 Quick Start

```bash
git clone https://github.com/mahadi-cse-21/marriage-biodata-maker.git
cd marriage-biodata
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```