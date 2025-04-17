<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduProctor - Advanced Online Testing & Learning Platform</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary: #4361ee;
      --primary-dark: #3a56d4;
      --secondary: #3f37c9;
      --accent: #4895ef;
      --light: #f8f9ff;
      --dark: #1a1a2e;
      --success: #4cc9f0;
      --text: #2b2d42;
      --text-light: #8d99ae;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--light);
      color: var(--text);
      margin-top: 80px;
      line-height: 1.6;
    }

    .navbar {
      background-color: white;
      padding: 15px 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      transition: all 0.3s ease;
    }

    .navbar.scrolled {
      padding: 10px 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--primary) !important;
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      height: 40px;
      margin-right: 10px;
    }

    .nav-link {
      color: var(--text) !important;
      font-weight: 500;
      margin: 0 8px;
      position: relative;
      padding: 8px 12px !important;
    }

    .nav-link:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }

    .nav-link:hover:after,
    .nav-link.active:after {
      width: 100%;
    }

    .btn-primary {
      background-color: var(--primary);
      border-color: var(--primary);
      padding: 12px 24px;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: var(--primary-dark);
      border-color: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
    }

    .btn-outline-primary {
      color: var(--primary);
      border-color: var(--primary);
      padding: 12px 24px;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
      background-color: var(--primary);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
    }

    .hero {
      padding: 100px 0 120px;
      background: linear-gradient(135deg, rgba(248, 249, 255, 0.9), rgba(248, 249, 255, 0.9)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
      background-size: cover;
      position: relative;
      overflow: hidden;
    }

    .hero:before {
      content: '';
      position: absolute;
      bottom: -50px;
      left: 0;
      width: 100%;
      height: 100px;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%234361ee"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%234361ee"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%234361ee"></path></svg>') no-repeat;
      background-size: cover;
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 20px;
      color: var(--dark);
      line-height: 1.2;
    }

    .hero p {
      font-size: 1.2rem;
      color: var(--text-light);
      margin-bottom: 30px;
      max-width: 600px;
    }

    .hero-btns {
      display: flex;
      gap: 15px;
      margin-bottom: 30px;
    }

    .hero-img {
      border-radius: 12px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      transform: perspective(1000px) rotateY(-5deg);
      transition: all 0.5s ease;
    }

    .hero-img:hover {
      transform: perspective(1000px) rotateY(0deg);
    }

    .feature-card {
      padding: 30px;
      border-radius: 12px;
      background: white;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      height: 100%;
      border: 1px solid rgba(0, 0, 0, 0.05);
      text-align: center;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(67, 97, 238, 0.15);
      border-color: rgba(67, 97, 238, 0.2);
    }

    .feature-icon {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, var(--primary), var(--accent));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      color: white;
      font-size: 1.8rem;
    }

    .feature-card h3 {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 15px;
      color: var(--dark);
    }

    .feature-card p {
      color: var(--text-light);
      font-size: 1rem;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 15px;
      color: var(--dark);
      position: relative;
      display: inline-block;
    }

    .section-title:after {
      content: '';
      position: absolute;
      width: 60px;
      height: 4px;
      bottom: -10px;
      left: 0;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border-radius: 2px;
    }

    .section-subtitle {
      color: var(--text-light);
      font-size: 1.1rem;
      max-width: 700px;
      margin: 0 auto 50px;
    }

    .testimonials {
      background-color: white;
      padding: 100px 0;
      position: relative;
      overflow: hidden;
    }

    .testimonial-card {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      position: relative;
      border: 1px solid rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .testimonial-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(67, 97, 238, 0.1);
    }

    .testimonial-card .quote-icon {
      position: absolute;
      top: 20px;
      right: 20px;
      color: rgba(67, 97, 238, 0.1);
      font-size: 3rem;
    }

    .testimonial-card p {
      font-style: italic;
      color: var(--text-light);
      margin-bottom: 20px;
    }

    .testimonial-author {
      display: flex;
      align-items: center;
    }

    .testimonial-author img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 15px;
      object-fit: cover;
    }

    .author-info h5 {
      font-weight: 700;
      margin-bottom: 5px;
      color: var(--dark);
    }

    .author-info p {
      font-style: normal;
      font-size: 0.9rem;
      color: var(--text-light);
      margin: 0;
    }

    .platform-stats {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      padding: 80px 0;
      color: white;
      text-align: center;
    }

    .stat-item {
      margin-bottom: 30px;
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 10px;
    }

    .stat-label {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    .cta-section {
      padding: 100px 0;
      background: linear-gradient(135deg, rgba(248, 249, 255, 0.9), rgba(248, 249, 255, 0.9)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
      background-size: cover;
      position: relative;
    }

    .cta-section:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(67, 97, 238, 0.9);
      mix-blend-mode: multiply;
    }

    .cta-content {
      position: relative;
      z-index: 2;
      color: white;
    }

    .cta-content h2 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 20px;
    }

    .cta-content p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      opacity: 0.9;
    }

    .contact-section {
      padding: 100px 0;
      background-color: white;
    }

    .contact-card {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .contact-card h3 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 20px;
      color: var(--dark);
    }

    .form-control {
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
    }

    .footer {
      background-color: var(--dark);
      color: white;
      padding: 60px 0 30px;
    }

    .footer-logo {
      font-weight: 700;
      font-size: 1.5rem;
      color: white;
      margin-bottom: 20px;
      display: inline-block;
    }

    .footer-links h5 {
      font-weight: 700;
      margin-bottom: 20px;
      color: white;
    }

    .footer-links ul {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 10px;
    }

    .footer-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      color: white;
      padding-left: 5px;
    }

    .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      color: white;
      margin-right: 10px;
      transition: all 0.3s ease;
    }

    .social-icons a:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }

    .copyright {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 30px;
      margin-top: 30px;
      color: rgba(255, 255, 255, 0.7);
    }

    /* Animations */
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
      100% { transform: translateY(0px); }
    }

    .floating {
      animation: float 6s ease-in-out infinite;
    }

    /* Responsive styles */
    @media (max-width: 992px) {
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
    }

    @media (max-width: 768px) {
      body {
        margin-top: 70px;
      }
      
      .hero {
        padding: 80px 0 100px;
        text-align: center;
      }
      
      .hero h1 {
        font-size: 2rem;
      }
      
      .hero p {
        font-size: 1rem;
      }
      
      .hero-btns {
        flex-direction: column;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
      
      .feature-card {
        padding: 20px;
      }
      
      .feature-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
      }
    }

    @media (max-width: 576px) {
      .hero h1 {
        font-size: 1.8rem;
      }
      
      .section-title {
        font-size: 1.6rem;
      }
      
      .testimonial-card {
        padding: 20px;
      }
      
      .contact-card {
        padding: 25px;
      }
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://via.placeholder.com/40x40/4361ee/ffffff?text=EP" alt="EduProctor Logo">
        EduProctor
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#solutions">Solutions</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <div class="ms-3 d-flex">
          <a href="#" class="btn btn-outline-primary me-2">Login</a>
          <a href="#" class="btn btn-primary">Sign Up</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 hero-content" data-aos="fade-right">
          <h1>Revolutionizing Education with Smart Testing Solutions</h1>
          <p>Comprehensive online application, examination, and question bank platform for coaching institutes and educational organizations.</p>
          <div class="hero-btns">
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
            <a href="#" class="btn btn-outline-primary btn-lg">Learn More</a>
          </div>
          <div class="d-flex align-items-center">
            <div class="d-flex">
              <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-n2" width="40" height="40" alt="User">
              <img src="https://randomuser.me/api/portraits/men/42.jpg" class="rounded-circle me-n2" width="40" height="40" alt="User">
              <img src="https://randomuser.me/api/portraits/women/63.jpg" class="rounded-circle me-n2" width="40" height="40" alt="User">
            </div>
            <div class="ms-3">
              <p class="mb-0 small">Trusted by 500+ institutes worldwide</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <img src="https://via.placeholder.com/600x400/f8f9ff/4361ee?text=EduProctor+Dashboard" class="img-fluid hero-img floating" alt="EduProctor Dashboard">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-5 bg-light">
    <div class="container py-5">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title">Powerful Features</h2>
        <p class="section-subtitle">Designed to streamline your educational processes and enhance learning outcomes</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3>Online Exam Platform</h3>
            <p>Conduct secure, proctored exams with our advanced online testing platform featuring AI monitoring and plagiarism detection.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-database"></i>
            </div>
            <h3>Question Bank</h3>
            <p>Access thousands of categorized questions or create your own. Organize by difficulty, topic, and learning objectives.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <h3>Student Portal</h3>
            <p>Personalized dashboard for students to track progress, access study materials, and receive performance analytics.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Analytics Dashboard</h3>
            <p>Comprehensive reports and analytics to track student performance, question effectiveness, and learning outcomes.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <h3>Mobile Ready</h3>
            <p>Fully responsive design works seamlessly across all devices, with dedicated mobile apps for students and instructors.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Secure Platform</h3>
            <p>Enterprise-grade security with encryption, secure authentication, and compliance with global data protection standards.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Solutions Section -->
  <section id="solutions" class="py-5">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
          <img src="https://via.placeholder.com/600x500/f8f9ff/4361ee?text=Custom+Solutions" class="img-fluid rounded-3" alt="Custom Solutions">
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <h2 class="section-title">Tailored Solutions for Every Educational Need</h2>
          <p class="mb-4">Our platform is designed to adapt to your specific requirements, whether you're a coaching center, university, or corporate training provider.</p>
          
          <div class="d-flex mb-4">
            <div class="me-4">
              <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="fas fa-check"></i>
              </div>
            </div>
            <div>
              <h4 class="h5">Coaching Institutes</h4>
              <p class="mb-0">Automate test series, track student progress, and benchmark performance against peers.</p>
            </div>
          </div>
          
          <div class="d-flex mb-4">
            <div class="me-4">
              <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="fas fa-check"></i>
              </div>
            </div>
            <div>
              <h4 class="h5">Universities & Colleges</h4>
              <p class="mb-0">Conduct secure online exams with remote proctoring and comprehensive analytics.</p>
            </div>
          </div>
          
          <div class="d-flex">
            <div class="me-4">
              <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="fas fa-check"></i>
              </div>
            </div>
            <div>
              <h4 class="h5">Corporate Training</h4>
              <p class="mb-0">Assess employee skills, deliver training programs, and measure learning outcomes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials">
    <div class="container py-5">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title">Trusted by Educators Worldwide</h2>
        <p class="section-subtitle">Here's what our clients say about EduProctor</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="testimonial-card">
            <i class="fas fa-quote-right quote-icon"></i>
            <p>"EduProctor has transformed how we conduct our entrance test series. The platform is intuitive, reliable, and the analytics help us identify student weaknesses effectively."</p>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Sarah Johnson">
              <div class="author-info">
                <h5>Sarah Johnson</h5>
                <p>Director, Elite Coaching Center</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial-card">
            <i class="fas fa-quote-right quote-icon"></i>
            <p>"The question bank and test creation tools have saved us hundreds of hours. Our faculty can now focus on teaching rather than exam administration."</p>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Dr. Rajesh Kumar">
              <div class="author-info">
                <h5>Dr. Rajesh Kumar</h5>
                <p>Dean, University of Delhi</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="testimonial-card">
            <i class="fas fa-quote-right quote-icon"></i>
            <p>"Our student satisfaction scores improved by 40% after implementing EduProctor. The mobile app makes it so convenient for students to take tests anytime, anywhere."</p>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Maria Garcia">
              <div class="author-info">
                <h5>Maria Garcia</h5>
                <p>CEO, Bright Future Academy</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform Stats -->
  <section class="platform-stats">
    <div class="container py-5">
      <div class="row text-center">
        <div class="col-md-3" data-aos="fade-up">
          <div class="stat-item">
            <div class="stat-number">500+</div>
            <div class="stat-label">Educational Institutions</div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
          <div class="stat-item">
            <div class="stat-number">1M+</div>
            <div class="stat-label">Students Served</div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-item">
            <div class="stat-number">100K+</div>
            <div class="stat-label">Questions in Bank</div>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-item">
            <div class="stat-number">24/7</div>
            <div class="stat-label">Support Available</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center cta-content" data-aos="fade-up">
          <h2>Ready to Transform Your Educational Experience?</h2>
          <p>Join thousands of institutions who trust EduProctor for their online testing and learning management needs.</p>
          <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-primary btn-lg">Request Demo</a>
            <a href="#" class="btn btn-outline-light btn-lg">Contact Sales</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mb-5" data-aos="fade-up">
          <h2 class="section-title">Get In Touch</h2>
          <p class="section-subtitle">Have questions or ready to get started? Our team is here to help.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-card">
            <div class="row">
              <div class="col-md-6">
                <h3>Contact Information</h3>
                <p class="mb-4">Fill out the form and our team will get back to you within 24 hours.</p>
                
                <div class="d-flex mb-3">
                  <div class="me-3 text-primary">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div>
                    <h5 class="h6 mb-0">Address</h5>
                    <p class="small">123 Education Street, Learning City, 101010</p>
                  </div>
                </div>
                
                <div class="d-flex mb-3">
                  <div class="me-3 text-primary">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <div>
                    <h5 class="h6 mb-0">Phone</h5>
                    <p class="small">+1 (555) 123-4567</p>
                  </div>
                </div>
                
                <div class="d-flex">
                  <div class="me-3 text-primary">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div>
                    <h5 class="h6 mb-0">Email</h5>
                    <p class="small">info@eduproctor.com</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <form>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                  <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Your Message" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-lg-4">
          <a href="#" class="footer-logo">
            <img src="https://via.placeholder.com/40x40/ffffff/4361ee?text=EP" alt="EduProctor Logo" class="me-2">
            EduProctor
          </a>
          <p class="text-white-50 mb-4">Empowering educational institutions with advanced online testing and learning management solutions.</p>
          <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4">
          <div class="footer-links">
            <h5>Product</h5>
            <ul>
              <li><a href="#">Features</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Demo</a></li>
              <li><a href="#">Updates</a></li>
              <li><a href="#">Roadmap</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4">
          <div class="footer-links">
            <h5>Solutions</h5>
            <ul>
              <li><a href="#">Coaching Centers</a></li>
              <li><a href="#">Universities</a></li>
              <li><a href="#">Schools</a></li>
              <li><a href="#">Corporate</a></li>
              <li><a href="#">Government</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4">
          <div class="footer-links">
            <h5>Company</h5>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Press</a></li>
              <li><a href="#">Partners</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="footer-links">
            <h5>Support</h5>
            <ul>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Documentation</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Webinars</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright text-center">
        <p class="mb-0">&copy; 2025 EduProctor. All rights reserved. | <a href="#" class="text-white-50">Privacy Policy</a> | <a href="#" class="text-white-50">Terms of Service</a></p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    // Initialize AOS animation
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>

</html>