# School Management System

A comprehensive web-based school management system built with PHP and MySQL for streamlined administration of student records, staff management, class scheduling, marks tracking, and fee management.

## 📋 Project Overview

The School Management System is designed to help schools and educational institutions manage:
- **Student Records**: Add, view, edit, and delete student information
- **Staff Management**: Manage teacher and staff profiles
- **Class Administration**: Create and manage classes
- **Marks & Assessment**: Track student performance and marks
- **Timetable Management**: Schedule classes and manage timetables
- **Fee Management**: Track and manage student fees and payment receipts
- **User Authentication**: Separate login systems for managers and staff

## 🎯 Features

### Core Functionality
- ✅ **Student Management**: Complete CRUD operations for student records
- ✅ **Staff Management**: Add, view, update, and delete staff information
- ✅ **Class Management**: Organize students into classes
- ✅ **Marks Entry**: Record and track student test scores across multiple subjects
- ✅ **Timetable**: Generate and view class schedules
- ✅ **Fee Collection**: Manage student fees and generate payment receipts
- ✅ **Role-Based Access**: Separate login for managers and staff with appropriate permissions
- ✅ **Responsive UI**: Clean and user-friendly interface

## 📁 Project Structure

```
School Management System/
├── schoolmanager/              # Main application folder
│   ├── index.php              # Home/login page
│   ├── manager.php            # Manager dashboard
│   ├── managerlogin.php       # Manager login page
│   ├── stafflogin.php         # Staff login page
│   ├── dbconfig.php           # Database configuration
│   ├── logoutmanager.php      # Manager logout
│   ├── logoutstaff.php        # Staff logout
│   │
│   ├── Student Management
│   │   ├── addstudent.php     # Add new student form
│   │   ├── addstudentdb.php   # Store student data to database
│   │   ├── viewstudent.php    # Display all students
│   │   ├── editstudent.php    # Edit student information
│   │   ├── updatestudentdb.php# Update student data
│   │   └── delstudent.php     # Delete student record
│   │
│   ├── Staff Management
│   │   ├── addstaffdb.php     # Add staff to database
│   │   ├── viewstaff.php      # Display all staff
│   │   ├── editstaff.php      # Edit staff information
│   │   ├── updatestaffdb.php  # Update staff data
│   │   └── delstaff.php       # Delete staff record
│   │
│   ├── Class Management
│   │   ├── addclass.php       # Add new class form
│   │   └── addclassdb.php     # Store class data
│   │
│   ├── Marks Management
│   │   ├── addmarks.php       # Add marks form
│   │   ├── addmarksdb.php     # Store marks data
│   │   └── genmarks.php       # Generate/view marks report
│   │
│   ├── Timetable Management
│   │   ├── addtimetabledb.php # Add timetable entry
│   │   └── viewtimetable.php  # View timetable
│   │
│   ├── Fee Management
│   │   ├── feerecept.php      # Fee receipt form
│   │   └── feerecept1.php     # Generate fee receipt
│   │
│   ├── style/
│   │   └── style.css          # Stylesheet
│   │
│   └── nbproject/             # NetBeans project configuration
│
└── school.sql                 # Database schema and sample data
```

## 🗄️ Database Schema

The system uses a MySQL database named `school` with the following main tables:

- **student**: Student information (registration number, name, class, etc.)
- **staff**: Staff/Teacher information
- **class**: Class information
- **marks**: Student test marks and scores
- **timetable**: Class schedule and timetable
- **fees**: Student fee records and payments
- **manager**: Manager login credentials

## 🚀 Installation & Setup

### Prerequisites
- PHP 7.1 or higher
- MySQL 10.1 or MariaDB
- Web server (Apache/Nginx)
- PHP MySQLi extension

### Installation Steps

1. **Clone/Extract the repository**
   ```bash
   git clone https://github.com/SHARATH-2001/School-Managment-System.git
   cd School-Managment-System
   ```

2. **Create Database**
   - Open phpMyAdmin or MySQL client
   - Import the `school.sql` file to create database and tables
   ```bash
   mysql -u root -p < school.sql
   ```

3. **Configure Database Connection**
   - Edit `schoolmanager/dbconfig.php`
   - Update database credentials:
   ```php
   $conn=new mysqli("localhost","root","your_password","school");
   ```

4. **Place in Web Server**
   - Copy the project folder to your web server root directory (htdocs for Apache)

5. **Access the Application**
   - Open browser and navigate to `http://localhost/School-Managment-System/schoolmanager/`

## 👥 Default Login Credentials

### Manager Login
- **Username**: manager
- **Password**: password

### Staff Login
- Create staff accounts through the manager dashboard

## 📖 Usage Guide

### For Managers
1. Login with manager credentials
2. Access dashboard to manage all system functions
3. Add/Edit/Delete students, staff, and classes
4. Monitor marks and fee payments
5. Generate reports and timetables

### For Staff
1. Login with staff credentials
2. View assigned student information
3. Enter and manage student marks
4. Check timetables
5. View fee information

## 🔧 Configuration

### Database Connection
Configure in `schoolmanager/dbconfig.php`:
```php
$conn=new mysqli("hostname","username","password","database_name");
```

### Session Management
- Sessions are managed through PHP session variables
- Logout clears session and redirects to login page

## 🛡️ Security Considerations

**Note**: This is a sample/educational project. For production use:
- Implement password hashing (bcrypt/argon2)
- Add CSRF protection
- Implement input validation and sanitization
- Use prepared statements to prevent SQL injection
- Implement proper access control and authorization
- Add HTTPS/SSL encryption
- Implement rate limiting and brute-force protection

## 📝 Technologies Used

- **Backend**: PHP
- **Database**: MySQL/MariaDB
- **Frontend**: HTML, CSS
- **Server**: Apache (or any PHP-compatible server)

## 📄 File Descriptions

| File | Purpose |
|------|---------|
| `index.php` | Landing/login page |
| `dbconfig.php` | Database connection configuration |
| `manager.php` | Manager dashboard and menu |
| `addstudent.php` | Student registration form |
| `viewstudent.php` | Student records display |
| `addmarks.php` | Marks entry interface |
| `feerecept.php` | Fee receipt generation |
| `viewtimetable.php` | Timetable display |

## 🐛 Known Issues & Improvements

- Database credentials are stored in plain text (not recommended for production)
- No input validation or sanitization
- Missing error handling in some modules
- No database transaction handling
- Limited to basic CRUD operations
- No email notifications
- No backup/restore functionality

## 🚀 Future Enhancements

- [ ] Advanced user authentication and authorization
- [ ] Email notifications for fees and announcements
- [ ] Parent/Student portal access
- [ ] Online fee payment integration
- [ ] Advanced reporting and analytics
- [ ] SMS notifications
- [ ] Mobile application support
- [ ] Data backup and restore functionality
- [ ] Attendance management module
- [ ] Exam scheduling and result management

## 👨‍💻 Developer

**Original Author**: SHARATH-2001

Repository: [SHARATH-2001/School-Managment-System](https://github.com/SHARATH-2001/School-Managment-System)

## 📜 License

This project is provided as-is for educational purposes.

## 📞 Support

For issues, suggestions, or contributions, please visit the GitHub repository.

---

**Last Updated**: February 2020
**Version**: 1.0
