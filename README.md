# SI-MENTAL (Payament Collection Monitoring Information System)

A web-based information system designed to monitor **caring** and **visit** data of Telkom customers. This application is built using the **CodeIgniter 4** framework and supports Excel file data import and role-based data management. It assists the finance manager in monitoring data managed by the Payment Collection team in WITEL LAMPUNG.

## 🚀 Main Features

- Import caring and visit data from Excel files (.xlsx)
- Monitoring dashboard for caring and visit activities
- Customer data CRUD functionality
- Auto seeder from Excel files
- Modular structure supported by CodeIgniter 4
- 

---

## 🛠️ Installation (If Cloning or Downloading ZIP from GitHub)

1. Clone the repository or download the ZIP:

```bash
git clone https://github.com/rendylutfiprabowo/si-mental.git
````

Or download [ZIP from this link](https://github.com/rendylutfiprabowo/si-mental/archive/refs/heads/main.zip)

2. Navigate to the project directory:

```bash
cd si-mental
```

3. Install dependencies via Composer:

```bash
composer install
```

4. Copy and configure the `.env` file:

```bash
cp env .env
```

Edit the `.env` file to match your local database settings:

```
database.default.hostname = localhost
database.default.database = si_mental
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

5. Generate application encryption key:

```bash
php spark key:generate
```

6. Create the database (as defined in your `.env`):

```bash
php spark db:create
```

7. Run migrations and seed initial data:

```bash
php spark migrate:refresh
php spark db:seed DatabaseSeeder
```

8. Unzip assets folder on path:

```bash
public\assets.zip
```

---

## 🖼️ Project Folder Structure

```
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   └── Database/Seeds/
├── public/
│   └── uploads/         # Excel files for caring & visit
├── writable/
├── .env
├── composer.json
└── README.md
```

---

## 🧪 Tools & Technologies

* PHP 8.x
* CodeIgniter 4.x
* MySQL/MariaDB
* Composer
* PhpSpreadsheet

---

## 🧑‍💻 Developer

**Rendy Lutfi Prabowo**
GitHub: [@rendylutfiprabowo](https://github.com/rendylutfiprabowo)

---

## 📄 License

This project is licensed under the **MIT License** — feel free to use and modify it as needed.

 

