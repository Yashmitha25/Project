<!DOCTYPE html>
<html>
    <head>
        <title>PharMed</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    </head>
<body>
    <section class="showcase">
        <header>
            <h2 class="logo">PharMed</h2>
            <div class="toggle active"></div>
        </header> 
        <video src="med.mp4" muted loop autoplay></video>
        <div class="text">
            <h2>Heading 1</h2>
            <h3>Heading Line 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Iusto sint molestiae eveniet vel 
            \debitis at deserunt sed ipsa voluptas quam!</p>
            <a href="login_form.php">User</a>
            <a href="login1.php">Doctor</a>
        </div>
        <ul class="social">
            <li><a href="#"><img src="facebook.png"></a></li>
            <li><a href="#"><img src="twitter.png"></a></li>
            <li><a href="#"><img src="instagram.png"></a></li>
        </ul>

    </section>
    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Home.html">Testimonials</a></li>
            <li><a href="Contact.html">Contact Us</a></li>
            
        </ul>
    </div>
    <script>
        const menuToggle = document.querySelector('.toggle')
        const showcase = document.querySelector('.showcase')

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active')
            showcase.classList.toggle('active')
        })
    </script>
</body>
</html>