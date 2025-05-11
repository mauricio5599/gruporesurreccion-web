<?php get_header(); ?>

<main class="container">
  <section id="servicios">
    <?php get_template_part('template-parts/hero'); ?>
  </section>

  <section id="cotizar">
    <h2>Cotiza aquí</h2>
    <p>Déjanos tus datos y te contactaremos pronto:</p>
    <form>
      <input type="text" name="nombre" placeholder="Nombre" required>
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="tel" name="telefono" placeholder="Número telefónico" required>
      <textarea name="mensaje" placeholder="Escribe tu consulta..." required></textarea>
      <button type="submit">Enviar mensaje</button>
    </form>
  </section>
</main>

<?php get_footer(); ?>
