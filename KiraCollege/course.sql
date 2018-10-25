CREATE TABLE course (
  course_id SERIAL PRIMARY KEY,
  course_code VARCHAR(6),
  name VARCHAR(100),
  subject VARCHAR(100),
  instructor VARCHAR(100),
  weeks INT(2),
  description VARCHAR(255),
  uploads VARCHAR(255)
);
