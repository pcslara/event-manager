-- Users of the system
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin', 'manager', 'participant'),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Events
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200),
    description TEXT,
    start_date DATE,
    end_date DATE
);

-- Activity types (e.g., Lecture, Workshop)
CREATE TABLE activity_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

-- Activities within an event
CREATE TABLE activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT,
    title VARCHAR(200),
    type_id INT,
    start_datetime DATETIME,
    duration_minutes INT,
    FOREIGN KEY (event_id) REFERENCES events(id),
    FOREIGN KEY (type_id) REFERENCES activity_types(id)
);

-- Activity speakers (many-to-many)
CREATE TABLE activity_speakers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    activity_id INT,
    user_id INT,
    FOREIGN KEY (activity_id) REFERENCES activities(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Registrations and attendance status
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    activity_id INT,
    attendance ENUM('present', 'absent', 'unmarked') DEFAULT 'unmarked',
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (activity_id) REFERENCES activities(id)
);

