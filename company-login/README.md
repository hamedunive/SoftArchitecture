## Recruiting and Hiring Tool for Developers
A web-based tool that streamlines the recruitment and hiring process for developers in an organization. 

### Features
- Programming challenges 
- Code review and assessment 
- Hiring decision-making 

## How to Run the Project
1. Clone the project: 
git clone https://github.com/maryamjavid/Software-Architecture.git

2. Run Docker: 
- docker-compose build
- docker-compose up -d

3. Import the SQL file: 
   1. Clone the SQL file from this address: https://github.com/maryamjavid/MySQL.git
   2. Open "phpmyadmin" on port 8001:80 from Docker Desktop
   3. Enter the username and password: 
      - username: `php_docker` 
      - password: `password` 
   4. Import the SQL file into the `php_docker` database
4. Open your browser and go to your localhost address.

## How to Use
### As a Developer:
- Sign up and Login!
- Edit your Profile (optional)
- Complete one or more challenges!

### As a Company:
- Sign Up and Login!
- Check who did the tasks (challenges) and review them.

## Description of Architecture
The application uses N-tier architecture, which is divided into three layers:
- Front-end
- Back-end
- Database 

This architecture prioritizes simplicity and ease of understanding in coding while keeping modularity.

## Programming Language
The project is developed using PHP as the programming language and Laravel as the library. It uses MVC architecture.
