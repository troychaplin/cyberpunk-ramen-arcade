<?php
/**
 * Title: About Section with Portrait and Bio Stats
 * Description: An about section featuring a portrait, bio, and key stats.
 * Slug: cyberpunk-ramen-arcade/about-section-with-portrait-and-bio-stats
 * Categories: cyberpunk-ramen-arcade
 * Post Types: page
 */
?>
<!-- wp:group {"align":"full","metadata":{"name":"About Section"},"className":"about-section","tagName":"section","layout":{"type":"constrained"}} -->
<section id="about" class="wp-block-group alignfull about-section">
  <!-- wp:group {"className":"section-glow section-glow\u002d\u002dcyan-about miles-editor-hidden"} -->
  <div class="wp-block-group section-glow section-glow--cyan-about miles-editor-hidden"></div>
  <!-- /wp:group -->

  <!-- wp:group {"metadata":{"name":"About Inner"},"className":"about-inner"} -->
  <div class="wp-block-group about-inner">
    <!-- wp:group {"metadata":{"name":"Section Header"},"className":"section-header animate-on-scroll"} -->
    <div class="wp-block-group section-header animate-on-scroll">
      <!-- wp:paragraph {"className":"section-tag"} -->
      <p class="wp-block-paragraph section-tag">// whoami</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":2,"className":"section-title"} -->
      <h2 class="wp-block-heading section-title">About Troy</h2>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"metadata":{"name":"About Layout"},"className":"about-layout"} -->
    <div class="wp-block-columns about-layout">
      <!-- wp:column {"metadata":{"name":"About Portrait"},"className":"about-portrait animate-on-scroll"} -->
      <div class="wp-block-column about-portrait animate-on-scroll">
        <!-- wp:group {"metadata":{"name":"Portrait Frame"},"className":"about-portrait__frame"} -->
        <div class="wp-block-group about-portrait__frame">
          <!-- wp:image {"sizeSlug":"full","className":"about-portrait__img"} -->
          <figure class="wp-block-image size-full about-portrait__img"><img src="http://localhost:8896/wp-content/uploads/2026/02/troy-portrait.jpg" alt="Troy Chaplin, frontend developer" width="480" height="600"></figure>
          <!-- /wp:image -->

          <!-- wp:group {"className":"about-portrait__scanlines miles-editor-hidden"} -->
          <div class="wp-block-group about-portrait__scanlines miles-editor-hidden"></div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Portrait Status"},"className":"about-portrait__status"} -->
        <div class="wp-block-group about-portrait__status">
          <!-- wp:paragraph -->
          <p class="wp-block-paragraph"><span class="hero-footer-dot"></span> <span>Currently deploying on a Friday</span></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"metadata":{"name":"About Bio"},"className":"about-bio"} -->
      <div class="wp-block-column about-bio">
        <!-- wp:group {"metadata":{"name":"Bio Block"},"className":"about-bio__block animate-on-scroll"} -->
        <div class="wp-block-group about-bio__block animate-on-scroll">
          <!-- wp:paragraph {"className":"about-bio__lead"} -->
          <p class="wp-block-paragraph about-bio__lead">I'm a frontend developer who builds things at the intersection of <span class="text-cyan">pixel-perfect craft</span> and <span class="text-pink">controlled chaos</span>.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Bio Block"},"className":"about-bio__block animate-on-scroll"} -->
        <div class="wp-block-group about-bio__block animate-on-scroll">
          <!-- wp:paragraph -->
          <p class="wp-block-paragraph">Think of it like a bonsai tree growing out of a server rack — meticulous attention to detail, wrapped in an energy that says "this person definitely mass deploys on Fridays."</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Bio Block"},"className":"about-bio__block animate-on-scroll"} -->
        <div class="wp-block-group about-bio__block animate-on-scroll">
          <!-- wp:paragraph -->
          <p class="wp-block-paragraph">I specialize in WordPress (the whacky kind), React applications that actually ship, and CSS animations that push the boundaries of what's reasonable. My code is well-documented, well-tested, and occasionally contains comments that read like haiku.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Bio Block"},"className":"about-bio__block animate-on-scroll"} -->
        <div class="wp-block-group about-bio__block animate-on-scroll">
          <!-- wp:paragraph -->
          <p class="wp-block-paragraph">When I'm not building for the web, I'm probably collecting vintage synthesizers, arguing about whitespace with nobody in particular, or running a neon-lit ramen shop in my imagination.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"About Stats"},"className":"about-stats animate-on-scroll"} -->
        <div class="wp-block-group about-stats animate-on-scroll">
          <!-- wp:group {"metadata":{"name":"About Stat"},"className":"about-stat"} -->
          <div class="wp-block-group about-stat">
            <!-- wp:paragraph {"className":"about-stat__number"} -->
            <p class="wp-block-paragraph about-stat__number" id="stat-years">10+</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stat__label"} -->
            <p class="wp-block-paragraph about-stat__label">years building<br>for the web</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group {"metadata":{"name":"About Stat"},"className":"about-stat"} -->
          <div class="wp-block-group about-stat">
            <!-- wp:paragraph {"className":"about-stat__number"} -->
            <p class="wp-block-paragraph about-stat__number" id="stat-projects">80+</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stat__label"} -->
            <p class="wp-block-paragraph about-stat__label">projects shipped<br>(many on Fridays)</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group {"metadata":{"name":"About Stat"},"className":"about-stat"} -->
          <div class="wp-block-group about-stat">
            <!-- wp:paragraph {"className":"about-stat__number"} -->
            <p class="wp-block-paragraph about-stat__number" id="stat-posts">50+</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stat__label"} -->
            <p class="wp-block-paragraph about-stat__label">blog posts &amp;<br>forbidden scrolls</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"About Stack"},"className":"about-stack animate-on-scroll"} -->
        <div class="wp-block-group about-stack animate-on-scroll">
          <!-- wp:heading {"level":3,"className":"about-stack__title"} -->
          <h3 class="wp-block-heading about-stack__title">Tech Stack</h3>
          <!-- /wp:heading -->

          <!-- wp:group {"metadata":{"name":"Stack List"},"className":"about-stack__list"} -->
          <div class="wp-block-group about-stack__list">
            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">WordPress</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">PHP</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">React</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">Next.js</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">JavaScript</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">TypeScript</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">CSS / SCSS</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">Gutenberg</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">GraphQL</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">Node.js</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">Three.js</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"about-stack__item"} -->
            <p class="wp-block-paragraph about-stack__item">GSAP</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->