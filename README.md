# Tech News Blog

Welcome to the Tech News Blog project name kutyTech. This dynamic web application keeps you updated with the latest in technology news. It includes user registration and login features, a comprehensive backend admin panel, and several other functionalities to enhance the blogging experience.

## Table of Contents

1. [Features](#features)
2. [Technologies Used](#technologies-used)
3. [Installation](#installation)
4. [Usage](#usage)
5. [Folder Structure](#folder-structure)
6. [Admin Panel](#admin-panel)
7. [Contact & About](#contact--about)
8. [Contributing](#contributing)
9. [License](#license)

## Features

- **User Authentication**: Secure registration, login, and account management.
- **Dynamic Content**: View and interact with the latest tech news posts.
- **Admin Panel**: Robust backend management for the blog:
  - **Dashboard**: Overview of blog statistics and recent activities.
  - **Add Post**: Create and publish new articles.
  - **Add Category**: Organize posts by categories.
  - **Profile Management**: Update admin profile details and settings.
- **Contact Me**: A form for users to get in touch with the blog owner.
- **About Me**: A page detailing information about the blog and its author.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Authentication**: Custom authentication implementation in PHP
- **Admin Panel**: Built using PHP and integrated with the MySQL database

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/kutyTech.git
   ```

2. **Navigate to the Project Directory**:
   ```bash
   cd kutyTech
   ```

3. **Set Up the Database**:
   - Import the database schema from `database/schema.sql` into your MySQL database.
   - Update the database connection settings in `config/db.php`:
     ```php
     <?php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "tech_news_blog";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

4. **Configure the Web Server**:
   - Ensure your web server is configured to serve PHP files (e.g., Apache or Nginx).
   - Place the project in the web server's root directory.

5. **Start the Web Server**:
   - If using Apache, you can start the server with:
     ```bash
     sudo service apache2 start
     ```
   - If using Nginx, you can start it with:
     ```bash
     sudo service nginx start
     ```

   Access the application via `http://localhost`.

## Usage

1. **Register and Log In**: Use the registration and login pages to create and access your account.
2. **View Posts**: Browse and interact with the latest tech news articles.
3. **Admin Panel**: Log in with admin credentials to access and manage the backend features:
   - **Dashboard**: View an overview of blog statistics and activities.
   - **Add Post**: Create and publish new posts.
   - **Add Category**: Define and manage categories for posts.
   - **Profile Section**: Update admin profile information.
4. **Contact Me**: Use the contact form to send messages.
5. **About Me**: Learn more about the blog and its author.

## Folder Structure

- **/public**: Contains the public-facing website files (HTML, CSS, JS).
- **/backend**: Contains the admin panel files and related functionalities.
- **/includes**: PHP files for database connections and reusable components.
- **/config**: Configuration files including database settings.
- **/scripts**: JavaScript files for client-side interactivity.
- **/assets**: Static files such as images and stylesheets.
- **database/schema.sql**: SQL schema file for setting up the database.

## Admin Panel

The admin panel is accessible to users with admin credentials and includes:

- **Dashboard**: Provides a summary of blog statistics and recent activities.
- **Add Post**: Create and manage new blog posts.
- **Add Category**: Add and manage categories for blog posts.
- **Comment**: See user comments on blog post and as well approve.
- **Messages**: Messages from contact page is seen here as well as reply is giving.
- **Profile Management**: Update admin profile details and settings.

## Contact & About

- **Contact Me**: For support or inquiries, use the contact form available on the website.
- **About Me**: Find information about the blog's purpose and the author on the About Me page.

## Contributing

Contributions are welcome! Please submit a pull request with any improvements or fixes. For major changes, please open an issue to discuss the proposed changes before creating a pull request.


## Author & Contact Info

- **Author**: [Anuoluwapo Abiodun Kuti](https://mywebsite.com)
- **Email**: [anuoluwakuti@gmail.com](mailto:anuoluwakuti@gmail.com)
- **GitHub**: [Oluwakuty](https://github.com/oluwakuty)
- **Twitter**: [@anto_2025](https://twitter.com/anto_2025)

---

Thank you for checking out the Tech News Blog project. We hope you find it useful and informative!