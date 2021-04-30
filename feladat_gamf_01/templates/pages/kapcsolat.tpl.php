<?php
if (isset($name) && isset($email) && isset($message) && isset($subject) && $errorMessage === '') {

    echo $uzenet;
    ?>
    <p>Az elküldött adatok:</p>
    <p>Név: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Üzenet: <?php echo $message; ?></p>
    <p>Tárgy: <?php echo $subject; ?></p>

    <?php
} else {
    if (isset($errorMessage) && $errorMessage !== '') {
        echo 'Hiba: ' . $errorMessage;
    }
    ?>

    <form id="contact-form" name="contact-form" action="?oldal=kapcsolat" method="POST">
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="name" class="">Név</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="email" class="">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                    <label for="subject" class="">Tárgy</label>
                    <input type="text" id="subject" name="subject" class="form-control" required>
                </div>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

                <div class="md-form">
                    <label for="message">Üzenet</label>
                    <textarea type="text" id="message" name="message" rows="2"
                              class="form-control md-textarea" required></textarea>
                </div>

            </div>
        </div>
        <!--Grid row-->
        <div class="text-center text-md-left">
            <button class="btn btn-danger" onclick="return validateForm();">Küldés</button>
        </div>
    </form>


    <div class="status"></div>

<?php
}
?>