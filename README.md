
# **Flinders University Research Chemicals Ordering System**

## **Project Overview**

This project focuses on creating a DevOps environment for the Research Chemicals Ordering System at Flinders University. It utilizes CI/CD pipelines for automated testing, building, and deployment to ensure high-quality code and seamless integration between development and production environments.

### **Key Features:**
- **CI/CD Pipelines**: Integrated with GitHub using Microsoft Azure for Continuous Integration (CI) and Continuous Deployment (CD).
- **Front-End Development**: Utilizes HTML, CSS, and JavaScript for a responsive and user-friendly interface.
- **Back-End Development**: Built with PHP and MySQL for managing and processing research chemical orders.
- **Deployment Environment**: Hosted on Namecheap cloud server for reliability and scalability.

```

### **Key Technologies:**
- **Namecheap Cloud Server**
- **CI/CD Pipelines** (Azure Pipelines)
- **MySQL** (Database)
- **PHP** (Backend)
- **HTML/CSS/JavaScript** (Frontend)

## **Getting Started**

### **Prerequisites**
Ensure the following tools are installed:
- Git
- PHP 7.x+
- MySQL
- Microsoft Azure CLI

### **Installation Steps:**
1. **Clone the repository:**
   ```bash
   git clone https://github.com/michaelakintayo7/flinders-chem-lifecycle.git
   cd flinders-chem-lifecycle
   ```
2. **Install dependencies (if applicable):**
   ```bash
   npm install  # For frontend (if using npm packages)
   composer install  # For backend
   ```

3. **Database Setup:**
   Create a MySQL database and import the provided SQL schema:
   ```bash
   mysql -u root -p < database/schema.sql
   ```

4. **Environment Setup:**
   Update the `.env` file with your environment variables for the Namecheap cloud server.

5. **Run the Application:**
   - For local development:
     ```bash
     php -S localhost:8000 -t backend/
     ```

## **CI/CD Pipelines**

### **Development Pipeline:**
Located in `pipelines/dev-pipeline.yml`, the development pipeline triggers CI tasks such as linting, unit testing, and building. Upon successful completion, the code is deployed to the test environment.

### **Test Pipeline:**
Located in `pipelines/test-pipeline.yml`, this pipeline handles peer reviews and is triggered upon a pull request to the `main` branch. After successful tests, it deploys the code to production.

## **Deployment**

### **Namecheap Cloud Server:**
The application is deployed on Namecheap Cloud Server. Follow the instructions below to push the code to production:
```bash
scp -r ./src/* yourusername@yourdomain.com:/home/yourusername/public_html/
```

Make sure to replace `yourusername` and `yourdomain.com` with the correct server credentials.

## **Project Goals**

- **Scalability**: Ensure the system can handle increased loads as the university grows.
- **Automation**: Use CI/CD pipelines to automate testing, building, and deployment.
- **Security**: Implement secure coding practices and cloud-based security mechanisms.
- **Cost-Effectiveness**: Deploy cost-efficient cloud infrastructure.

## **Contributions**

1. Fork the project.
2. Create your feature branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -am 'Add your feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a Pull Request.

## **License**
This project is licensed under the MIT License.

## **Contact**
For any inquiries, reach out to the project maintainer at akin0062@flinders.edu.au.

## **Project Collaborators**
1. Jarrod
2. Morgen
3. Shosho
4. Michael
5. Jingyi
6. Mingjun
7. Hui Lin
8. Lujiang
