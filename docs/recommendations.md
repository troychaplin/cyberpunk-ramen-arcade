# Recommendations

## Shared Class Opportunities

Several repeated style patterns could be extracted into shared utility classes:

| Pattern                              | Occurrences | Suggested Class          |
| ------------------------------------ | ----------- | ------------------------ |
| Neon glow text-shadow on hover       | 5+          | `.neon-glow-hover`       |
| Card overlay gradient                | 3           | `.card-overlay`          |
| Tag/pill styling (small mono text)   | 6           | `.tag` or `.pill`        |
| Flex row with gap                    | 15+         | `.flex-row`              |
| Section container pattern            | 6           | `.section-inner`         |
| Neon border on hover/focus           | 4           | `.neon-border`           |
| Scanline pseudo-element              | 2           | `.scanlines`             |

## WordPress Preset Alignment

1. **Replace all scoped `--color-*` tokens** with `var(--wp--preset--color--*)` references
2. **Replace `--font-display`/`--font-mono`** with `var(--wp--preset--font-family--chakra-petch)` and `var(--wp--preset--font-family--ibm-plex-mono)`
3. **Replace `--space-*` tokens** with `var(--wp--preset--spacing--*)` equivalents
4. **Replace `--font-size-*` tokens** with `var(--wp--preset--font-size--*)` equivalents
5. **Add missing presets to theme.json** for values used in CSS but not yet defined (border-radius values, z-index scale, neon opacity variants)

## Structural Improvements

1. **Split `styles.css`** into logical partials (base, hero, sections, blog, post, editor) -- even if concatenated for production
2. **Convert archive demo content** to dynamic Query Loop patterns
3. **Create a `/patterns` directory** with reusable block patterns for common sections
4. **Rename extracted presets** (gradients, shadows) to descriptive slugs
5. **Consolidate editor styles** -- reduce the duplicated front-end/editor rule pairs
6. **Fix navigation** for inner pages (use real page links, not hash anchors)
7. **Add a z-index scale** as custom properties in theme.json
8. **Add border-radius presets** to theme.json (currently hardcoded as `2px` throughout)

## Priority Order

1. **High**: Replace scoped CSS tokens with WP presets (eliminates duplication, improves maintainability)
2. **High**: Rename extracted gradient/shadow slugs (improves readability)
3. **Medium**: Extract shared utility classes (reduces CSS size, improves consistency)
4. **Medium**: Convert hardcoded colors to presets or `color-mix()` (reduces magic values)
5. **Medium**: Convert archive to dynamic Query Loop (makes blog content actually dynamic)
6. **Low**: Split CSS into partials (developer experience)
7. **Low**: Consolidate editor style duplicates (reduces file size)
