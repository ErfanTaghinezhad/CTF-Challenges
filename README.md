# CTF Challenges: Command Injection and SQL Injection

Welcome to the CTF challenges repository! This repository contains web application security challenges designed for Capture The Flag (CTF) competitions, focusing on Command Injection and SQL Injection vulnerabilities.

## Challenges Overview

### Command Injection

#### Command Injection Without Filter

**Description:** Participants must exploit a command injection vulnerability without any filtering. The flag is located in the path `/var/flag`.

**Objective:**
- Execute a command injection to read the file at `/var/flag`.

#### Command Injection With Filter

**Description:** Participants must exploit a command injection vulnerability with limited command filters. Only certain commands are allowed: `ls`, `cat`, `pwd`, `whoami`, `id`, `whereis`.

**Objective:**
- Bypass the command filters to read the file at `/var/flag`.


### SQL Injection

#### SQL Injection - Bypass Login (Read Only)

**Description:** Participants must exploit an SQL injection vulnerability to bypass the login mechanism.

**Objective:**
- Use SQL injection to log in as an admin user.

#### SQL Injection - Union Attack (Read Only)

**Description:** Participants must exploit an SQL injection vulnerability to perform a UNION attack and retrieve hidden data.

**Objective:**
- Use a UNION attack to retrieve hidden data from the database, including the flag.


#### SQL Injection - Hard Union Attack with Filters (Read Only)

**Description:** Participants must exploit an SQL injection vulnerability with additional filtering mechanisms to perform a UNION attack and retrieve hidden data.

**Objective:**
- Bypass the filters and use a UNION attack to retrieve hidden data, including the flag.


#### SQL Injection - Blind Attack (Read Only)

**Description:** Participants must exploit a blind SQL injection vulnerability to retrieve hidden data without directly seeing the output.

**Objective:**
- Use blind SQL injection techniques to infer hidden data from the database.


