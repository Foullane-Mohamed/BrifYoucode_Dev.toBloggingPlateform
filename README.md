# Dev.to Content Management System

==================================

## Overview

---

A comprehensive content management system for Dev.to that enables developers to share articles, explore relevant content, and collaborate effectively. The platform features a user-friendly front office experience and a powerful administrative dashboard for streamlined management of users, categories, tags, and articles.

## Key Features

---

### Admin Dashboard (Back Office)

- **Category Management**

  - Create, edit, and delete categories
  - Link multiple articles to categories
  - View category statistics through interactive charts

- **Tag Management**

  - Create, edit, and delete tags
  - Associate tags with articles for precise searching
  - Visual analytics for tag usage

- **User Management**

  - Manage user profiles and permissions
  - Grant author privileges to users
  - Moderate user accounts with suspension/deletion capabilities

- **Article Management**

  - Review and moderate submitted articles
  - Archive inappropriate content
  - Track most-read articles
  - Detailed article statistics

- **Analytics Dashboard**
  - Comprehensive entity overview (users, articles, categories, tags)
  - Top 3 authors ranking system
  - Interactive charts for categories and tags
  - Popular articles tracking

### User Platform (Front Office)

- **Authentication System**

  - User registration with basic information
  - Secure login with role-based redirection
  - Protected user sessions

- **Content Discovery**

  - Interactive search functionality
  - Dynamic content navigation
  - Category and tag browsing

- **Article Management for Authors**

  - Create, edit, and delete articles
  - Category and tag association
  - Personal dashboard for content management

- **Responsive Design**
  - Optimized for all screen sizes
  - Mobile-first approach

## Technical Requirements

---

- PHP 8.0 or higher (Object-Oriented Programming)
- PDO for database operations
- Modern web browser
- CSS Framework for responsive design
- MySQL/MariaDB database

## Security Features

---

- SQL Injection Protection

  - Prepared statements
  - Input validation and sanitization

- XSS Prevention

  - Output escaping
  - Content Security Policy

- CSRF Protection
  - Token validation
  - Form security measures

## Installation

---

1. Clone the repository

```bash
git clone [https://github.com/Foullane-Mohamed/BrifYoucode_Dev.toBloggingPlateform.git]
```

2. Configure the database

   - Import the SQL script from the `database` directory
   - Update database credentials in the configuration file

3. Configure the web server

   - Point the document root to the `public` directory
   - Ensure proper permissions are set

4. Install dependencies

```bash
composer install
```

## Project Structure

---

```
project/
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   └── Services/
├── config/
├── public/
│   ├── assets/
│   ├── css/
│   └── js/
├── database/
└── tests/
```

## Documentation

---

- UML Diagrams available in the `docs` directory:
  - Class Diagram
  - Use Case Diagram
- User Stories and task management available on Jira
- Project presentation slides in the `presentations` directory

## Development Timeline

---

- Project Start: December 30, 2024
- Submission Deadline: January 9, 2025
- Development Duration: 8 days

## Contributing

---

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes daily
4. Push to the branch
5. Open a Pull Request

## Performance Criteria

---

- Daily GitHub commits required
- Responsive design implementation
- Form validation (frontend and backend)
- Clean architecture with separated business logic
- Security implementation including SQL injection and XSS protection
- Scrum board management with detailed user stories

## Evaluation

---

- 15-minute technical presentation
- Minimum 75% score on class quiz
- Live demonstration in French
- Code review and security assessment

## License

---

[License Type] - See LICENSE file for details

## Team

---

[FOULLANE MOHAMED] - Lead Developer
