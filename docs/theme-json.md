# theme.json Breakdown

**Schema**: WordPress 6.9, version 3

## Color Presets (16 tokens)

```
Backgrounds:    bg-deep (#08081a), bg-mid (#0e0e28), bg-card (#12122e), bg-card-hover (#181844)
Neon Accents:   neon-pink (#ff2d7b), neon-cyan (#00e5ff), neon-green (#39ff14)
Neon Dims:      neon-pink-dim, neon-cyan-dim, neon-green-dim (rgba variants at 12-15% opacity)
Text:           text-warm (#f0e6d6), text-dim (#9e99b5), text-mid (#bdb6cf)
Borders:        border-subtle (rgba 0.18), border-active (rgba 0.4)
```

## Font Families (2)

| Slug           | Stack                            | Weights     | Source                        |
| -------------- | -------------------------------- | ----------- | ----------------------------- |
| chakra-petch   | "Chakra Petch", sans-serif       | 400,600,700 | Local woff2 (12 files)        |
| ibm-plex-mono  | "IBM Plex Mono", sans-serif      | 400,400i,500,600 | Local woff2 (20 files)   |

## Font Sizes (9 tokens)

| Slug     | Value     | Fluid                   |
| -------- | --------- | ----------------------- |
| small    | 0.8rem    | --                      |
| medium   | 1rem      | --                      |
| large    | 1.125rem  | --                      |
| x-large  | 1.25rem   | --                      |
| xx-large | 1.5rem    | --                      |
| huge     | 2rem      | min: 1.5rem, max: 2rem  |
| huge-2   | 3rem      | min: 2rem, max: 3rem    |
| gigantic | 9rem      | min: 3.2rem, max: 9rem  |

## Spacing Scale (6 tokens)

| Slug | Value  | Label    |
| ---- | ------ | -------- |
| 20   | 0.5rem | X-Small  |
| 30   | 1rem   | Small    |
| 40   | 2rem   | Medium   |
| 50   | 4rem   | Large    |
| 60   | 6rem   | X-Large  |
| 65   | 8rem   | --       |

## Layout

- Content width: `1200px`
- Wide width: `1400px`
- Root padding aware alignments: enabled

## Custom Properties

Font weights (9 values: thin through black) and line heights (6 values: none through loose) are defined under `settings.custom`.

## Gradients (15 presets)

Mix of linear dark overlays and radial neon glow effects. Named with `extracted-*` slugs -- suggesting auto-extraction from the design.

## Shadows (13 presets)

Neon glow effects in pink, cyan, and green. Includes standard, inner (`inset`), and layered (multi-shadow) variants. Named `extracted-*`.

## Block-Level Styles

Resets applied to: `core/code`, `core/details`, `core/list`, `core/navigation`, `core/quote`, `core/separator`, `core/table`. Mostly removing default margins/padding and inheriting typography.

## Custom CSS (in theme.json)

```css
.post-type-page .editor-post-title { display: none !important; }
.post-type-post.editor-styles-wrapper { padding: 2rem; }
.post-type-post .editor-post-title__input { font-size: 2.5rem; }
```
