<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İstek ve Şikayet Formu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/public/assets/css/fontAwesome.css">
<link rel="stylesheet" href="/public/assets/css/light-box.css">
<link rel="stylesheet" href="/public/assets/css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sofia&display=swap" rel="stylesheet">
</head>
<body>

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Müşteri Şikayet ve Talep Formu</h2>
            <div class="contact-content">
                <div class="column right">
                    <div class="text">Bizimle İletişime Geçin</div>

                    <form action="index.php" method="post" onsubmit="return validateForm()">
                        <div class="fields">
                        <div class="custom-select" style="width: 100%; max-width: 400px;">
    <select name="selection" required>
        <option value="0" disabled selected>Bir neden bildirin...</option>
        <option value="Şikayette bulunmak istiyorum">Şikayette bulunmak istiyorum</option>
        <option value="Talepte bulunmak istiyorum">Talepte bulunmak istiyorum</option>
    </select>
</div>
                                
                            <div class="field">
                                <input type="text" name="konu" placeholder="Başlık" required>
                            </div>
                            
                            <div class="field textarea">
                                <textarea name="mesaj" cols="30" rows="10" placeholder="Mesajınız..." required></textarea>
                            </div>
                            <div class="button-area">
                                <input type="submit" class="btn" value="İletişime Geç">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {

    });
</script>
    
</body>
</html>

<?php
include("baglanti.php");

if(isset($_POST["selection"], $_POST["konu"], $_POST["mesaj"])){
    $Neden = $_POST["selection"];
    $Baslik = $_POST["konu"];
    $Mesaj = $_POST["mesaj"];

    $ekle = "INSERT INTO iletisim (Neden, Baslik, Mesaj) VALUES ('".$Neden."', '".$Baslik."', '".$Mesaj."')";

    if($baglan->query($ekle) === TRUE){
        echo "<script>alert('Mesajınız başarıyla gönderilmiştir.')</script>";
    } else {
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu.')</script>";
    }
}
?>


