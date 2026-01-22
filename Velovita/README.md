# Velovita® Landing Page

![Technologies](https://img.shields.io/badge/Technologies-PHP%20%7C%20WordPress%20%7C%20SCSS%20%7C%20JavaScript-orange)

This is a responsive WordPress landing page for Velovita®, following the brand guidelines with Montserrat typography, corporate colors, and a modern layout. The project includes sections like Hero, Products, Features, Team, and a modal popup.

---

## 📂 Project Structure

```
velovita/
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── components/
│   ├── _products.scss
│   ├── _features.scss
│   ├── _team.scss
│   ├── _footer.scss
│   └── _modal.scss
├── template-parts/
│   ├── products.php
│   ├── features.php
│   └── team.php
├── header.php
├── footer.php
├── index.php
├── functions.php
├── main.scss
└── README.md
```

---

## 🛠 Technologies Used

- **WordPress** – Theme development
- **PHP** – Template logic
- **SCSS** – Styling with variables and components
- **JavaScript** – Interactive features (carousel, modal, product rotation)
- **Montserrat & Nunito** – Typography per brand guide
- **Responsive Design** – Mobile-first layout

---

## 🚀 Getting Started

### 1. Install a Local Server

Use XAMPP, MAMP, or LocalWP to run WordPress locally.

### 2. Setup WordPress

- Download WordPress from [wordpress.org](https://wordpress.org)
- Place it in your local server directory (e.g., `htdocs` for XAMPP)

### 3. Add the Theme

- Copy the `velovita` folder into `wp-content/themes/`
- Go to **WordPress Admin → Appearance → Themes**
- Activate **Velovita Theme**

### 4. Install Dependencies

```bash
npm install
npm run build
```
