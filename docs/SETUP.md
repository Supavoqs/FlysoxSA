# FlySox SA — WooCommerce Setup Guide

This repo contains a custom WordPress/WooCommerce theme (`wp-content/themes/flysox-sa`) plus ready-to-import product data and policy copy for the FlySox SA online store.

## 1. Install WordPress + Plugins
On your hosting (or local environment), install WordPress, then activate these plugins:
- **WooCommerce** — core store engine
- **PayFast for WooCommerce** (or Yoco / PayGate) — South African card + EFT payments
- A courier/shipping plugin (Courier Guy, Fastway, PostNet, or Aramex) or WooCommerce's built-in flat-rate/table-rate shipping
- **Yoast SEO** or **RankMath** — for meta descriptions (the product CSV already carries these — see step 4)

## 2. Install the Theme
1. Zip the `wp-content/themes/flysox-sa` folder.
2. In WP Admin → Appearance → Themes → Add New → Upload Theme, upload the zip.
3. Activate **FlySox SA**.
4. Appearance → Menus: create a **Primary Menu** (Home, Shop, About Us) and a **Footer Menu**, assign them to the theme locations.
5. Appearance → Customize → **FlySox Homepage Hero**: confirm/edit the headline, subheadline, CTA label and free-shipping threshold (defaults already match the approved copy).

## 3. (Optional) Create the Color Attribute
The launch catalog (Section 4) is 18 fixed-pattern designs — each design is its own look, so they import as simple products, no color choice needed.

If you later want a design offered in multiple recolors of the *same* print, set this up first:
Products → Attributes → add attribute **Color** (slug `color`), then add terms with these suggested hex codes (for a swatch plugin like **Variation Swatches for WooCommerce**):

| Term | Suggested hex |
|---|---|
| Fire Red | #E4572E |
| Electric Blue | #1B98E0 |
| Sunshine Yellow | #FFC914 |
| Jungle Green | #2E933C |
| Ocean Teal | #16C79A |
| Charcoal Camo | #4A4E69 |
| Sunset Orange | #F77F00 |
| Royal Purple | #6A4C93 |

The theme's CSS already styles these swatches if you use them.

## 4. Import the Products
`data/products-import.csv` contains the 18-design launch catalog, sourced from the supplier's numbered sock catalog (see `docs/SUPPLIER-DESIGN-MAP.md` for which FlySox name maps to which supplier design #), each with its SEO meta description already attached:

- **Food Socks (6):** Avo Toast, Pizza Party, Braai Breakfast, Shisanyama Stack, Melon Summer, Donut Worry
- **Geometric Socks (2):** Argyle Attack, Boardroom Bold
- **Space Socks (2):** Space Cadet, Rocket Fuel
- **Ocean Socks (3):** Shark Bait, Turtle Power, Cape Crayfish
- **Animal Socks (4):** Good Boy, Corgi Crew, Boulders Beach, King of the Bush
- **Sport Socks (1):** Soccer Mad

1. Products → Import → upload `data/products-import.csv`.
2. Map columns — the standard headers auto-map, and the `Meta: _yoast_wpseo_metadesc` column maps straight to a custom field, which Yoast SEO reads as the search-result meta description automatically. (Using RankMath instead? Add a `Meta: rank_math_description` column with the same text before importing — see `docs/CONTENT.md` §5 for the full text per product.)
3. Run the import — this also creates the 6 product categories (`food-socks`, `geometric-socks`, `space-socks`, `ocean-socks`, `animal-socks`, `sport-socks`) used by the homepage's "Shop by Vibe" section.
4. Add real product photos: Products → [Design] → set a featured image and gallery.
5. Verify the supplier design numbers in `docs/SUPPLIER-DESIGN-MAP.md` against your actual quote/samples before ordering stock — they were read off a catalog screenshot and should be double-checked.
6. To add more designs later: pick a design from the supplier catalog, add a row to `docs/SUPPLIER-DESIGN-MAP.md`, then add a matching row to `data/products-import.csv` (including its own meta description) and re-import.

## 5. Currency & Tax
- WooCommerce → Settings → General: Currency = **South African rand (R)**, and set your store address.
- If VAT-registered: WooCommerce → Settings → Tax → enable VAT-inclusive pricing and add a 15% VAT rate.

## 6. Shipping Zones
WooCommerce → Settings → Shipping → add zones for **Gauteng**, **Western Cape**, and **Rest of South Africa**, each with a flat-rate or courier-calculated rate. Add a **free shipping** method with a minimum order amount of R500 to match the homepage hero copy (also editable via the Customizer field above).

## 7. Trust & Compliance Pages
- Create a **Privacy Policy** page (Settings → Privacy → set it as the site's privacy page) and paste in `content/pages/privacy-policy.md`.
- Create a page at `/returns-exchanges/` and paste in `content/pages/returns-policy.md`.
- Create an **About Us** page, assign it the **About Us** page template (already in the theme) — leave the content blank to use the built-in approved copy, or paste your own into the block editor.

## Launch Checklist
- [ ] 18-design launch catalog imported and categorized (Food / Geometric / Space / Ocean / Animal / Sport Socks)
- [ ] Per-product SEO meta descriptions confirmed live in Yoast/RankMath after import
- [ ] Supplier design numbers verified against samples/quote (`docs/SUPPLIER-DESIGN-MAP.md`)
- [ ] Product photos uploaded per design
- [ ] Regular prices reviewed (currently a R149 placeholder on every product — confirm real cost-plus-margin pricing before launch)
- [ ] ZAR currency + tax settings configured
- [ ] SA payment gateway connected and tested
- [ ] Shipping zones & rates configured
- [ ] Privacy Policy + Returns Policy pages live
- [ ] Homepage hero copy + About Us page published
