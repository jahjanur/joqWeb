# JOQ category icons — Higgsfield prompts

One prompt per homepage tile. Each block below is **complete and self-contained** — copy the
whole thing, no assembly needed. The negative prompt is identical for all eight and is
repeated in every block so you can paste them one at a time.

Generate all eight with the **same model, same settings, same seed** or they will not look
like a set. That matters more than any individual prompt.

---

## Before you start

**Settings**
- Aspect ratio **1:1**, size **1024×1024 or larger**
- Same seed across all 8 (pick any number, reuse it)
- After generating, run **`remove_background`** on each to get a transparent PNG
- **No shadow** in the render — see point 3 below for why

**Where the files go** — `wp-content/themes/joq/assets/images/icons/`, using exactly these
names. The tiles pick them up automatically; nothing in the code needs to change.

| # | Tile label | Filename |
|---|---|---|
| 1 | News | `News-glass-joq.png` |
| 2 | Kosova | `Kosovo-glass-joq.png` |
| 3 | Maqedoni | `Macedonia-glass-joq.png` |
| 4 | Sport | `ball-joq.png` |
| 5 | Veç e jona | `vip-joq.png` |
| 6 | Persekutimi ndaj JOQ | `preskeutim-joq.png` |
| 7 | Argëtim | `argetimm-joq.png` |
| 8 | Teknologji | `teknologji-joq.png` |

**Five things worth knowing**

1. **The icons display at 72px** (56px on phones). Fine detail disappears at that size — if a
   result looks busy or fussy when you shrink it, regenerate with a simpler shape. Bold and
   readable beats detailed.
2. **Check the PNG is really transparent before using it.** This caught us on the first batch:
   all eight came back with an opaque off-white background (#ECEDEE–#FAFBFB) baked in, which
   showed as a grey square on the white tile. Higgsfield's `remove_background` step is easy to
   skip. To check on a Mac, open the PNG in Preview — a checkerboard behind the icon means
   transparent, a solid colour means it still needs background removal.

3. **No text in the icons.** The tile already prints the category name underneath, and image
   models render letters badly. The negative prompt blocks text for this reason.
4. **No shadows — deliberately.** Every prompt asks for flat, shadowless renders and every
   negative prompt blocks drop, cast, contact and ground shadows. A shadow baked into the PNG
   survives background removal as grey pixels, and since the tile behind the icon is pure white
   `#ffffff`, that reads as a dirty smudge under the icon. It also can't adapt — it stays put on
   hover and would break on any darker background later. Depth comes from the glass itself: the
   bevels, rim light and refraction give the object form without a shadow under it. If the set
   ends up looking too flat in the UI, add the shadow in CSS instead, where it is one tunable
   line and applies to all eight at once:

   ```css
   .joq-tile__icon img { filter: drop-shadow(0 4px 8px rgba(0,0,0,.10)); }
   ```

5. **Country icons use the real national flag**, not the JOQ palette — Kosova, Maqedoni and
   Shqipëri are filled with their actual flag inside the country silhouette, with no frame or
   rounded square around them. The other six stay in red / black / white. This is deliberate:
   a flag is instantly recognisable at 72px in a way a red-tinted blob is not, and Albania's
   flag is red and black anyway.

**Brand palette** — vivid red `#E31E24`, deep black `#111111`, pure white `#FFFFFF`. Nothing else.

---

## 1. News — `News-glass-joq.png`

**Prompt**
> A single modern minimalist 3D icon of a neatly folded newspaper, glassmorphism style, smooth
> frosted translucent glass body with soft internal glow and subtle refraction, one bold vivid
> red headline bar across the top and thin light grey lines suggesting columns of type, rounded
> geometric forms, clean product-render look, strictly limited palette of vivid red #E31E24,
> deep black #111111 and pure white #FFFFFF with soft neutral grey shading only, centered
> composition, front three-quarter view, isolated on a plain flat pure white background, soft
> studio lighting, high detail, 8k, octane render, app-icon proportions,
> square 1:1.

**Negative prompt**
> text, letters, words, readable type, watermark, logo, multiple objects, clutter, busy
> background, gradient background, scene, people, hands, photo, realistic photograph, blue,
> green, yellow, orange, purple, rainbow, neon, low-poly, cartoon outline, flat 2D, sketch,
> drop shadow, cast shadow, ground shadow, contact shadow, reflection, floor, ground
> plane, blur, noise, cropped, cut off, duplicate, deformed.

---

## 2. Kosova — `Kosovo-glass-joq.png`

Country silhouette filled with the real national flag — blue field, gold map, arc of white
stars. No frame, no rounded square: the country outline *is* the icon.

**Prompt**
> A single modern 3D glossy glass icon shaped exactly like the silhouette of the country of
> Kosovo, the national flag of Kosovo filling the entire country shape, deep blue field with
> the gold country map and the arc of six white stars above it, thick translucent bevelled
> glass edges with soft internal glow and subtle refraction, glossy candy-glass surface,
> smooth rounded rim, the country outline is the only shape and nothing surrounds it, no frame,
> no plaque, no rounded square, no background panel, centered composition, slight three-quarter
> top-down perspective, isolated on a plain flat pure white background, soft studio lighting,
> high detail, 8k, octane render, app-icon proportions, square 1:1.

**Negative prompt**
> rounded square, square frame, plaque, badge, card, container, panel, border, tile, box behind
> the shape, circle background, text, letters, words, country name, watermark, logo, multiple
> objects, clutter, busy background, gradient background, scene, people, hands, photo, realistic
> photograph, neon, low-poly, cartoon outline, flat 2D, sketch, drop shadow, cast shadow, ground
> shadow, contact shadow, reflection, floor, ground plane, blur, noise, cropped, cut off,
> duplicate, deformed, inaccurate map, wrong borders.

---

## 3. Maqedoni — `Macedonia-glass-joq.png`

Same treatment — country silhouette filled with the national flag, red field with the gold
eight-rayed sun.

**Prompt**
> A single modern 3D glossy glass icon shaped exactly like the silhouette of the country of
> North Macedonia, the national flag of North Macedonia filling the entire country shape, red
> field with the golden yellow eight-rayed sun radiating from the centre, thick translucent
> bevelled glass edges with soft internal glow and subtle refraction, glossy candy-glass
> surface, smooth rounded rim, the country outline is the only shape and nothing surrounds it,
> no frame, no plaque, no rounded square, no background panel, centered composition, slight
> three-quarter top-down perspective, isolated on a plain flat pure white background, soft
> studio lighting, high detail, 8k, octane render, app-icon proportions, square 1:1.

**Negative prompt**
> rounded square, square frame, plaque, badge, card, container, panel, border, tile, box behind
> the shape, circle background, text, letters, words, country name, watermark, logo, multiple
> objects, clutter, busy background, gradient background, scene, people, hands, photo, realistic
> photograph, neon, low-poly, cartoon outline, flat 2D, sketch, drop shadow, cast shadow, ground
> shadow, contact shadow, reflection, floor, ground plane, blur, noise, cropped, cut off,
> duplicate, deformed, inaccurate map, wrong borders.

---

## 4. Sport — `ball-joq.png`

The classic ball pattern is already black and white, so this one sits in the palette naturally.

**Prompt**
> A single modern minimalist 3D icon of a football soccer ball, glassmorphism style, smooth
> frosted translucent glass sphere with soft internal glow and subtle refraction, classic
> pentagon and hexagon panel pattern in deep black #111111 on pure white #FFFFFF with one
> accent panel in vivid red #E31E24, rounded geometric forms, clean product-render look,
> strictly limited palette of vivid red #E31E24, deep black #111111 and pure white #FFFFFF
> with soft neutral grey shading only, centered composition, front three-quarter view, isolated
> on a plain flat pure white background, soft studio lighting, high
> detail, 8k, octane render, app-icon proportions, square 1:1.

**Negative prompt**
> text, letters, words, brand name, watermark, logo, multiple objects, multiple balls, clutter,
> busy background, gradient background, scene, people, hands, players, field, grass, photo,
> realistic photograph, blue, green, yellow, orange, purple, rainbow, neon, low-poly, cartoon
> outline, flat 2D, sketch, drop shadow, cast shadow, ground shadow, contact shadow, reflection, floor, ground
> plane, blur, noise, cropped, cut off, duplicate, deformed.

---

## 5. Veç e jona — `vip-joq.png`

"Only ours" — JOQ's own exclusives. Keeps the existing glass medallion exactly as it is, with
the **JOQ wordmark embossed in the centre instead of the red star**. Black letters on the white
frosted field, inside the red ring, on the frosted glass disc — black, white and red, all three.

**Prompt**
> A single modern 3D icon of a thick round medallion made of frosted translucent glass, seen at
> a slight three-quarter tilt, chunky bevelled glass rim catching the light, a raised glossy red
> glass ring set just inside the rim, and a smooth white frosted glass field in the centre, and
> embossed on that centre field the letters J O Q side by side as one wordmark in polished deep
> black glass, the letterforms built from heavy rounded geometric strokes with fully rounded
> stroke ends, the J a hook shape, the O a perfect ring, the Q a ring with a short tail, the
> letters raised above the surface with soft internal refraction and bright specular highlights
> along their top edges, glassmorphism style, clean product-render look, strictly black, white
> and vivid red #E31E24 only, no other colour, centered composition, isolated on a plain flat
> pure white background, soft studio lighting, high detail, 8k, octane render, app-icon
> proportions, square 1:1.

**Negative prompt**
> misspelled letters, wrong letters, extra letters, missing letters, gibberish text, random
> characters, extra words, serif font, thin strokes, star, star shape, watermark, signature,
> multiple objects, clutter, busy background, gradient background, scene, people, hands, photo,
> realistic photograph, blue, green, yellow, orange, purple, rainbow, neon, low-poly, cartoon
> outline, flat 2D, sketch, drop shadow, cast shadow, ground shadow, contact shadow, reflection,
> floor, ground plane, blur, noise, cropped, cut off, duplicate, deformed.

**If you want the letters red instead of black**, swap "polished deep black glass" for "polished
glossy red glass" in the prompt; leave the negative prompt as it is. Black is the recommendation:
it reads harder
against the white field at 72px, and it brings the third brand colour into an icon that is
otherwise only red and white.

**This is the hardest icon in the set — expect to iterate.** Image models garble short text
constantly, and putting it inside a busy glass composition makes it worse. Check the spelling on
every single generation: "JOO", "JQQ", "J0Q" and invented glyphs are all common, and the Q's tail
is the detail most often lost. Also watch that the star is actually gone — it is in the negative
prompt, but a model that has settled on a "medal" composition likes to put one back.

**Guaranteed fallback:** the theme ships the real logo as vector at
`assets/images/DarkLogoJoq.svg`. If the wordmark will not come out clean after a few tries, the
badge from this render can be reused with the real logo composited into the centre — correct
letterforms every time, at the cost of the 3D glass depth on the letters themselves. Ask and I
will do it.

## 6. Persekutimi ndaj JOQ — `preskeutim-joq.png`

Press freedom under pressure — a megaphone protected by a shield.

**Prompt**
> A single modern minimalist 3D icon of a megaphone in front of a rounded shield,
> glassmorphism style, smooth frosted translucent glass with soft internal glow and subtle
> refraction, vivid red #E31E24 megaphone overlapping a deep black #111111 glass shield with a
> pure white edge highlight, rounded geometric forms, clean product-render look, strictly
> limited palette of vivid red #E31E24, deep black #111111 and pure white #FFFFFF with soft
> neutral grey shading only, centered composition, front three-quarter view, isolated on a plain
> flat pure white background, soft studio lighting, high detail, 8k,
> octane render, app-icon proportions, square 1:1.

**Negative prompt**
> text, letters, words, watermark, logo, sound waves with symbols, multiple objects, clutter,
> busy background, gradient background, scene, people, hands, protest, crowd, weapon, photo,
> realistic photograph, blue, green, yellow, orange, purple, rainbow, neon, low-poly, cartoon
> outline, flat 2D, sketch, drop shadow, cast shadow, ground shadow, contact shadow, reflection, floor, ground
> plane, blur, noise, cropped, cut off, duplicate, deformed.

---

## 7. Argëtim — `argetimm-joq.png`

**Prompt**
> A single modern minimalist 3D icon of a popcorn bucket with popcorn overflowing the top,
> glassmorphism style, smooth frosted translucent glass with soft internal glow and subtle
> refraction, bucket with bold vertical vivid red #E31E24 and pure white #FFFFFF stripes, soft
> white rounded popcorn pieces above the rim, rounded geometric forms, clean product-render
> look, strictly limited palette of vivid red #E31E24, deep black #111111 and pure white
> #FFFFFF with soft neutral grey shading only, centered composition, front three-quarter view,
> isolated on a plain flat pure white background, soft studio lighting,
> high detail, 8k, octane render, app-icon proportions, square 1:1.

**Negative prompt**
> text, letters, words, brand name, watermark, logo, multiple objects, clutter, busy background,
> gradient background, scene, people, hands, cinema seats, photo, realistic photograph, blue,
> green, yellow, orange, purple, rainbow, neon, low-poly, cartoon outline, flat 2D, sketch,
> drop shadow, cast shadow, ground shadow, contact shadow, reflection, floor, ground
> plane, blur, noise, cropped, cut off, duplicate, deformed.

---

## 8. Teknologji — `teknologji-joq.png`

**Prompt**
> A single modern minimalist 3D icon of an open laptop computer, glassmorphism style, smooth
> frosted translucent glass body with soft internal glow and subtle refraction, deep black
> #111111 glass chassis with a glowing vivid red #E31E24 screen and a thin pure white edge
> highlight, rounded geometric forms, clean product-render look, strictly limited palette of
> vivid red #E31E24, deep black #111111 and pure white #FFFFFF with soft neutral grey shading
> only, centered composition, front three-quarter view, isolated on a plain flat pure white
> background, soft studio lighting, high detail, 8k, octane render,
> app-icon proportions, square 1:1.

**Negative prompt**
> text, letters, words, code on screen, user interface, icons on screen, watermark, logo, brand
> name, multiple objects, clutter, busy background, gradient background, scene, people, hands,
> desk, photo, realistic photograph, blue, green, yellow, orange, purple, rainbow, neon,
> low-poly, cartoon outline, flat 2D, sketch, drop shadow, cast shadow, ground shadow, contact shadow, reflection, floor, ground
> plane, blur, noise, cropped, cut off, duplicate, deformed.

---

## 9. Shqipëri — `albania-joq.png`

Same treatment as Kosova and Maqedoni: the **country silhouette only**, filled with the real
national flag. No rounded square, no frame, no plaque behind it — the outline of the country
*is* the icon. Albania's flag is red and black, so this one lands in the JOQ palette naturally.

**Prompt**
> A single modern 3D glossy glass icon shaped exactly like the silhouette of the country of
> Albania, the national flag of Albania filling the entire country shape, deep crimson red
> #E41E20 field with the black double-headed eagle centered on it, thick translucent bevelled
> glass edges with soft internal glow and subtle refraction, glossy candy-glass surface, smooth
> rounded rim, the country outline is the only shape and nothing surrounds it, no frame, no
> plaque, no rounded square, no background panel, centered composition, slight three-quarter
> top-down perspective, isolated on a plain flat pure white background, soft studio lighting,
> high detail, 8k, octane render, app-icon proportions, square 1:1.

**Negative prompt**
> rounded square, square frame, plaque, badge, card, container, panel, border, tile, box behind
> the shape, circle background, text, letters, words, country name, watermark, logo, multiple
> objects, clutter, busy background, gradient background, scene, people, hands, photo, realistic
> photograph, blue, green, yellow, orange, purple, rainbow, neon, low-poly, cartoon outline,
> flat 2D, sketch, drop shadow, cast shadow, ground shadow, contact shadow, reflection, floor,
> ground plane, blur, noise, cropped, cut off, duplicate, deformed, inaccurate map, wrong borders.

**Watch for**: the double-headed eagle is intricate and the model may render it as a vague black
smear or give it the wrong number of heads. At 72px it reads as a black silhouette either way,
so judge it shrunk down, not at full size. If the eagle keeps failing, a plain red glass Albania
silhouette with a thin black rim still reads correctly — Albania is the only red-and-black
country shape in the row.

---

## After generating

1. Run **`remove_background`** on each of the eight images.
2. Save them as PNG with the filenames in the table at the top.
3. Drop them into `wp-content/themes/joq/assets/images/icons/`.
4. Reload the homepage — the tiles swap from the placeholder outlines to your icons on their
   own. There is a `file_exists` check per tile, so you can add them one at a time and the
   rest keep their placeholders.

**Check them together before committing.** Put all eight side by side at small size. They
should look like one family: same glass finish, same lighting direction, same visual weight,
same amount of red. If one stands out, regenerate that one — not the whole set.
