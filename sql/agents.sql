CREATE DATABASE mtariri_agents;

USE mtariri_agents;

CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    agent_name VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    gender VARCHAR(50) NOT NULL,
    address TEXT NOT NULL,
    city VARCHAR(255) NOT NULL,
    state VARCHAR(255) NOT NULL,
    postal_code VARCHAR(20) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    beneficiary_name VARCHAR(255) NOT NULL,
    relationship VARCHAR(255) NOT NULL,
    beneficiary_phone VARCHAR(20) NOT NULL,
    beneficiary_email VARCHAR(255) NOT NULL,
    cover_amount DECIMAL(10, 2) NOT NULL,
    payment_frequency VARCHAR(50) NOT NULL,
    start_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
