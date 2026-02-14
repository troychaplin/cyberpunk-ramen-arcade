<?php
/**
 * Title: Cyberpunk Post Template with Header, Content & Footer
 * Slug: cyberpunk-ramen-arcade/cyberpunk-post-template-with-header-content-footer
 * Categories: 
 */
?>
<!-- wp:group {"align":"full","metadata":{"name":"Post Header Zone"},"className":"post-header-zone","tagName":"section"} -->
<section class="wp-block-group alignfull post-header-zone">
<!-- wp:group {"metadata":{"name":"Post Header Inner"},"className":"post-header__inner"} -->
<div class="wp-block-group post-header__inner">
<!-- wp:heading {"level":1,"className":"neon-post-title animate-on-scroll"} -->
<h1 class="wp-block-heading neon-post-title animate-on-scroll">CSS Grid Forbidden Techniques: How I Stopped Worrying and Learned to Love Subgrid</h1>
<!-- /wp:heading -->
<!-- wp:group {"metadata":{"name":"HUD Metadata"},"className":"hud-metadata animate-on-scroll","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group hud-metadata animate-on-scroll">
<!-- wp:paragraph {"className":"hud-stat"} -->
<p class="wp-block-paragraph hud-stat">Dec 13, 2024</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hud-separator"} -->
<p class="wp-block-paragraph hud-separator">·</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hud-stat hud-read-time"} -->
<p class="wp-block-paragraph hud-stat hud-read-time">☕ 5 min read</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hud-separator"} -->
<p class="wp-block-paragraph hud-separator">·</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hud-stat hud-categories"} -->
<p class="wp-block-paragraph hud-stat hud-categories"><a href="#">CSS Wizardry</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"metadata":{"name":"Arcade Share Bar"},"className":"arcade-share-bar animate-on-scroll","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group arcade-share-bar animate-on-scroll">
<!-- wp:paragraph {"className":"share-label"} -->
<p class="wp-block-paragraph share-label">SHARE //</p>
<!-- /wp:paragraph -->
<!-- wp:group {"metadata":{"name":"Arcade Buttons"},"className":"arcade-buttons","layout":{"type":"flex"}} -->
<div class="wp-block-group arcade-buttons">
<!-- wp:paragraph {"className":"arcade-btn"} -->
<p class="wp-block-paragraph arcade-btn">𝕏</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"arcade-btn"} -->
<p class="wp-block-paragraph arcade-btn">in</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"arcade-btn"} -->
<p class="wp-block-paragraph arcade-btn">✉</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"arcade-btn"} -->
<p class="wp-block-paragraph arcade-btn">🔗</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","metadata":{"name":"Reading Zone"},"className":"reading-zone","tagName":"section"} -->
<section class="wp-block-group alignfull reading-zone">
<!-- wp:group {"metadata":{"name":"Reading Zone Inner"},"className":"reading-zone__inner"} -->
<div class="wp-block-group reading-zone__inner">
<!-- wp:group {"metadata":{"name":"Post Reading Content"},"className":"post-reading-content animate-on-scroll"} -->
<div class="wp-block-group post-reading-content animate-on-scroll">
<!-- wp:paragraph -->
<p>Listen. I know what you're thinking. <em>"Subgrid? In 2024? On purpose?"</em> But hear me out, because what I'm about to show you will fundamentally rewire how you think about component-level layout in CSS. And yes, it works in production. I deployed this on a Friday.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">The Problem Nobody Talks About</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Every frontend developer has stared at a <code>grid-template-columns</code> declaration at 2am and thought, <strong>"there has to be a better way."</strong> Nested components that need to align with their parent grid have historically required either:</p>
<!-- /wp:paragraph -->
<!-- wp:list {"metadata":{"name":"Approaches List"}} -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>Passing grid values down through CSS custom properties like some kind of variable-smuggling operation</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Abandoning nested components entirely and going full flat-grid (the coward's path)</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Just hardcoding pixel values and praying (the chaos path)</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph -->
<p>Subgrid eliminates all of this. Your children can participate in the parent grid track sizing. It's like giving your components X-ray vision into the layout context they live in.</p>
<!-- /wp:paragraph -->
<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>The best CSS is the CSS you don't have to write twice. Subgrid isn't a feature — it's an apology from the spec authors for making us wait this long.</p>
<!-- /wp:paragraph --><cite>— Me, at 3am, to my rubber duck debugger</cite></blockquote>
<!-- /wp:quote -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">The Setup: A Real-World Card Grid</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Here's the scenario: you have a grid of cards. Each card has a header, body, and footer. You want every card's sections to align horizontally across the grid — headers at the same height, footers at the same baseline. Classic problem.</p>
<!-- /wp:paragraph -->
<!-- wp:code -->
<pre class="wp-block-code"><code>.card-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
}

.card {
  display: grid;
  grid-template-rows: subgrid;
  grid-row: span 3; /* header + body + footer */
}

/* That's it. That's the whole trick. */</code></pre>
<!-- /wp:code -->
<!-- wp:paragraph -->
<p>The <code>grid-row: span 3</code> tells each card to occupy three row tracks from the parent. The <code>grid-template-rows: subgrid</code> tells each card to <strong>use the parent's row tracks</strong> instead of creating its own. Every card's internal rows now align perfectly.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Why This Matters for Component Systems</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>If you're building a design system — and if you're reading this blog, you probably are — subgrid means your components can be truly context-aware without prop-drilling layout information. The grid is the single source of truth.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Browser Support Check</h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>As of late 2024, subgrid has <a href="#">solid support across all major browsers</a>. Chrome 117+, Firefox 71+ (they were early to this party), Safari 16+. The only holdout is <em>that one client who insists on supporting IE11</em>, and honestly, that's a conversation you need to have with your therapist, not your CSS.</p>
<!-- /wp:paragraph -->
<!-- wp:separator -->
<hr class="wp-block-separator">
<!-- /wp:separator -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Advanced Pattern: The Nested Dashboard</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Let's go deeper. What if your cards contain data tables that also need to align with the outer grid? This is where subgrid gets truly unhinged — in the best possible way.</p>
<!-- /wp:paragraph -->
<!-- wp:code -->
<pre class="wp-block-code"><code>.dashboard {
  display: grid;
  grid-template-columns: 
    [sidebar-start] 280px 
    [sidebar-end content-start] 1fr 
    [content-end];
  grid-template-rows: auto 1fr auto;
}

.dashboard__panel {
  display: grid;
  grid-template-columns: subgrid;
  grid-column: content-start / content-end;
  
  /* Now panel children align 
     to dashboard columns */
}

.dashboard__panel .widget {
  display: grid;
  grid-template-rows: subgrid;
  grid-row: span 2;
  
  /* Two levels deep and still 
     perfectly aligned */
}</code></pre>
<!-- /wp:code -->
<!-- wp:paragraph -->
<p>Two levels of subgrid inheritance. The widgets inside the panel inside the dashboard all share the same track sizing. Change one column width at the top level and everything cascades down beautifully.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">The Forbidden Technique</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Okay, here's the part that will get me in trouble with the CSS Working Group. You can combine subgrid with <code>container queries</code> to create components that are <strong>both layout-aware and size-aware</strong>. The component knows where it is in the grid AND how much space it has.</p>
<!-- /wp:paragraph -->
<!-- wp:code -->
<pre class="wp-block-code"><code>.adaptive-card {
  display: grid;
  grid-template-rows: subgrid;
  grid-row: span 3;
  container-type: inline-size;
}

@container (min-width: 400px) {
  .adaptive-card__body {
    columns: 2;
    column-gap: 1.5rem;
  }
}

/* The card aligns to the parent grid 
   AND adapts its internal layout 
   based on available width. 
   This is the forbidden scroll. */</code></pre>
<!-- /wp:code -->
<!-- wp:paragraph -->
<p>This is <strong>the endgame</strong> for component-driven CSS. Your layout is contextual at every level. No JavaScript required. No resize observers. No layout thrashing. Just CSS doing what CSS was always meant to do.</p>
<!-- /wp:paragraph -->
<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>Write CSS like you're whispering secrets to the browser. It wants to help you. Subgrid is it finally listening.</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->
<!-- wp:paragraph -->
<p>Go forth and subgrid everything. Deploy on Friday. Live dangerously. Your layouts will thank you.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"align":"full","metadata":{"name":"Post Footer Zone"},"className":"post-footer-zone","tagName":"section"} -->
<section class="wp-block-group alignfull post-footer-zone">
<!-- wp:group {"metadata":{"name":"Post Footer Inner"},"className":"post-footer__inner"} -->
<div class="wp-block-group post-footer__inner">
<!-- wp:group {"metadata":{"name":"Post Taxonomy Bar"},"className":"post-taxonomy-bar animate-on-scroll","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group post-taxonomy-bar animate-on-scroll">
<!-- wp:group {"metadata":{"name":"Taxonomy Categories"},"className":"taxonomy-pills taxonomy-categories","layout":{"type":"flex"}} -->
<div class="wp-block-group taxonomy-pills taxonomy-categories">
<!-- wp:paragraph {"className":"taxonomy-pill taxonomy-pill\u002d\u002dcategory"} -->
<p class="wp-block-paragraph taxonomy-pill taxonomy-pill--category"><a href="#">CSS Wizardry</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"taxonomy-pill taxonomy-pill\u002d\u002dcategory"} -->
<p class="wp-block-paragraph taxonomy-pill taxonomy-pill--category"><a href="#">Frontend</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"metadata":{"name":"Taxonomy Tags"},"className":"taxonomy-pills taxonomy-tags","layout":{"type":"flex"}} -->
<div class="wp-block-group taxonomy-pills taxonomy-tags">
<!-- wp:paragraph {"className":"taxonomy-pill taxonomy-pill\u002d\u002dtag"} -->
<p class="wp-block-paragraph taxonomy-pill taxonomy-pill--tag"><a href="#">#subgrid</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"taxonomy-pill taxonomy-pill\u002d\u002dtag"} -->
<p class="wp-block-paragraph taxonomy-pill taxonomy-pill--tag"><a href="#">#css-grid</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"taxonomy-pill taxonomy-pill\u002d\u002dtag"} -->
<p class="wp-block-paragraph taxonomy-pill taxonomy-pill--tag"><a href="#">#layout</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"taxonomy-pill taxonomy-pill\u002d\u002dtag"} -->
<p class="wp-block-paragraph taxonomy-pill taxonomy-pill--tag"><a href="#">#forbidden-knowledge</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:separator {"className":"neon-divider"} -->
<hr class="wp-block-separator neon-divider">
<!-- /wp:separator -->
<!-- wp:group {"metadata":{"name":"Post Navigation Row"},"className":"post-nav-row animate-on-scroll","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group post-nav-row animate-on-scroll">
<!-- wp:group {"metadata":{"name":"Previous Post Link"},"className":"post-nav-link nav-prev"} -->
<div class="wp-block-group post-nav-link nav-prev">
<!-- wp:paragraph -->
<p><a href="#">← PREVIOUS ORDER</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"metadata":{"name":"Next Post Link"},"className":"post-nav-link nav-next"} -->
<div class="wp-block-group post-nav-link nav-next">
<!-- wp:paragraph -->
<p><a href="#">NEXT ORDER →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->