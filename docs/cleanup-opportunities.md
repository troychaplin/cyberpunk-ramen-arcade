# Cleanup Opportunities

## 1. Duplicated CSS Custom Properties

The single post sections (`.post-header-zone`, `.reading-zone`, `.post-footer-zone`) define 31 scoped CSS custom properties that duplicate values already available as WordPress presets:

```css
/* Current: scoped duplicate */
--color-neon-pink: #ff2d7b;

/* Available WordPress preset */
var(--wp--preset--color--neon-pink)
```

**Impact**: All `--color-*`, `--font-size-*`, and `--space-*` scoped tokens can be replaced with their `var(--wp--preset--*)` equivalents. This eliminates ~30 redundant variable declarations.

## 2. Hardcoded Color Values

~195 instances of hardcoded `rgba()` and hex values throughout the CSS. Many of these are opacity variants of the three neon colors and background colors.

**Examples found:**
- `rgba(255, 45, 123, 0.3)` -- pink glow at 30% (used in hover shadows)
- `rgba(0, 229, 255, 0.12)` -- cyan at 12% (already a preset: `neon-cyan-dim`)
- `rgba(8, 8, 26, 0.85)` -- bg-deep at 85% (used in gradient overlays)
- `#ff4d91` -- a pink variant not in the palette at all

**Recommendation**: Define additional opacity variants in theme.json or use `color-mix()` / CSS `oklch` for computed opacity variants. At minimum, replace all instances that match existing preset values.

## 3. Hardcoded Spacing Values

Multiple instances of pixel and em-based spacing that don't use the theme spacing scale:

- `gap: 10px`, `12px`, `16px`, `24px` -- scattered through editor and post sections
- `margin: 32px` -- hardcoded in taxonomy/navigation area
- `padding: 0.2em 0.6em`, `0.3em 0.7em` -- small component padding

**Recommendation**: Extend the spacing scale in theme.json to cover smaller values (e.g., a `10` slug at `0.25rem`) and use presets consistently.

## 4. Excessive `!important` Usage

118+ instances of `!important`, concentrated in two areas:

- **Editor resets (lines 1557-2507)**: Needed to override WordPress editor defaults, but many could be avoided with higher-specificity selectors or `.editor-styles-wrapper` scoping.
- **Post template editor styles (lines 3395-3757)**: Duplicate rules for `:root :where()` and `.editor-styles-wrapper` patterns.

## 5. Duplicated Editor Styles

The post reading content section (lines 3436-3757) contains ~60 rule pairs that are nearly identical for front-end and editor contexts:

```css
/* Front-end version */
:root :where(.post-reading-content h2) { ... }

/* Editor duplicate */
.editor-styles-wrapper .post-reading-content h2 { ... }
```

**Recommendation**: Consolidate using a shared selector list or a parent class that applies in both contexts.

## 6. Root Font Variables vs Presets

Two root-level CSS custom properties duplicate theme.json font family presets:

```css
/* Current */
:root { --font-display: 'Chakra Petch', sans-serif; }

/* Available */
var(--wp--preset--font-family--chakra-petch)
```

## 7. Gradient and Shadow Naming

All gradients and shadows use auto-generated `extracted-*` names that convey no meaning:

- `extracted-radial-3` -- pink glow
- `extracted-layered-5` -- heavy pink shadow
- `extracted-linear-9` -- dark overlay gradient

**Recommendation**: Rename to descriptive slugs (e.g., `glow-pink-radial`, `shadow-pink-heavy`, `overlay-dark-fade`).

## 8. Missing Pattern Files

The theme has no `/patterns` directory. The archive template contains hardcoded demo blog content (static blog cards with fixed titles, dates, excerpts). These should be converted to block patterns with dynamic content via Query Loop blocks.

## 9. `home.html` and `index.html` Are Identical

Both files contain the exact same block markup. `index.html` serves as the required fallback, making `home.html` redundant unless it's intentionally differentiated in the future.

## 10. Header Navigation Uses Hash Links

The header part uses hash links (`#blog`, `#work`, `#about`) which only work on the front page. Internal pages don't have these sections, so the navigation becomes non-functional on single posts, pages, and archives.
