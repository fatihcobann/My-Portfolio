<?php
include 'includes/header.php';
?>

<!-- Hero Section / Anasayfa -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hero-content">
                    <!-- İsim -->
                    <h1 class="hero-title" style="margin-bottom: 2rem;"><?php echo SITE_AUTHOR; ?></h1>

                    <!-- Ok dekorasyonu -->
                    <div class="arrow-decoration arrow-to-image">
                        <svg class="arrow-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 50 Q30 20 60 30 T90 20" stroke="var(--text-primary)" stroke-width="2"
                                fill="none" stroke-linecap="round" />
                            <path d="M80 15 L90 20 L82 28" stroke="var(--text-primary)" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <!-- Tanıtım metni -->
                    <div class="hero-intro">
                        <div class="intro-line"></div>
                        <div class="intro-text">
                            Ben, <?php echo SITE_AUTHOR; ?><br>
                            <span class="highlight-text underline-decoration">Yazılım Geliştirme</span>,<br>
                            <span class="highlight-text">Web Tasarım</span>,<br>
                            <span class="highlight-text">E-Ticaret ve Pazarlama</span><br>
                            üzerinde çalışmalar yapıyorum<span class="handwritten" style="margin-left: 5px;">~</span>
                        </div>
                    </div>

                    <!-- El yazısı çizgi dekorasyonu -->
                    <svg width="120" height="30" viewBox="0 0 120 30" fill="none"
                        style="margin-left: 50px; margin-top: -10px;">
                        <path d="M5 15 Q20 5 40 15 T80 15 T115 10" stroke="var(--text-primary)" stroke-width="2"
                            fill="none" stroke-linecap="round" />
                        <path d="M100 5 L115 10 L105 18" stroke="var(--text-primary)" stroke-width="2" fill="none"
                            stroke-linecap="round" />
                    </svg>

                    <!-- Aşağı kaydır butonu -->
                    <a href="#about" class="scroll-indicator">
                        <div class="scroll-icon">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                        <span class="scroll-text">Aşağıya Kaydır</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="hero-image">
                    <div class="img-frame">
                        <div class="img-wrapper">
                            <!-- Profil fotoğrafı: assets/images/profile.jpg -->
                            <img src="assets/images/profile.jpg" alt="<?php echo SITE_AUTHOR; ?>"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="placeholder-icon" style="display:none;">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <!-- Köşe dekorasyonları -->
                        <div class="img-corner-decoration corner-bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating elements -->
    <div class="floating-element floating-circle" style="top: 20%; left: 10%;"></div>
    <div class="floating-element floating-square" style="top: 70%; left: 5%;"></div>
    <div class="floating-element floating-dots" style="bottom: 15%; right: 15%;">
        <span></span><span></span><span></span>
    </div>
</section>

<!-- About Section / Hakkımda -->
<section id="about" class="about-section">
    <div class="container">
        <!-- Dekoratif elementler -->
        <div class="section-decoration">
            <div class="deco-circle deco-circle-1"></div>
            <div class="deco-circle deco-circle-2"></div>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="about-image">
                    <!-- Hakkımda fotoğrafı: assets/images/about.jpg -->
                    <img src="assets/images/about.jpg" alt="<?php echo SITE_AUTHOR; ?>"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="placeholder-icon" style="display:none;">
                        <i class="bi bi-code-slash"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="section-badge">
                    <span class="badge-icon"><i class="bi bi-person-fill"></i></span>
                    <span class="badge-text">BEN KİMİM?</span>
                </div>
                <div class="section-line"></div>
                <p class="about-text">
                    Ben Fatih Çoban,
                    Yazılım Geliştirme, Web Tasarım ve e-ticaret alanlarına derin bir tutku duyuyorum. Algoritma ve
                    problem çözmede kendimi başarılı görüyor, analitik düşünme yeteneğimle karmaşık sorunlara yaratıcı
                    çözümler üretmeyi seviyorum. Yeni teknolojileri takip ederek kendimi sürekli geliştirmeye
                    odaklanıyorum ve öğrendiğim bilgileri projelerimde uygulamaktan keyif alıyorum.
                </p>


                <!-- Skills / Yetenekler -->
                <p class="skills-text" data-aos="fade-up">
                    <strong>Yeteneklerim:</strong> HTML, CSS, Python, PHP, Java
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section / Projelerim -->
<section id="projects" class="projects-section">
    <div class="container">
        <!-- Dekoratif elementler -->
        <div class="section-decoration">
            <div class="deco-dots">
                <span></span><span></span><span></span><span></span>
            </div>
        </div>

        <div class="section-badge center" data-aos="fade-up">
            <span class="badge-icon"><i class="bi bi-folder-fill"></i></span>
            <span class="badge-text">PROJELERİM</span>
        </div>
        <div class="section-line center" data-aos="fade-up"></div>

        <div class="github-card" data-aos="zoom-in">
            <div class="github-icon">
                <i class="bi bi-github"></i>
            </div>
            <h3 class="github-title">Projelerimi Keşfet</h3>
            <p class="github-text">
                <?php
                $github_text = $t['github_text'];
                $github_link = '<a href="' . SOCIAL_GITHUB . '" target="_blank">GitHub</a>';
                echo str_replace('GitHub', $github_link, $github_text);
                ?>
            </p>
            <a href="<?php echo SOCIAL_GITHUB; ?>" target="_blank" class="btn-github">
                <i class="bi bi-github"></i> GitHub Profile
            </a>

            <!-- Dekoratif köşe -->
            <div class="card-corner top-left"></div>
            <div class="card-corner top-right"></div>
            <div class="card-corner bottom-left"></div>
            <div class="card-corner bottom-right"></div>
        </div>
    </div>
</section>

<!-- Contact Section / İletişim -->
<section id="contact" class="contact-section">
    <div class="container">
        <!-- Dekoratif elementler -->
        <div class="section-decoration">
            <div class="deco-line deco-line-1"></div>
            <div class="deco-line deco-line-2"></div>
        </div>

        <div class="section-badge center" data-aos="fade-up">
            <span class="badge-icon"><i class="bi bi-chat-dots-fill"></i></span>
            <span class="badge-text">İLETİŞİME GEÇ</span>
        </div>
        <div class="section-line center" data-aos="fade-up"></div>

        <p class="section-subtitle text-center" data-aos="fade-up">
            Bir projeniz mi var? Birlikte çalışalım!
        </p>

        <div class="row g-4">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="contact-card">
                    <h4 class="contact-card-title">İletişim Bilgileri</h4>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h5><?php echo $t['email']; ?></h5>
                            <p><?php echo CONTACT_EMAIL; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h5><?php echo $t['phone']; ?></h5>
                            <p><?php echo CONTACT_PHONE; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h5><?php echo $t['address']; ?></h5>
                            <p><?php echo CONTACT_ADDRESS; ?></p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="<?php echo SOCIAL_GITHUB; ?>" target="_blank"><i class="bi bi-github"></i></a>
                        <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <?php
                $message_sent = false;
                $error_message = '';

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
                    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
                    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
                    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
                    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

                    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                        $error_message = $lang == 'tr' ? 'Lütfen tüm alanları doldurun.' : 'Please fill in all fields.';
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error_message = $lang == 'tr' ? 'Geçerli bir email adresi girin.' : 'Please enter a valid email address.';
                    } else {
                        $message_sent = true;
                    }
                }
                ?>

                <?php if ($message_sent): ?>
                    <div class="alert alert-success">
                        <i class="bi bi-check-circle me-2"></i>
                        <?php echo $lang == 'tr' ? 'Mesajınız başarıyla gönderildi!' : 'Your message has been sent successfully!'; ?>
                    </div>
                <?php endif; ?>

                <?php if ($error_message): ?>
                    <div class="alert alert-danger">
                        <i class="bi bi-exclamation-circle me-2"></i><?php echo $error_message; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="#contact" class="contact-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="<?php echo $t['name']; ?>"
                                required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control"
                                placeholder="<?php echo $t['email']; ?>" required>
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" class="form-control"
                                placeholder="<?php echo $t['subject']; ?>" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" rows="5"
                                placeholder="<?php echo $t['message']; ?>" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="contact_submit" class="btn-submit">
                                <i class="bi bi-send"></i> <?php echo $t['send_message']; ?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>