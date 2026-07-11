# FlySox SA — WooCommerce Setup Guide

This repo contains a custom WordPress/WooCommerce theme (`wp-content/themes/flysox-sa`) plus ready-to-import product data and policy copy for the FlySox SA online store.

## 1. Install WordPress + Plugins
On your hosting (or local environment), install WordPress, then activate these plugins:
- **WooCommerce** — core store engine
- **PayFast for WooCommerce** (or Yoco / PayGate) — South African card + EFT payments
- A courier/shipping plugin (Courier Guy, Fastway, PostNet, or Aramex) or WooCommerce's built-in flat-rate/table-rate shipping
- **Yoast SEO** or **RankMath** — for meta descriptions
- **Variation Swatches for WooCommerce** — renders the Color attribute as swatches instead of a dropdown (the theme's CSS already styles these)

## 2. Install the Theme
1. Zip the `wp-content/themes/flysox-sa` folder.
2. In WP Admin → Appearance → Themes → Add New → Upload Theme, upload the zip.
3. Activate **FlySox SA**.
4. Appearance → Menus: create a **Primary Menu** (Home, Shop, About Us) and a **Footer Menu**, assign them to the theme locations.
5. Appearance → Customize → **FlySox Homepage Hero**: confirm/edit the headline, subheadline, CTA label and free-shipping threshold (defaults already match the approved copy).

## 3. Create the Color Attribute
Products → Attributes → add attribute **Color** (slug `color`), then add these terms:

| Term | Suggested hex (for the swatch plugin) |
|---|---|
| Fire Red | #E4572E |
| Electric Blue | #1B98E0 |
| Sunshine Yellow | #FFC914 |
| Jungle Green | #2E933C |
| Ocean Teal | #16C79A |
| Charcoal Camo | #4A4E69 |
| Sunset Orange | #F77F00 |
| Royal Purple | #6A4C93 |

In Variation Swatches for WooCommerce, set each term's swatch type to **Color** (or **Image**, once you have per-colorway product photos) using the hex codes above.

## 4. Import the Products
`data/products-import.csv` contains 3 ready-made variable products (Braai Master, Joburg Nights, Big 5 Stripes), each with all 8 colorways as variations, using the approved product description template.

1. Products → Import → upload `data/products-import.csv`.
2. Map columns (the standard WooCommerce importer auto-maps these headers).
3. Run the import.
4. Before or after importing, add real product photos: upload one photo per colorway and attach it to that variation (Products → [Design] → Variations), and set a primary gallery image on the parent product.
5. Duplicate this CSV pattern for any additional designs — copy a product's 9 rows (1 parent + 8 variations), rename the SKU/Name, and adjust the description.

## 5. Currency & Tax
- WooCommerce → Settings → General: Currency = **South African rand (R)**, and set your store address.
- If VAT-registered: WooCommerce → Settings → Tax → enable VAT-inclusive pricing and add a 15% VAT rate.

## 6. Shipping Zones
WooCommerce → Settings → Shipping → add zones for **Gauteng**, **Western Cape**, and **Rest of South Africa**, each with a flat-rate or courier-calculated rate. Add a **free shipping** method with a minimum order amount of R500 to match the homepage hero copy (also editable via the Customizer field above).

Note: the homepage "Shop by Colour" swatches link to the shop page with a `filter_color` query parameter, which WooCommerce's layered-nav filtering (widget or block) uses automatically once a "Filter Products by Attribute" (Color) widget/block is placed on the shop page.

## 7. Trust & Compliance Pages
- Create a **Privacy Policy** page (Settings → Privacy → set it as the site's privacy page) and paste in `content/pages/privacy-policy.md`.
- Create a page at `/returns-exchanges/` and paste in `content/pages/returns-policy.md`.
- Create an **About Us** page, assign it the **About Us** page template (already in the theme) — leave the content blank to use the built-in approved copy, or paste your own into the block editor.

## 8. SEO
In Yoast/RankMath, set each product's meta description using the template in `docs/CONTENT.md` (swap in the design name), e.g.:
> Funky colorful socks for men, made in South Africa. Bold designs, comfy fit, fast local delivery. Shop FlySox SA today.

## Launch Checklist
- [ ] All products set up as variable products with color swatches
- [ ] ZAR currency + tax settings configured
- [ ] SA payment gateway connected and tested
- [ ] Shipping zones & rates configured
- [ ] Privacy Policy + Returns Policy pages live
- [ ] Homepage hero copy + About Us page published
- [ ] Meta descriptions added to each product for SEO
