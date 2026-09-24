# Category tile icons

The homepage tiles (`index.php`, `$joq_tiles`) load their icons from
`assets/images/icons/` as **144x144 WebP** (rendered at 72px, so 2x for
retina). Each file is 2-7 KB.

| Tile | File |
|---|---|
| Shqipëri | `albania-joq.webp` |
| News | `News-glass-joq.webp` |
| Kosova | `Kosovo-glass-joq.webp` |
| Maqedoni | `Macedonia-glass-joq.webp` |
| Sport | `ball-joq.webp` |
| Veç e jona | `vip-joq.webp` |
| Persekutimi ndaj JOQ | `preskeutim-joq.webp` |
| Argëtim | `argetimm-joq.webp` |
| Teknologji | `teknologji-joq.webp` |

If a file is missing the tile falls back to the inline SVG in `$joq_tiles`.

## Regenerating

The 1024px transparent PNGs live in `assets/images/icons/_png-1024/`
(`_raw/` holds the pre-background-removal renders). To rebuild a WebP:

```
cwebp -q 82 -alpha_q 90 -resize 144 144 _png-1024/NAME.png -o NAME.webp
```

Prompts for generating new icons are in `ICON-PROMPTS.md`.
