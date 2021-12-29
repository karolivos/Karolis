<section class="contact" id="contact">
    <div class="container">
        <div class="section-heading">
            <h2>Contac Us</h2>
            <p>We know what we need to do</p>
        </div>
        <div class="contact-icons flex-container">
            <div class="contact-tel">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:555-222-333">555-222-333</a>
            </div>
            <div class="contact-map">
                <i class="fas fa-map-marker-alt"></i>
                <p>Here is some adress</p>
            </div>
            <div class="contact-email">
                <i class="fas fa-envelope"></i>
                <a href="email:someemail@hotmail.com">someemail@hotmail.com</a>
            </div>
        </div>
        <div class="section-content">
            <form class="contact-form" action="index.php" method="POST">
                <div class="input-row">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="number" placeholder="Number" required>
                </div>
                <textarea name="message" placeholder="Write your Message here..." required></textarea>
                <button name="submit" type="submit" id="contact-submit">Send</button>
            </form>
        </div>
    </div>
</section>