<?php
/**
 * Site Yapılandırma Dosyası
 */

// Site Bilgileri
define('SITE_NAME', 'Fatih Çoban - Portfolyo');
define('SITE_AUTHOR', 'Fatih Çoban');

// İletişim Bilgileri
define('CONTACT_EMAIL', 'fatih@example.com');
define('CONTACT_PHONE', '+90 555 123 4567');
define('CONTACT_ADDRESS', 'İstanbul, Türkiye');

// Sosyal Medya Linkleri
define('SOCIAL_GITHUB', 'https://github.com/fatihcoban');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/in/fatihcoban');
define('SOCIAL_TWITTER', 'https://twitter.com/fatihcoban');

// CV Linki
define('CV_LINK', 'assets/cv/fatih-coban-cv.pdf');

// Hata Raporlama
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Zaman Dilimi
date_default_timezone_set('Europe/Istanbul');

// Dil Desteği
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'tr';
$translations = [
    'tr' => [
        'home' => 'Anasayfa',
        'about' => 'Hakkımda',
        'projects' => 'Projelerim',
        'contact' => 'İletişim',
        'view_cv' => 'CV Görüntüle',
        'hello' => 'Merhaba, Ben',
        'about_me' => 'Hakkımda',
        'skills' => 'Yetenekler',
        'my_projects' => 'Projelerim',
        'github_text' => 'Projelerime GitHub sayfamdan erişebilirsiniz.',
        'contact_me' => 'İletişim',
        'send_message' => 'Mesaj Gönder',
        'name' => 'Adınız',
        'email' => 'E-posta',
        'subject' => 'Konu',
        'message' => 'Mesajınız',
        'phone' => 'Telefon',
        'address' => 'Adres',
        'rights' => 'Tüm hakları saklıdır.',
    ],
    'en' => [
        'home' => 'Home',
        'about' => 'About',
        'projects' => 'Projects',
        'contact' => 'Contact',
        'view_cv' => 'View CV',
        'hello' => 'Hello, I am',
        'about_me' => 'About Me',
        'skills' => 'Skills',
        'my_projects' => 'My Projects',
        'github_text' => 'You can access my projects from my GitHub page.',
        'contact_me' => 'Contact',
        'send_message' => 'Send Message',
        'name' => 'Your Name',
        'email' => 'Email',
        'subject' => 'Subject',
        'message' => 'Your Message',
        'phone' => 'Phone',
        'address' => 'Address',
        'rights' => 'All rights reserved.',
    ]
];

$t = $translations[$lang];
?>