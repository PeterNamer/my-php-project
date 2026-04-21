# PimpMyPC

PimpMyPC is a simple PHP-based chatbot web application designed to help users with PC upgrades and hardware recommendations.

The application allows users to input their current PC specifications through a chat interface and receive suggestions for compatible upgrades or new components. It can be used both for improving an existing system and for getting guidance on building a new PC.

---

## How it worked

The project was built using:
- **PHP** for backend logic
- **MySQL** for storing chatbot responses
- **CSS** for basic frontend styling

The chatbot used a keyword-based matching system. All responses were manually created and stored in a MySQL database.

Each database entry contained specific keywords along with a predefined response. When a user entered a message, the system searched for matching keywords and returned the corresponding answer.

For example:
> I have an AMD Radeon 6700 XT, what CPU goes well with this card?

If relevant keywords were found, the chatbot would return a stored recommendation based on the database.

Note: The original database (containing all chatbot responses) is not included in this repository, as it was part of the original hosted environment.

---

## Features

- Chat-style user interface  
- PC upgrade recommendations  
- Basic hardware compatibility guidance  
- Keyword-based response system  
- Manually curated response database  

---

## Project Structure

- `bot.php` – main chatbot logic and interface  
- `query.php` – handles requests and database interaction  
- `style.css` – application styling  

---

## Notes

This project was originally deployed on a live server, which is no longer active. The repository is maintained as a portfolio project.

Due to the missing database, full functionality may not be available without recreating or importing the original dataset.

---

## Purpose

This project was developed as a practical exercise in web development, combining backend programming, database integration, and basic UI design.

It also served as an experiment in building a simple rule-based chatbot for PC hardware recommendations.
