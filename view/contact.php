<div class="container mt-5">
        <h2 class="text-center mb-4">Contactez-nous</h2>

        <!-- Application de la classe "custom-width" pour réduire la largeur -->
        <div class="custom-width">
            <form action="controller\contact.controller.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Sujet</label>
                    <input type="text" class="form-control" id="subject" placeholder="Sujet de votre message" name="subject" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Votre message" name="message" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="send">Envoyer</button>
            </form>
        </div>
    </div>