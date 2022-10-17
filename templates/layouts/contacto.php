<section class="contacto" id="contacto">

    <div class="contacto__content" id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12019.095699755702!2d-103.46330589340393!3d25.565274928997457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fd99b31ec85b5%3A0xe74b0d316534be26!2sC.%20de%20Piedras%20Negras%20422%2C%20Parque%20Industrial%2C%2035078%20G%C3%B3mez%20Palacio%2C%20Dgo.!5e0!3m2!1sen!2smx!4v1665763500337!5m2!1sen!2smx"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contacto__content">

        <h2 class="title">Ponte en contacto</h2>

        <div class="contacto__form-container">

            <form class="contacto__form">
                <div class="input-group">
                    <input type="text" class="input" name="nombre" id="nombre" placeholder="Nombre y apellido *">
                    <input type="text" class="input" name="telefono" id="telefono" placeholder="Teléfono *">
                </div>
                <input type="text" class="input" name="correo" id="correo" placeholder="Correo electrónico *">
                <textarea name="mensaje" id="mensaje" rows="3" class="input" placeholder="Mensaje *"></textarea>
                <div class="g-recaptcha" data-sitekey="6LftOIoiAAAAAA3g2eIKQz-qTZm7RcWsSj_X-xoE" style="margin-top: 2%; margin:0 auto"></div>
                <p style="font-family: var(--ff-texto); color: var(--color-white); text-align: center; font-weight: bold; " id="status"></p>
                <button type="button" class="button" onclick="enviar()">ENVIAR</button>
            </form>
            
        </div>

    </div>

</section>