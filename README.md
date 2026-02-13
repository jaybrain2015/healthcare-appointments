# Healthcare Appointment System 🏥

A full-stack healthcare appointment booking system built with modern technologies and DevOps practices.

## 🚀 Live Demo
- **Application:** https://www.healthcare-appointments.com
- **API Health Check:** https://www.healthcare-appointments.com/api/health

## 🛠️ Tech Stack

### Backend
- **Laravel 10** - PHP framework
- **MySQL 8** - Relational database
- **RESTful API** - JSON API endpoints

### Infrastructure
- **AWS EC2** - Ubuntu 22.04 server
- **Nginx** - Web server & reverse proxy
- **Let's Encrypt** - Free SSL certificates
- **Cloudflare** - DNS & CDN

### DevOps
- **Git & GitHub** - Version control
- **Docker** - Containerization (coming soon)
- **Terraform** - Infrastructure as Code (coming soon)
- **Kubernetes** - Container orchestration (coming soon)

## 📋 Current Features

✅ Production server setup on AWS  
✅ HTTPS with SSL certificate  
✅ Laravel backend with API  
✅ Database integration  
✅ API endpoints for health check and users  

## 🎯 Upcoming Features

Week 2:
- [ ] JWT Authentication
- [ ] Doctor profiles
- [ ] Appointment booking system
- [ ] React frontend

Week 3:
- [ ] Terraform infrastructure
- [ ] Docker containerization
- [ ] CI/CD pipeline

Week 4-6:
- [ ] Kubernetes deployment
- [ ] Monitoring & logging
- [ ] Load testing
- [ ] Security hardening

## 🏗️ Architecture
```
Internet
    ↓
Cloudflare DNS + CDN
    ↓
AWS EC2 (t2.micro)
    ↓
Nginx (SSL termination)
    ↓
Laravel (PHP 8.2-FPM)
    ↓
MySQL Database
```

## 📊 Current Infrastructure

- **Region:** EU Central (Frankfurt)
- **Instance:** t2.micro (AWS Free Tier)
- **OS:** Ubuntu 22.04 LTS
- **Storage:** 20GB SSD
- **SSL:** Let's Encrypt (auto-renewal)

## 💡 What I Learned (Day 1)

- AWS account setup with proper security (MFA, IAM)
- EC2 instance provisioning and SSH access
- Security groups and firewall configuration
- Domain management with Cloudflare
- SSL certificate automation with Certbot
- Laravel installation and configuration
- Nginx reverse proxy setup
- MySQL database management
- API development basics
- Git workflow and GitHub integration

## 🔒 Security Features

- MFA-enabled AWS account
- IAM user with least privilege
- Security groups (restrictive firewall rules)
- SSH key-based authentication
- HTTPS-only (HTTP redirects to HTTPS)
- SSL/TLS 1.2+ only
- Security headers configured

## 📈 Monitoring & Alerts

- AWS CloudWatch billing alarms (€1, €5, €10 thresholds)
- Free tier usage alerts
- EC2 status monitoring

## 🚀 Deployment

Currently manual deployment. CI/CD pipeline coming in Week 3.
```bash
git push origin main
ssh into server
git pull
php artisan migrate
php artisan config:cache
```

## 📝 Development Log

### Day 1 (Today)
- ✅ AWS account setup with security best practices
- ✅ EC2 instance launched and configured
- ✅ Domain purchased and DNS configured
- ✅ SSL certificate installed
- ✅ Laravel installed and running
- ✅ MySQL database setup
- ✅ First API endpoints created
- ✅ Git repository initialized

### Coming This Week
- Day 2: Authentication system (JWT)
- Day 3-4: Doctor and appointment models
- Day 5-7: React frontend

## 🎓 Skills Demonstrated

- Cloud Infrastructure (AWS)
- Linux Server Administration
- Web Server Configuration (Nginx)
- Backend Development (Laravel/PHP)
- Database Management (MySQL)
- API Development (RESTful)
- DNS & Domain Management
- SSL/TLS Configuration
- Version Control (Git/GitHub)
- Security Best Practices

## 📞 Contact


---

Built with ❤️ as part of my DevOps & Full-Stack learning journey.
