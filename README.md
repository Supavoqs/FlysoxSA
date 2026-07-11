# FlySox SA — Online Store

Funky, colorful socks for men. Proudly South African. Built on **WordPress + WooCommerce**.

This repo contains everything needed to stand up the FlySox SA store: a custom WooCommerce theme, an 18-design launch catalog sourced from a wholesale supplier, and all approved brand copy and legal pages.

## What's in here

```
wp-content/themes/flysox-sa/   Custom WooCommerce theme (hero homepage, Shop by Vibe categories, About Us template)
data/products-import.csv       18-design launch catalog with per-product SEO meta descriptions, ready for WooCommerce's product importer
docs/SUPPLIER-DESIGN-MAP.md    Maps each FlySox product to its supplier catalog design number, for reordering
content/pages/                 Privacy Policy (POPIA) and Returns & Exchanges (CPA) copy
docs/SETUP.md                  Step-by-step store setup guide (plugins, import, shipping, launch checklist)
docs/CONTENT.md                Canonical brand copy: tagline, hero copy, About Us, product description template, per-product SEO meta descriptions
```

## Brand
- **Tagline:** Step Up. Stand Out. 🧦🇿🇦
- **Sign-off:** Wear something loud. Wear FlySox.
- **Launch catalog (18 designs, 6 categories):**
  - Food: Avo Toast, Pizza Party, Braai Breakfast, Shisanyama Stack, Melon Summer, Donut Worry
  - Geometric: Argyle Attack, Boardroom Bold
  - Space: Space Cadet, Rocket Fuel
  - Ocean: Shark Bait, Turtle Power, Cape Crayfish
  - Animal: Good Boy, Corgi Crew, Boulders Beach, King of the Bush
  - Sport: Soccer Mad

## Quick Start
See [`docs/SETUP.md`](docs/SETUP.md) for the full walkthrough. In short:
1. Install WordPress + WooCommerce + recommended plugins
2. Upload/activate the `flysox-sa` theme
3. Import `data/products-import.csv` (creates products, SEO meta descriptions, and the 6 "Shop by Vibe" categories)
4. Set ZAR currency, tax, and shipping zones
5. Publish the Privacy Policy, Returns, and About Us pages
6. Go live 🔥
