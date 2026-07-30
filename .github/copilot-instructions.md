# Eltronix Project Instructions

## Project

This is a production-grade B2B electronics ecommerce platform built with:

- WordPress
- WooCommerce
- PHP 8+
- Tailwind CSS 4
- Vite
- Alpine.js

Do not generate code that conflicts with WordPress coding standards.

---

## Theme Responsibilities

The theme is responsible for:

- UI
- Layout
- Templates
- Styling
- WooCommerce template overrides

Never put business logic inside the theme.

---

## Plugin Responsibilities

The plugin is responsible for:

- RFQ
- Dealer registration
- Dealer pricing
- Admin features
- Business rules
- APIs

---

## PHP

- Follow WordPress Coding Standards.
- Escape output.
- Sanitize input.
- Validate user data.
- Use reusable functions.

---

## CSS

- Use Tailwind CSS utilities.
- Avoid custom CSS unless necessary.
- Mobile-first.
- Accessible.

---

## JavaScript

- Use ES modules.
- Use Alpine.js for UI interactions.
- Avoid jQuery unless WooCommerce requires it.

---

## Components

Generate reusable components.

Avoid duplicated code.

---

## Performance

Always prefer:

- semantic HTML
- lazy loading
- optimized assets
- accessibility