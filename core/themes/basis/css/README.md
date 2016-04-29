# CSS Guidelines

[See Backdrop's CSS Standards](https://api.backdropcms.org/css-standards)

## Files
The types of CSS files in the theme are:
* Base/Normalize - Using a normalize stylesheet to ensure consistent rendering
* Fonts - `@font-face` rules
* Layout - Component (not page) layout, page layout should be handled in a `layout` extension
* Component - CSS files that 
* State - Styles for interactivity that override defaults set in component
* Skin - The colors, fonts and aesthetic CSS

Differences from current Backdrop:
* Adding fonts level because who wants that cluttering up their proper styles
* Changing Theme to Skin, feel that Skin is more specific and doesn't carry baggage that could cause confusion

**See `basis/css/grid-system/README.md` for grid-system documentation.**