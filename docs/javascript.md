# JavaScript Features

`assets/js/script.js` (~6.5KB) provides all interactive behavior:

| Feature               | Trigger                   | Mechanism                          |
| --------------------- | ------------------------- | ---------------------------------- |
| Header scroll         | Scroll > 100px            | `.is-scrolled` class toggle         |
| Smooth scrolling      | Hash link clicks          | `scrollIntoView` with nav offset    |
| Scroll animations     | Element enters viewport   | IntersectionObserver + `.is-visible` |
| Glitch effect         | Random interval (3-8s)    | Transform + text-shadow on hero     |
| Blog card hover       | Mouse enter               | CSS custom property `--mouse-x`     |
| Typing cursor         | Interval loop (8-20s)     | Opacity toggle on `.hero-tag-cursor` |
| Stats counter         | Element enters viewport   | Animated number incrementing        |
| Active nav highlight  | Section in viewport       | IntersectionObserver on sections    |
| Tech stack glow       | Mouse hover               | Random neon color box-shadow        |

All animations use `requestAnimationFrame` and passive event listeners for performance.
