<?php
/**
 * Title: 6-Item Blog Grid with Featured Card
 * Slug: cyberpunk-ramen-arcade/6-item-blog-grid-with-featured-card
 * Categories: 
 */
?>
<!-- wp:group {"align":"full","metadata":{"name":"Blog Section"},"className":"blog-section","tagName":"section","layout":{"type":"constrained"}} -->
<section id="blog" class="wp-block-group alignfull blog-section">
  <!-- wp:group {"className":"section-glow section-glow\u002d\u002dpink miles-editor-hidden"} -->
  <div class="wp-block-group section-glow section-glow--pink miles-editor-hidden"></div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"section-glow section-glow\u002d\u002dcyan miles-editor-hidden"} -->
  <div class="wp-block-group section-glow section-glow--cyan miles-editor-hidden"></div>
  <!-- /wp:group -->

  <!-- wp:group {"metadata":{"name":"Blog Inner"},"className":"blog-inner"} -->
  <div class="wp-block-group blog-inner">
    <!-- wp:group {"metadata":{"name":"Section Header"},"className":"section-header animate-on-scroll"} -->
    <div class="wp-block-group section-header animate-on-scroll">
      <!-- wp:paragraph {"className":"section-tag"} -->
      <p class="wp-block-paragraph section-tag">// the_forbidden_scrolls</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":2,"className":"section-title"} -->
      <h2 class="wp-block-heading section-title">Blog &amp; Tutorials</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"section-desc"} -->
      <p class="wp-block-paragraph section-desc">CSS Grid tricks, WordPress hooks, and forbidden knowledge scrolls.<br>Everything is actually correct and well-documented. Probably.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Blog Featured"},"className":"blog-featured animate-on-scroll"} -->
    <div class="wp-block-group blog-featured animate-on-scroll">
      <!-- wp:group {"metadata":{"name":"Featured Blog Card"},"className":"blog-card blog-card\u002d\u002dfeatured","tagName":"article","style":{"background":{"backgroundImage":{"url":"http://localhost:8896/wp-content/uploads/2026/02/blog-featured.jpg"},"backgroundSize":"cover","backgroundPosition":"center center"}}} -->
      <article class="wp-block-group blog-card blog-card--featured">
        <!-- wp:group {"className":"blog-card__overlay miles-editor-hidden"} -->
        <div class="wp-block-group blog-card__overlay miles-editor-hidden"></div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Blog Card Content"},"className":"blog-card__content"} -->
        <div class="wp-block-group blog-card__content">
          <!-- wp:group {"metadata":{"name":"Blog Card Meta"},"className":"blog-card__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
          <div class="wp-block-group blog-card__meta">
            <!-- wp:paragraph {"className":"blog-card__category blog-card__category\u002d\u002dcss"} -->
            <p class="wp-block-paragraph blog-card__category blog-card__category--css">CSS Animation</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"blog-card__date"} -->
            <p class="wp-block-paragraph blog-card__date">2024.12.15</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:heading {"level":3,"className":"blog-card__title"} -->
          <h3 class="wp-block-heading blog-card__title">The CSS Animation That Shouldn't Work (But Does at 3AM)</h3>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"className":"blog-card__excerpt"} -->
          <p class="wp-block-paragraph blog-card__excerpt">A deep dive into animating CSS custom properties, abusing @keyframes, and why your browser forgives you when nobody else will.</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__link"} -->
          <p class="wp-block-paragraph blog-card__link">Read the scroll →</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </article>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Blog Grid"},"className":"blog-grid"} -->
    <div class="wp-block-group blog-grid">
      <!-- wp:group {"metadata":{"name":"Blog Card"},"className":"blog-card animate-on-scroll","tagName":"article"} -->
      <article class="wp-block-group blog-card animate-on-scroll">
        <!-- wp:group {"metadata":{"name":"Blog Card Header"},"className":"blog-card__header","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group blog-card__header">
          <!-- wp:paragraph {"className":"blog-card__category blog-card__category\u002d\u002dwp"} -->
          <p class="wp-block-paragraph blog-card__category blog-card__category--wp">WordPress</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__date"} -->
          <p class="wp-block-paragraph blog-card__date">2024.11.28</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":3,"className":"blog-card__title"} -->
        <h3 class="wp-block-heading blog-card__title">WordPress Hooks: A Conspiracy Theorist's Guide</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"blog-card__excerpt"} -->
        <p class="wp-block-paragraph blog-card__excerpt">Every action and filter hook is connected. I have the red strings to prove it. Here's 14 hooks you're not using but should be.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"metadata":{"name":"Blog Card Footer"},"className":"blog-card__footer","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group blog-card__footer">
          <!-- wp:paragraph {"className":"blog-card__read-time"} -->
          <p class="wp-block-paragraph blog-card__read-time">8 min read</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__link"} -->
          <p class="wp-block-paragraph blog-card__link">Read →</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </article>
      <!-- /wp:group -->

      <!-- wp:group {"metadata":{"name":"Blog Card"},"className":"blog-card animate-on-scroll","tagName":"article"} -->
      <article class="wp-block-group blog-card animate-on-scroll">
        <!-- wp:group {"metadata":{"name":"Blog Card Header"},"className":"blog-card__header","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group blog-card__header">
          <!-- wp:paragraph {"className":"blog-card__category blog-card__category\u002d\u002dreact"} -->
          <p class="wp-block-paragraph blog-card__category blog-card__category--react">React</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__date"} -->
          <p class="wp-block-paragraph blog-card__date">2024.11.12</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":3,"className":"blog-card__title"} -->
        <h3 class="wp-block-heading blog-card__title">Building a Ridiculous React Dashboard (That Actually Ships)</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"blog-card__excerpt"} -->
        <p class="wp-block-paragraph blog-card__excerpt">How I built a client dashboard with animated state transitions, custom hooks that should be illegal, and zero regrets.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"metadata":{"name":"Blog Card Footer"},"className":"blog-card__footer","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group blog-card__footer">
          <!-- wp:paragraph {"className":"blog-card__read-time"} -->
          <p class="wp-block-paragraph blog-card__read-time">12 min read</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__link"} -->
          <p class="wp-block-paragraph blog-card__link">Read →</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </article>
      <!-- /wp:group -->

      <!-- wp:group {"metadata":{"name":"Blog Card"},"className":"blog-card animate-on-scroll","tagName":"article"} -->
      <article class="wp-block-group blog-card animate-on-scroll">
        <!-- wp:group {"metadata":{"name":"Blog Card Header"},"className":"blog-card__header","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group blog-card__header">
          <!-- wp:paragraph {"className":"blog-card__category blog-card__category\u002d\u002dcss"} -->
          <p class="wp-block-paragraph blog-card__category blog-card__category--css">CSS Grid</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__date"} -->
          <p class="wp-block-paragraph blog-card__date">2024.10.30</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":3,"className":"blog-card__title"} -->
        <h3 class="wp-block-heading blog-card__title">CSS Grid Tricks Your Coworkers Will Question</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"blog-card__excerpt"} -->
        <p class="wp-block-paragraph blog-card__excerpt">Subgrid, named areas, and auto-fit layouts that make designers weep tears of joy. Tested in production. On a Friday.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"metadata":{"name":"Blog Card Footer"},"className":"blog-card__footer","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group blog-card__footer">
          <!-- wp:paragraph {"className":"blog-card__read-time"} -->
          <p class="wp-block-paragraph blog-card__read-time">6 min read</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__link"} -->
          <p class="wp-block-paragraph blog-card__link">Read →</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </article>
      <!-- /wp:group -->

      <!-- wp:group {"metadata":{"name":"Blog Card"},"className":"blog-card animate-on-scroll","tagName":"article"} -->
      <article class="wp-block-group blog-card animate-on-scroll">
        <!-- wp:group {"metadata":{"name":"Blog Card Header"},"className":"blog-card__header","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group blog-card__header">
          <!-- wp:paragraph {"className":"blog-card__category blog-card__category\u002d\u002dwp"} -->
          <p class="wp-block-paragraph blog-card__category blog-card__category--wp">PHP / WordPress</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__date"} -->
          <p class="wp-block-paragraph blog-card__date">2024.10.15</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":3,"className":"blog-card__title"} -->
        <h3 class="wp-block-heading blog-card__title">Custom Gutenberg Blocks: The Unhinged Way</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"blog-card__excerpt"} -->
        <p class="wp-block-paragraph blog-card__excerpt">Forget the documentation. Here's how to build Gutenberg blocks with dynamic rendering, custom controls, and chaotic good energy.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"metadata":{"name":"Blog Card Footer"},"className":"blog-card__footer","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group blog-card__footer">
          <!-- wp:paragraph {"className":"blog-card__read-time"} -->
          <p class="wp-block-paragraph blog-card__read-time">15 min read</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__link"} -->
          <p class="wp-block-paragraph blog-card__link">Read →</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </article>
      <!-- /wp:group -->

      <!-- wp:group {"metadata":{"name":"Blog Card"},"className":"blog-card animate-on-scroll","tagName":"article"} -->
      <article class="wp-block-group blog-card animate-on-scroll">
        <!-- wp:group {"metadata":{"name":"Blog Card Header"},"className":"blog-card__header","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group blog-card__header">
          <!-- wp:paragraph {"className":"blog-card__category blog-card__category\u002d\u002dreact"} -->
          <p class="wp-block-paragraph blog-card__category blog-card__category--react">React + Three.js</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__date"} -->
          <p class="wp-block-paragraph blog-card__date">2024.09.22</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":3,"className":"blog-card__title"} -->
        <h3 class="wp-block-heading blog-card__title">3D in the Browser: A Love Letter to WebGL</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"blog-card__excerpt"} -->
        <p class="wp-block-paragraph blog-card__excerpt">Integrating Three.js with React without your laptop catching fire. Includes performance tips and existential WebGL wisdom.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"metadata":{"name":"Blog Card Footer"},"className":"blog-card__footer","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group blog-card__footer">
          <!-- wp:paragraph {"className":"blog-card__read-time"} -->
          <p class="wp-block-paragraph blog-card__read-time">10 min read</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__link"} -->
          <p class="wp-block-paragraph blog-card__link">Read →</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </article>
      <!-- /wp:group -->

      <!-- wp:group {"metadata":{"name":"Blog Card"},"className":"blog-card animate-on-scroll","tagName":"article"} -->
      <article class="wp-block-group blog-card animate-on-scroll">
        <!-- wp:group {"metadata":{"name":"Blog Card Header"},"className":"blog-card__header","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group blog-card__header">
          <!-- wp:paragraph {"className":"blog-card__category blog-card__category\u002d\u002dcss"} -->
          <p class="wp-block-paragraph blog-card__category blog-card__category--css">CSS / UX</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__date"} -->
          <p class="wp-block-paragraph blog-card__date">2024.09.05</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":3,"className":"blog-card__title"} -->
        <h3 class="wp-block-heading blog-card__title">The Sacred Art of Whitespace (A Retired Librarian's Manifesto)</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"blog-card__excerpt"} -->
        <p class="wp-block-paragraph blog-card__excerpt">Strong opinions about padding, margins, and the void between elements. Why breathing room is the difference between chaos and class.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"metadata":{"name":"Blog Card Footer"},"className":"blog-card__footer","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group blog-card__footer">
          <!-- wp:paragraph {"className":"blog-card__read-time"} -->
          <p class="wp-block-paragraph blog-card__read-time">5 min read</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"blog-card__link"} -->
          <p class="wp-block-paragraph blog-card__link">Read →</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </article>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Blog CTA"},"className":"blog-cta animate-on-scroll"} -->
    <div class="wp-block-group blog-cta animate-on-scroll">
      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"url":"#blog","className":"btn-outline"} -->
        <div class="wp-block-button btn-outline"><a class="wp-block-button__link wp-element-button" href="#blog">View All Scrolls</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->