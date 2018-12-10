<html>
<head>
    <title>Membuat Contact Form dengan PHP - ePlusGo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <?php if(!empty($notify)){ ?>
                <p class="notify <?php echo !empty($notifyClass)?$notifyClass:''; ?>"><?php echo $notify; ?></p>
            <?php } ?>
            <h3>Contact Form</h3>
            <h4>Hubungi kami dengan mengisi isian dibawah</h4>
            <fieldset>
                <input placeholder="Aldo" type="text" name="Aldo" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="sigedogan22@gmail.com" type="text" name="sigedogan22@gmail.com" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Subject (optional)" type="text" name="subject" tabindex="4" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Contoh1" name="message" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Mengirim pesan">Kirim</button>
            </fieldset>
        </form>
    </div>
</body>
</html>