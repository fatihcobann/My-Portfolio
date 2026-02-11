# Kişisel Portfolyo - PHP

Modern ve responsive bir kişisel portfolyo web sitesi.

## 🚀 Özellikler

- **Responsive Tasarım**: Tüm cihazlarda mükemmel görünüm
- **Modern UI**: Bootstrap 5 ve özel CSS ile şık tasarım
- **Bölümler**:
  - Hero / Karşılama
  - Hakkımda
  - Yetenekler
  - Projeler
  - İletişim Formu
- **Animasyonlar**: Scroll animasyonları ve hover efektleri
- **PHP İletişim Formu**: Form doğrulama ve güvenlik

## 📁 Proje Yapısı

```
Portfolyom/
├── index.php              # Ana sayfa
├── includes/
│   ├── config.php         # Site yapılandırması
│   ├── header.php         # Header bölümü
│   └── footer.php         # Footer bölümü
├── assets/
│   ├── css/
│   │   └── style.css      # Özel stiller
│   ├── js/
│   │   └── main.js        # JavaScript dosyası
│   └── images/            # Görsel dosyaları
└── README.md
```

## 🛠️ Kurulum

### Gereksinimler
- PHP 7.4 veya üzeri
- Web sunucusu (Apache, Nginx, vb.) veya PHP built-in server

### Yerel Geliştirme

1. Projeyi web sunucunuzun klasörüne kopyalayın veya PHP'nin yerleşik sunucusunu kullanın:

```bash
cd Portfolyom
php -S localhost:8000
```

2. Tarayıcınızda `http://localhost:8000` adresine gidin.

### Yapılandırma

`includes/config.php` dosyasını düzenleyerek kişisel bilgilerinizi güncelleyin:

```php
define('SITE_NAME', 'İsminiz - Portfolyo');
define('SITE_AUTHOR', 'İsminiz');
define('CONTACT_EMAIL', 'email@example.com');
define('CONTACT_PHONE', '+90 555 123 4567');
define('CONTACT_ADDRESS', 'Şehir, Ülke');
define('SOCIAL_GITHUB', 'https://github.com/kullaniciadi');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/in/kullaniciadi');
define('SOCIAL_TWITTER', 'https://twitter.com/kullaniciadi');
```

## 🎨 Özelleştirme

### Renk Şeması
`assets/css/style.css` dosyasındaki CSS değişkenlerini düzenleyin:

```css
:root {
    --primary-color: #6366f1;
    --primary-dark: #4f46e5;
    --secondary-color: #0ea5e9;
    /* ... diğer renkler */
}
```

### Görsel Ekleme
- `assets/images/` klasörüne profil fotoğrafınızı ve proje görsellerinizi ekleyin
- CSS'deki placeholder'ları gerçek görsellerle değiştirin

## 📧 İletişim Formu

İletişim formu PHP ile çalışmaktadır. Gerçek mail gönderimi için:

1. Sunucunuzda PHP mail fonksiyonunun aktif olduğundan emin olun
2. Veya PHPMailer gibi bir kütüphane kullanın
3. SMTP ayarlarını yapılandırın

## 📄 Lisans

Bu proje MIT lisansı altında lisanslanmıştır.

## 🤝 Katkıda Bulunma

1. Bu projeyi fork edin
2. Feature branch'i oluşturun (`git checkout -b feature/yeniOzellik`)
3. Değişikliklerinizi commit edin (`git commit -m 'Yeni özellik eklendi'`)
4. Branch'inizi push edin (`git push origin feature/yeniOzellik`)
5. Pull Request açın

www.fatihcbn.com
