# functions.php

Five registered hooks:

1. **`after_setup_theme`**: Enables editor styles, registers `styles.css` + `editor-page.css` for block editor
2. **`wp_enqueue_scripts`** (styles): Enqueues `styles.css` with `filemtime()` cache busting
3. **`wp_enqueue_scripts`** (scripts): Enqueues `script.js` in footer, conditional on file existence
4. **`init`**: Removes `title` post type support from pages
5. **`wp_head`** (priority 1): Injects early `<script>` to add `js` class to `<html>` element (prevents FOUC)
