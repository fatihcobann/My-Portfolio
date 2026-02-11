<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo SITE_NAME; ?>">
    <meta name="author" content="<?php echo SITE_AUTHOR; ?>">
    <title><?php echo SITE_NAME; ?></title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts - Montserrat + Caveat (el yazısı) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* ===== GRAY-ORANGE THEME with LIGHT/DARK MODE ===== */
        :root {
            /* Light Mode (Default) */
            --bg-primary: #f5f5f5;
            --bg-secondary: #ffffff;
            --bg-card: #ffffff;
            --accent: #e67e22;
            --accent-light: #f39c12;
            --accent-dark: #d35400;
            --text-primary: #2c3e50;
            --text-secondary: #5a6a7a;
            --text-muted: #8a9aaa;
            --border: #e0e0e0;
            --shadow: rgba(0, 0, 0, 0.08);
            --navbar-bg: rgba(255, 255, 255, 0.95);
        }

        [data-theme="dark"] {
            /* Dark Mode */
            --bg-primary: #1a1a1a;
            --bg-secondary: #252525;
            --bg-card: #2d2d2d;
            --accent: #e67e22;
            --accent-light: #f39c12;
            --accent-dark: #d35400;
            --text-primary: #f0f0f0;
            --text-secondary: #b0b0b0;
            --text-muted: #707070;
            --border: #3d3d3d;
            --shadow: rgba(0, 0, 0, 0.3);
            --navbar-bg: rgba(26, 26, 26, 0.95);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            background: var(--navbar-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 1rem 0;
            border-bottom: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 0.7rem 0;
            box-shadow: 0 10px 30px var(--shadow);
        }

        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            color: var(--text-primary) !important;
            letter-spacing: 0.5px;
        }

        .navbar-brand:hover {
            color: var(--accent) !important;
        }

        .nav-link {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-secondary) !important;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.5rem 1.2rem !important;
            margin: 0 0.2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--text-primary) !important;
            background: var(--bg-card);
        }

        .nav-link.active {
            color: var(--accent) !important;
        }

        .cv-btn {
            background: var(--accent) !important;
            color: #fff !important;
            padding: 0.6rem 1.5rem !important;
            border-radius: 25px !important;
            font-weight: 600 !important;
        }

        .cv-btn:hover {
            background: var(--accent-dark) !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(230, 126, 34, 0.4);
        }

        /* Theme Toggle & Language Switch */
        .navbar-controls {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .theme-toggle {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--text-primary);
            font-size: 1.1rem;
        }

        .theme-toggle:hover {
            background: var(--accent);
            color: #fff;
            border-color: var(--accent);
        }

        .lang-switch {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .lang-switch a {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.3rem 0.6rem;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .lang-switch a:hover,
        .lang-switch a.active {
            color: var(--accent);
            background: var(--bg-card);
        }

        /* ===== HERO SECTION ===== */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(ellipse at 70% 20%, rgba(230, 126, 34, 0.1) 0%, transparent 50%),
                radial-gradient(ellipse at 30% 80%, rgba(243, 156, 18, 0.08) 0%, transparent 50%);
            pointer-events: none;
        }

        .hero-subtitle {
            font-family: 'Montserrat', sans-serif;
            color: var(--accent);
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .hero-title {
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            color: var(--text-primary);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: 1px;
        }

        .hero-title span {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-desc {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }

        /* ===== DECORATIVE ELEMENTS ===== */
        .handwritten {
            font-family: 'Caveat', cursive;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .hero-content {
            position: relative;
        }

        .hero-intro {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .intro-line {
            width: 40px;
            height: 3px;
            background: var(--text-primary);
            margin-top: 15px;
            flex-shrink: 0;
        }

        .intro-text {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem;
            color: var(--text-primary);
            line-height: 1.8;
        }

        .highlight-text {
            color: var(--accent);
            font-weight: 600;
        }

        .decorated-text {
            position: relative;
            display: inline-block;
        }

        .underline-decoration {
            position: relative;
        }

        .underline-decoration::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 10'%3E%3Cpath d='M0 8 Q25 2 50 8 T100 8' stroke='%23e67e22' stroke-width='2' fill='none'/%3E%3C/svg%3E") repeat-x;
            background-size: 100px 10px;
        }

        /* Arrow decoration */
        .arrow-decoration {
            position: absolute;
            width: 80px;
            height: 80px;
            pointer-events: none;
        }

        .arrow-to-image {
            top: -20px;
            right: -100px;
        }

        .arrow-svg {
            width: 100%;
            height: 100%;
        }

        /* Scroll indicator */
        .scroll-indicator {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 3rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .scroll-indicator:hover {
            transform: translateY(5px);
        }

        .scroll-icon {
            width: 45px;
            height: 45px;
            background: var(--text-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bg-primary);
            font-size: 1.2rem;
            animation: bounce 2s infinite;
        }

        .scroll-text {
            font-family: 'Caveat', cursive;
            font-size: 1.4rem;
            color: var(--text-secondary);
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        /* Social sidebar */
        .social-sidebar {
            position: fixed;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 1rem;
            z-index: 100;
        }

        .social-sidebar a {
            width: 50px;
            height: 50px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            font-size: 1.3rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-sidebar a:hover {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
            transform: translateX(-5px);
        }

        /* Image frame decoration */
        .img-frame {
            position: relative;
        }

        .img-frame::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 20px;
            right: -20px;
            bottom: -20px;
            border: 2px solid var(--border);
            border-radius: 30px;
            z-index: -1;
        }

        .img-corner-decoration {
            position: absolute;
            width: 30px;
            height: 30px;
            background: var(--accent);
            z-index: 2;
        }

        .corner-top-left {
            top: -5px;
            left: -5px;
            border-radius: 8px 0 8px 0;
        }

        .corner-bottom-right {
            bottom: -5px;
            right: -5px;
            border-radius: 8px 0 8px 0;
        }

        /* Floating elements */
        .floating-element {
            position: absolute;
            pointer-events: none;
            opacity: 0.6;
        }

        .floating-circle {
            width: 15px;
            height: 15px;
            background: var(--accent);
            border-radius: 50%;
            animation: float 3s ease-in-out infinite;
        }

        .floating-square {
            width: 20px;
            height: 20px;
            border: 2px solid var(--accent);
            transform: rotate(45deg);
            animation: float 4s ease-in-out infinite;
        }

        .floating-dots {
            display: flex;
            gap: 5px;
        }

        .floating-dots span {
            width: 8px;
            height: 8px;
            background: var(--text-muted);
            border-radius: 50%;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(45deg);
            }

            50% {
                transform: translateY(-20px) rotate(45deg);
            }
        }

        /* Handwritten annotation */
        .annotation {
            font-family: 'Caveat', cursive;
            font-size: 1.3rem;
            color: var(--text-secondary);
            position: relative;
        }

        .annotation-arrow {
            position: absolute;
        }

        .hero-image {
            position: relative;
            z-index: 1;
        }

        .hero-image .img-wrapper {
            width: 350px;
            height: 420px;
            background: var(--bg-card);
            border-radius: 30px;
            border: 3px solid var(--border);
            overflow: hidden;
            margin: 0 auto;
            position: relative;
            box-shadow: 0 20px 60px var(--shadow);
        }

        .hero-image .img-wrapper::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 60%, var(--bg-primary) 100%);
            z-index: 1;
            opacity: 0.5;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-image .placeholder-icon {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            color: var(--text-muted);
        }

        /* ===== SECTION STYLES ===== */
        section {
            padding: 100px 0;
        }

        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
            color: var(--text-primary);
        }

        .section-line {
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            border-radius: 2px;
            margin-bottom: 3rem;
        }

        .section-line.center {
            margin-left: auto;
            margin-right: auto;
        }

        /* ===== ABOUT SECTION ===== */
        .about-section {
            background: var(--bg-secondary);
        }

        .about-image {
            width: 100%;
            max-width: 400px;
            height: 480px;
            background: var(--bg-card);
            border-radius: 20px;
            border: 3px solid var(--border);
            overflow: hidden;
            margin: 0 auto;
            box-shadow: 0 20px 60px var(--shadow);
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-image .placeholder-icon {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 6rem;
            color: var(--text-muted);
        }

        .about-text {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-secondary);
            font-size: 1.05rem;
            margin-bottom: 1.5rem;
        }

        /* ===== SKILLS ===== */
        .skills-text {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-secondary);
            font-size: 1.05rem;
            margin-top: 1rem;
        }

        .skills-text strong {
            color: var(--accent);
            font-weight: 600;
        }

        /* ===== PROJECTS SECTION ===== */
        .projects-section {
            background: var(--bg-primary);
        }

        .github-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 25px;
            padding: 4rem 3rem;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            transition: all 0.3s ease;
            box-shadow: 0 10px 40px var(--shadow);
        }

        .github-card:hover {
            border-color: var(--accent);
            box-shadow: 0 20px 60px rgba(230, 126, 34, 0.15);
        }

        .github-icon {
            width: 100px;
            height: 100px;
            background: var(--bg-secondary);
            border: 2px solid var(--border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 3rem;
            color: var(--text-primary);
            transition: all 0.3s ease;
        }

        .github-card:hover .github-icon {
            border-color: var(--accent);
            background: var(--accent);
            color: #fff;
            transform: scale(1.1);
        }

        .github-text {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }

        .github-text a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }

        .github-text a:hover {
            text-decoration: underline;
        }

        .btn-github {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            background: var(--accent);
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-github:hover {
            background: var(--accent-dark);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(230, 126, 34, 0.4);
        }

        /* ===== CONTACT SECTION ===== */
        .contact-section {
            background: var(--bg-secondary);
        }

        .contact-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            box-shadow: 0 10px 40px var(--shadow);
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-item:last-of-type {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--bg-secondary);
            border: 1px solid var(--border);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--accent);
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .contact-item:hover .contact-icon {
            background: var(--accent);
            color: #fff;
            border-color: var(--accent);
        }

        .contact-details h5 {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.95rem;
            color: var(--text-primary);
            margin-bottom: 0.2rem;
        }

        .contact-details p {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-secondary);
            margin: 0;
            font-size: 0.95rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            background: var(--bg-secondary);
            border: 1px solid var(--border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
            transform: translateY(-3px);
        }

        /* ===== CONTACT FORM ===== */
        .contact-form {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px var(--shadow);
        }

        .form-control {
            font-family: 'Montserrat', sans-serif;
            background: var(--bg-secondary) !important;
            border: 1px solid var(--border) !important;
            color: var(--text-primary) !important;
            padding: 1rem 1.2rem;
            border-radius: 12px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .form-control:focus {
            border-color: var(--accent) !important;
            box-shadow: 0 0 0 3px rgba(230, 126, 34, 0.15) !important;
        }

        .btn-submit {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, var(--accent), var(--accent-light));
            color: #fff;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(230, 126, 34, 0.4);
        }

        /* ===== SECTION DECORATIONS ===== */
        .section-decoration {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .about-section,
        .projects-section,
        .contact-section {
            position: relative;
        }

        .deco-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .deco-circle-1 {
            width: 300px;
            height: 300px;
            background: var(--accent);
            top: -100px;
            right: -100px;
        }

        .deco-circle-2 {
            width: 200px;
            height: 200px;
            border: 3px solid var(--accent);
            bottom: 50px;
            left: -50px;
        }

        .deco-dots {
            position: absolute;
            top: 50px;
            right: 50px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }

        .deco-dots span {
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
            opacity: 0.3;
        }

        .deco-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
            opacity: 0.2;
        }

        .deco-line-1 {
            width: 200px;
            top: 100px;
            left: 5%;
            transform: rotate(-15deg);
        }

        .deco-line-2 {
            width: 150px;
            bottom: 150px;
            right: 10%;
            transform: rotate(15deg);
        }

        /* Section Badge */
        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: var(--bg-card);
            border: 2px solid var(--border);
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .section-badge:hover {
            border-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 5px 20px var(--shadow);
        }

        .section-badge.center {
            display: flex;
            justify-content: center;
            width: fit-content;
            margin: 0 auto 1.5rem;
        }

        .badge-icon {
            color: var(--accent);
            font-size: 1.3rem;
        }

        .badge-text {
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: var(--text-primary);
        }

        .section-subtitle {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 3rem;
        }

        /* GitHub Card Title */
        .github-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }

        /* Card Corners */
        .github-card {
            position: relative;
            overflow: visible;
        }

        .card-corner {
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid var(--accent);
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        .card-corner.top-left {
            top: -10px;
            left: -10px;
            border-right: none;
            border-bottom: none;
        }

        .card-corner.top-right {
            top: -10px;
            right: -10px;
            border-left: none;
            border-bottom: none;
        }

        .card-corner.bottom-left {
            bottom: -10px;
            left: -10px;
            border-right: none;
            border-top: none;
        }

        .card-corner.bottom-right {
            bottom: -10px;
            right: -10px;
            border-left: none;
            border-top: none;
        }

        .github-card:hover .card-corner {
            opacity: 1;
            width: 30px;
            height: 30px;
        }

        /* Stat Cards */
        .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 15px 40px var(--shadow);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent), var(--accent-light));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: #fff;
        }

        .stat-number {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-primary);
            line-height: 1;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-weight: 500;
        }

        /* Contact Card Title */
        .contact-card-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border);
        }

        /* ===== FOOTER ===== */
        .footer {
            background: var(--bg-primary);
            border-top: 1px solid var(--border);
            padding: 2rem 0;
        }

        .footer p {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-muted);
            margin: 0;
        }

        .footer .social-links a {
            background: transparent;
            border: none;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 991px) {
            .hero-section {
                text-align: center;
            }

            .hero-image .img-wrapper {
                width: 280px;
                height: 340px;
                margin-top: 3rem;
            }

            .skills-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .navbar-collapse {
                background: var(--bg-card);
                padding: 1rem;
                border-radius: 15px;
                margin-top: 1rem;
                border: 1px solid var(--border);
            }

            .navbar-controls {
                justify-content: center;
                margin-top: 1rem;
            }
        }

        @media (max-width: 767px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .section-title {
                font-size: 2rem;
            }

            .github-card {
                padding: 2rem 1.5rem;
            }

            .social-sidebar {
                display: none;
            }

            .arrow-decoration {
                display: none;
            }

            .img-frame::before {
                display: none;
            }
        }

        /* ===== ALERTS ===== */
        .alert {
            font-family: 'Montserrat', sans-serif;
            border-radius: 12px;
            border: none;
            padding: 1rem 1.5rem;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
        }

        /* Navbar toggler for dark/light mode */
        .navbar-toggler {
            border-color: var(--border);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(128, 128, 128, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home"><?php echo SITE_AUTHOR; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"><?php echo $t['home']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><?php echo $t['about']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects"><?php echo $t['projects']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><?php echo $t['contact']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cv-btn" href="<?php echo CV_LINK; ?>" target="_blank">
                            <i class="bi bi-file-earmark-text me-1"></i><?php echo $t['view_cv']; ?>
                        </a>
                    </li>
                </ul>
                <div class="navbar-controls">
                    <!-- Theme Toggle -->
                    <button class="theme-toggle" id="themeToggle" title="Tema DeÄŸiÅŸtir">
                        <i class="bi bi-moon-fill"></i>
                    </button>
                    <!-- Language Switch -->
                    <div class="lang-switch">
                        <a href="?lang=tr" class="<?php echo $lang == 'tr' ? 'active' : ''; ?>">TR</a>
                        <span style="color: var(--text-muted);">|</span>
                        <a href="?lang=en" class="<?php echo $lang == 'en' ? 'active' : ''; ?>">EN</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


