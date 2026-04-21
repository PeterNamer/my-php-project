# PimpMyPC Chatbot

A simple web-based chatbot application that helps users with PC hardware recommendations and upgrades.

The chatbot allows users to input questions about computer components (CPU, GPU, RAM, etc.) and receive helpful responses based on predefined data and NLP experimentation.

---

## Features

- Chat interface for user interaction
- Hardware recommendations (CPU, GPU, RAM, etc.)
- Upgrade suggestions based on user needs
- Compatibility guidance between components
- Keyword-based response system
- Experimental NLP model using Python (NLTK & TensorFlow)

---

## 🛠️ Technologies Used

### Backend
- PHP
- MySQL (basic query handling)

### Frontend
- HTML
- CSS

### Data Handling
- JSON-based dataset (`intents.json`) acting as a lightweight database

### Machine Learning (Experimental)
- Python
- NLTK (tokenization, lemmatization)
- TensorFlow / Keras
- Bag of Words model
- Intent classification

---

## How It Works

### Web App (PHP)
The chatbot processes user input and searches for matching responses using a keyword-based system.

- User sends a message
- The system queries stored data
- Returns a predefined response

### NLP Model (Python)
A separate prototype was developed using Python to improve chatbot intelligence:

- Tokenization of input text
- Lemmatization of words
- Creation of Bag-of-Words vectors
- Training a neural network model
- Predicting user intent
- Returning appropriate responses from dataset

---

## Project Structure

/project-root
│── bot.php
│── query.php
│── style.css
│── README.md
│
├── /ml-model
│ └── ChatBot.ipynb

---

## Notes

- The chatbot uses a structured dataset of predefined intents and responses.
- The NLP model is experimental and not fully integrated into the PHP application.
- The project was developed as part of a learning experience.
- The original MySQL database (onlinebot.chatbot table) used by the PHP web application is not included in this repository.
- A separate NLP prototype using a JSON dataset (intents.json) is included in the ml-model folder.

---

## Purpose

This project was created to:

- Practice backend development with PHP
- Understand chatbot logic and structure
- Experiment with Natural Language Processing (NLP)
- Combine web development with basic machine learning concepts

---

## Future Improvements

- Integrate the NLP model into the web application
- Improve accuracy of intent classification
- Replace keyword system with ML-based responses
- Add database persistence (MySQL or NoSQL)
- Improve UI/UX of the chat interface

---

## Author

Developed as a student project focusing on software development and AI basics.
