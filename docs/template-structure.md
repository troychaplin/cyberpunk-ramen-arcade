# Template Structure

## Template Hierarchy

```
front-page.html ── Hero section + Post Content
single.html ────── Post header (title, HUD metadata, share bar) + Reading zone + Post navigation
page.html ──────── Simplified header + Reading zone
archive.html ───── Featured card + Blog grid (static/demo content)
home.html ──────── Simple post list with pagination
index.html ─────── Fallback (identical to home.html)
search.html ────── Search bar + Query results with pagination
404.html ────────── Centered "not found" message with home button
```

## Template Parts

- **header.html**: Flex nav with site title (`.hero-nav-logo`) and hash-link navigation (Blog, Work, About)
- **footer.html**: Full-width footer with logo, copyright, and tagline

## Block Usage Patterns

Templates predominantly use:
- `core/group` -- Layout containers with semantic tags (section, article, main)
- `core/paragraph` -- Text content with custom classes
- `core/heading` -- Titles at various levels
- `core/buttons` -- CTA buttons with custom classes
- `core/template-part` -- Header/footer inclusion
- `core/post-title`, `core/post-date`, `core/post-excerpt`, `core/post-content` -- Dynamic post data
- `core/query`, `core/post-template`, `core/query-pagination` -- Post listings
- `core/navigation` -- Site navigation

## Preset References in Templates

Templates use minimal theme.json preset references. Most styling is done through CSS classes rather than inline block attributes. The few preset references found:
- `var:preset|spacing|50` -- Section top padding (archive, search)
- `var:preset|spacing|30` -- Section bottom padding (search)
- `var:preset|spacing|80` -- 404 page padding
