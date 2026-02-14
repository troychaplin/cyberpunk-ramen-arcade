# CSS Architecture

The main stylesheet (`assets/css/styles.css`) is ~3,750 lines organized into logical sections.

## Section Map

| Lines       | Section                     | Description                                      |
| ----------- | --------------------------- | ------------------------------------------------ |
| 1-6         | Design Tokens               | Root `--font-display` and `--font-mono` vars      |
| 7-56        | Reset & Base                | HTML/body resets, box-sizing, scroll-behavior      |
| 57-83       | Scroll Animations           | `.animate-on-scroll` with staggered delays         |
| 84-88       | Utility Classes             | `.text-cyan`, `.text-pink`, `.text-green`          |
| 89-444      | Hero Section                | Hero layout, nav, content, CTAs, glow effects      |
| 490-557     | Shared Section Styles       | `.section-header`, `.section-tag`, `.section-title`, `.section-desc`, `.section-glow` |
| 558-788     | Blog Section                | Blog cards (featured + grid), metadata, CTA        |
| 789-915     | Work Section                | Portfolio grid, work cards, tech stack tags         |
| 916-1066    | About Section               | Bio layout, portrait frame, stats, tech list       |
| 1067-1159   | Contact Section             | Form area, social links                            |
| 1160-1192   | Footer                      | Footer layout, copyright text                      |
| 1193-1338   | Responsive Breakpoints      | 1024px, 768px, 480px media queries                 |
| 1340-1540   | WordPress Templates         | Post listings, pagination, search, comments        |
| 1557-2507   | Editor Resets               | Block editor overrides with `!important`           |
| 2523-3394   | Single Post Template        | Post header, reading zone, footer zone, HUD        |
| 3436-3534   | Post Reading Content        | Typography spacing for h2-h4, blockquotes, lists   |
| 3536-3757   | Taxonomy & Navigation       | Taxonomy pills, arcade buttons, share bar          |

## CSS Custom Properties

**Global (`:root`):**
- `--font-display` and `--font-mono` -- font stacks

**Scoped (`.post-header-zone`, `.reading-zone`, `.post-footer-zone`):**
- 15 color tokens (`--color-*`) that duplicate theme.json presets
- 10 font size tokens (`--font-size-*`) that partially duplicate theme.json
- 6 spacing tokens (`--space-*`) that duplicate theme.json spacing

## Class Naming Convention

BEM-style naming throughout:
- Block: `.hero`, `.blog-card`, `.work-card`, `.about-section`, `.contact-section`
- Element: `.blog-card__title`, `.work-card__overlay`, `.about-stat__number`
- Modifier: `.blog-card--featured`, `.work-card--wide`, `.blog-card__category--css`

## Custom Class Inventory by Section

**Hero (27 classes):**
`.hero`, `.hero-noise`, `.hero-nav`, `.hero-nav-logo`, `.hero-nav-links`, `.hero-content`, `.hero-tag`, `.hero-tag-cursor`, `.hero-headline`, `.hero-headline-first`, `.hero-headline-last`, `.hero-sub`, `.hero-sub-highlight`, `.hero-skills`, `.hero-skill`, `.hero-cta-group`, `.hero-cta-primary`, `.hero-cta-secondary`, `.hero-footer`, `.hero-footer-left`, `.hero-footer-location`, `.hero-footer-dot`, `.hero-footer-right`, `.hero-footer-scroll`, `.hero-scroll-line`, `.hero-glow-pink`, `.hero-glow-cyan`

**Shared Section (9 classes):**
`.section-glow`, `.section-glow--pink`, `.section-glow--cyan`, `.section-glow--green`, `.section-glow--cyan-about`, `.section-header`, `.section-tag`, `.section-title`, `.section-desc`

**Blog (18 classes):**
`.blog-section`, `.blog-inner`, `.blog-featured`, `.blog-card`, `.blog-card--featured`, `.blog-card__overlay`, `.blog-card__content`, `.blog-card__meta`, `.blog-card__category`, `.blog-card__category--css/--wp/--react`, `.blog-card__date`, `.blog-card__title`, `.blog-card__excerpt`, `.blog-card__link`, `.blog-card__header`, `.blog-card__footer`, `.blog-card__read-time`, `.blog-grid`, `.blog-cta`, `.btn-outline`

**Work (10 classes):**
`.work-section`, `.work-inner`, `.work-grid`, `.work-card`, `.work-card--wide`, `.work-card__overlay`, `.work-card__content`, `.work-card__type`, `.work-card__title`, `.work-card__desc`, `.work-card__tech`

**About (14 classes):**
`.about-section`, `.about-inner`, `.about-layout`, `.about-portrait__frame`, `.about-portrait__img`, `.about-portrait__scanlines`, `.about-portrait__status`, `.about-bio__block`, `.about-bio__lead`, `.about-stats`, `.about-stat`, `.about-stat__number`, `.about-stat__label`, `.about-stack__title`, `.about-stack__list`, `.about-stack__item`

**Contact (6 classes):**
`.contact-section`, `.contact-inner`, `.contact-headline`, `.contact-desc`, `.contact-actions`, `.contact-social`, `.contact-social__link`

**Footer (5 classes):**
`.site-footer`, `.footer-inner`, `.footer-left`, `.footer-copy`, `.footer-built`

**Single Post (15 classes):**
`.post-header-zone`, `.post-header-zone--page`, `.post-header__inner`, `.neon-post-title`, `.reading-zone`, `.reading-zone__inner`, `.post-reading-content`, `.post-footer-zone`, `.post-footer__inner`, `.hud-metadata`, `.hud-separator`, `.arcade-share-bar`, `.arcade-buttons`, `.arcade-btn`, `.post-taxonomy-bar`, `.taxonomy-pills`, `.taxonomy-pill`, `.post-nav-row`, `.nav-prev`, `.nav-next`

**Utilities (10 classes):**
`.animate-on-scroll`, `.is-visible`, `.is-scrolled`, `.text-cyan`, `.text-pink`, `.text-green`, `.miles-row-stack`, `.miles-sticky-top`, `.miles-no-shrink`, `.miles-flex-center`, `.miles-flex-between`, `.miles-sr-only`, `.miles-editor-hidden`

## Responsive Breakpoints

| Breakpoint | Targets                                                        |
| ---------- | -------------------------------------------------------------- |
| 1024px     | Hero headline sizes, blog grid to 2 columns, about layout      |
| 768px      | Nav padding, hero mobile, blog single column, footer direction  |
| 480px      | Hero headline, nav logo, section titles, about stats 1 column   |
| 782px      | WordPress admin bar adjustments                                 |
