<?php
/**
 * Title: Featured Post with Blog Grid
 * Description: A featured blog post along with a grid of additional posts.
 * Slug: cyberpunk-ramen-arcade/featured-post-with-blog-grid
 * Categories: cyberpunk-ramen-arcade
 * Post Types: page
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Blog Section","categories":["cyberpunk-ramen-arcade"],"patternName":"cyberpunk-ramen-arcade/featured-post-with-blog-grid"},"align":"full","className":"blog-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull blog-section" id="blog"><!-- wp:group {"metadata":{"name":"Blog Inner"},"align":"wide","className":"blog-inner"} -->
<div class="wp-block-group alignwide blog-inner"><!-- wp:group {"metadata":{"name":"Section Header"},"className":"section-header animate-on-scroll"} -->
<div class="wp-block-group section-header animate-on-scroll"><!-- wp:paragraph {"className":"wp-block-paragraph section-tag"} -->
<p class="wp-block-paragraph section-tag">// the_forbidden_scrolls</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section-title"} -->
<h2 class="wp-block-heading section-title">Blog &amp; Tutorials</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wp-block-paragraph section-desc"} -->
<p class="wp-block-paragraph section-desc">CSS Grid tricks, WordPress hooks, and forbidden knowledge scrolls. Everything is actually correct and well-documented. Probably.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":1,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"Blog Featured"},"className":"blog-featured animate-on-scroll"} -->
<div class="wp-block-group blog-featured animate-on-scroll"><!-- wp:group {"tagName":"article","metadata":{"name":"Featured Blog Card"},"className":"blog-card blog-card\u002d\u002dfeatured","style":{"background":{"backgroundImage":{"url":"http://localhost:8896/wp-content/uploads/2026/02/blog-featured.jpg"},"backgroundSize":"cover","backgroundPosition":"center center"}}} -->
<article class="wp-block-group blog-card blog-card--featured"><!-- wp:group {"className":"blog-card__overlay miles-editor-hidden"} -->
<div class="wp-block-group blog-card__overlay miles-editor-hidden"></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Blog Card Content"},"className":"blog-card__content"} -->
<div class="wp-block-group blog-card__content"><!-- wp:group {"metadata":{"name":"Blog Card Meta"},"className":"blog-card__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group blog-card__meta"><!-- wp:post-date {"format":"Y.m.j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"blog-card__date"} /-->

<!-- wp:post-time-to-read {"className":"blog-card__read-time"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"className":"blog-card__title","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-warm"},"":{"color":{"text":"var:preset|color|text-warm"}}}},"typography":{"textDecoration":"none"}}} /-->

<!-- wp:post-excerpt {"moreText":"","className":"blog-card__excerpt"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"blog-grid","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"tagName":"article","metadata":{"name":"Blog Card"},"className":"blog-card animate-on-scroll","style":{"dimensions":{"minHeight":"100%"}}} -->
<article class="wp-block-group blog-card animate-on-scroll" style="min-height:100%"><!-- wp:group {"metadata":{"name":"Blog Card Header"},"className":"blog-card__header","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group blog-card__header"><!-- wp:post-terms {"term":"category","className":"blog-card__category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"className":"blog-card__title","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-warm"},"":{"color":{"text":"var:preset|color|text-warm"}}}},"typography":{"textDecoration":"none"}}} /-->

<!-- wp:post-excerpt {"excerptLength":15,"className":"blog-card__excerpt"} /-->

<!-- wp:group {"metadata":{"name":"Blog Card Footer"},"className":"blog-card__footer","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group blog-card__footer"><!-- wp:post-time-to-read {"className":"blog-card__read-time"} /-->

<!-- wp:post-date {"format":"Y.m.j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"blog-card__date"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"metadata":{"name":"Blog CTA"},"className":"blog-cta animate-on-scroll","style":{"spacing":{"padding":{"top":"0"}}}} -->
<div class="wp-block-group blog-cta animate-on-scroll" style="padding-top:0"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"btn-outline"} -->
<div class="wp-block-button btn-outline"><a class="wp-block-button__link wp-element-button" href="#blog">View All Scrolls</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->