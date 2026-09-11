# TNC Cyber Cafe — Next-Level Esports Product Landing Page

## 1. Project Title

**TNC Cyber Cafe — Next-Level Esports Product Landing Page**

---

## 2. Introduction

### What is a Product Landing Page?

A product landing page is a standalone web page designed specifically for marketing or advertising campaigns. Unlike traditional multi-page websites with broad navigation, a landing page focuses on a single goal: driving visitors toward a specific call-to-action (CTA), such as reserving a PC, checking rates, or locating a store branch.

### Why Landing Pages Matter for Businesses

- **Increased conversions** — By focusing on a single, compelling objective without distracting secondary navigation, landing pages yield significantly higher conversion rates.
- **Brand positioning** — They let businesses like TNC Cyber Cafe highlight key value propositions — RTX 40-series gaming rigs, 240Hz esports displays, and high-speed fiber internet — in a structured, visually engaging layout.
- **Audience engagement** — Modern consumers demand instant clarity. A well-designed landing page quickly answers *what* the service is, *why* it's better, and *how* to get started.

### Purpose of the Project

The primary purpose of this project is to build a modern, high-performance, responsive product landing page for **TNC Cyber Cafe** using **Laravel 11**, **Tailwind CSS**, and **Blade components**. It serves as a real-world application of modular UI architecture, responsive design techniques, and clean layout design tailored for the esports industry.

---

## 3. Objectives

During development, the following learning objectives were achieved:

- **Mastered modular UI architecture** — Built reusable, maintainable Blade UI components (`x-button`, `x-feature-card`, `x-pricing-card`, `x-testimonial-card`, `x-navbar`, `x-footer`).
- **Implemented utility-first CSS** — Used Tailwind CSS utility classes to design a dark-mode, esports-themed aesthetic with custom accent glows and backdrop-blur effects.
- **Enforced responsive web design** — Built fluid mobile, tablet, and desktop layouts using CSS Flexbox, CSS Grid, and Tailwind's responsive breakpoints (`sm:`, `md:`, `lg:`).
- **Developed vanilla JavaScript solutions** — Created a lightweight, responsive mobile navigation menu using vanilla JS for clean DOM-state toggling.
- **Structured the Laravel project architecture** — Organized views into logical folder hierarchies (`layouts`, `components`, `pages`) for clean code separation.

---

## 4. Responsive Web Design

### Mobile-First Design

The landing page was designed with a mobile-first mindset. Content structures are built for smaller viewports first, ensuring fast load times and clean single-column stacking, then scale up gracefully for desktop monitors.

### Responsive Breakpoints

Tailwind's built-in breakpoints shape layout behavior across devices:

| Breakpoint | Range | Behavior |
|---|---|---|
| **Mobile** | `< 640px` | Single-column stacked layouts, scaled-down typography, interactive hamburger menu |
| **Tablet** | `sm:` / `md:` 640–768px | Two-column card grids, visible nav links, adjusted horizontal padding |
| **Desktop** | `lg:` 1024px+ | Full multi-column grid layouts, expanded headers, desktop-optimized hover animations |

### Flexbox

Flexbox is used throughout navigation bars, card footer alignment, button clusters, and section headers, so items align predictably along a single axis regardless of content size.

### CSS Grid

CSS Grid powers the multi-card layout sections — **Services & Tiers**, **Rates & Pricing**, and **Testimonials** — transitioning automatically from one column on mobile (`grid-cols-1`) to three equal-width columns on medium/large viewports (`md:grid-cols-3`).

### User Experience (UX)

Responsive design guarantees that visitors on smartphones, tablets, or widescreen gaming PCs get zero horizontal scrolling, unclipped text, accessible tap targets, and consistent performance across screen sizes.

---

## 5. Tailwind CSS

### Utility-First CSS

Tailwind CSS provides low-level utility classes that allow full styling directly within Blade templates, without writing custom CSS files or managing complex class-naming conventions.

### Advantages of Tailwind CSS

- **Rapid UI iteration** — Instantly tweak padding, margins, colors, and shadows directly in Blade markup.
- **Built-in dark-theme consistency** — Uniform palette management using `bg-black`, `bg-neutral-900`, `text-slate-100`, and `text-orange-500`.
- **Zero style leakage** — Utility styles are scoped directly to their target elements.

### Responsive Utility Classes & Component Styling Examples

**Responsive grid utilities (feature cards section):**

```html
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
    <!-- Renders 1 column on mobile, 3 columns on desktop -->
</div>
```

**Glow card container styling:**

```html
<div class="bg-gradient-to-b from-neutral-900/80 to-black p-8 sm:p-12 rounded-3xl
            border border-orange-500/30 backdrop-blur-xl
            shadow-[0_0_50px_rgba(255,85,0,0.1)]">
    <!-- Styled with subtle borders, backdrop blur, and a radial orange glow -->
</div>
```

**Reusable button style variables:**

```php
@php
    $baseStyles = 'inline-flex items-center justify-center font-semibold rounded-xl
                    px-5 py-2.5 sm:px-6 sm:py-3 transition-all duration-300
                    text-xs sm:text-sm focus:outline-none';

    $primaryVariant = 'bg-orange-600 text-white hover:bg-orange-500
                        shadow-[0_0_20px_rgba(255,85,0,0.4)]
                        hover:shadow-[0_0_30px_rgba(255,85,0,0.7)]
                        border border-orange-500/50';
@endphp
```

---

## 6. Blade Components

### What Are Blade Components?

Blade components are reusable UI fragments in Laravel that encapsulate markup, styling, and behavior. They let developers create custom HTML tags (e.g., `<x-button>`, `<x-feature-card>`) that accept props and slots.

### Why Reusable Components Improve Maintainability

Instead of duplicating identical button markup or card layouts across multiple pages, component code lives in a single source file. Updating a styling detail in `resources/views/components/button.blade.php` immediately updates every instance across the entire site.

### Benefits of Modular UI Development

- **Consistency** — Ensures uniform button heights, border radii, colors, and hover transitions across all pages.
- **Readability** — Clean, high-level Blade syntax inside page templates makes code structure obvious at a glance.
- **Scalability** — Simplifies adding new sections or pages to the application in the future.

### Sample Code

**Calling the component in `landing.blade.php`:**

```blade
<x-feature-card
    image="{{ asset('images/VIP Zone.webp') }}"
    badge="VIP Esports"
    title="VIP Zone"
    description="Intel Core i7, RTX 4070, 32GB RAM, 240Hz monitors, and mechanical gaming gear."
/>
```

**Declaration in `resources/views/components/feature-card.blade.php`:**

```blade
@props(['image' => null, 'title', 'description', 'badge' => null])

<div class="group relative rounded-2xl bg-neutral-900/40 border border-neutral-800/80
            backdrop-blur-xl overflow-hidden hover:border-orange-500/50
            transition-all duration-300">

    <div class="relative h-48 sm:h-52 w-full bg-neutral-950 overflow-hidden
                border-b border-neutral-800/80">
        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}"
                 class="w-full h-full object-cover group-hover:scale-105
                        transition-transform duration-500">
        @endif
    </div>

    <div class="p-5 sm:p-6">
        <h3 class="text-lg font-bold text-white mb-2 uppercase">{{ $title }}</h3>
        <p class="text-neutral-400 text-xs sm:text-sm">{{ $description }}</p>
    </div>
</div>
```

---

## 7. User Interface Design

### Color Palette

| Role | Value |
|---|---|
| Primary background | `#000000` (Pure Black) & `#0a0a0a` (Neutral 950) |
| Primary accent / brand color | `#FF5500` / `bg-orange-600` (Esports Vivid Orange) |
| Secondary surfaces | `bg-neutral-900/40` with `backdrop-blur-xl` |
| Heading text | Slate White `#f8fafc` |
| Body text | Neutral 400 `#a3a3a3` |

### Typography

- **Headings:** Sans-serif black/extrabold uppercase (`font-black uppercase tracking-wider`) for a modern, aggressive gaming identity.
- **Body text:** Sans-serif medium weight (`text-xs sm:text-sm`) with high contrast against dark backgrounds for readability.

### Iconography

SVG vectors are used for action triggers — checkmarks in pricing cards, location pins, and the mobile hamburger/close toggles.

### Button Styles

- **Primary button:** Orange gradient glow, high-contrast white text, subtle scaling feedback.
- **Secondary / outline button:** Dark neutral background with an orange border accent (`border-orange-500/30`).

### Card Design

Glassmorphism aesthetic — translucent dark backgrounds (`bg-neutral-900/40`), micro-borders (`border-neutral-800`), and a smooth border-color shift on hover (`hover:border-orange-500/50`).

### Layout Consistency

All major sections follow an identical vertical rhythm (`py-16 sm:py-20`), bounded by consistent section borders (`border-t border-neutral-900`) and equalized card grids.

---

## 8. Folder Structure

```
week05-product-landing-page/
├── public/
│   ├── images/
│   │   ├── Regular Zone.webp
│   │   ├── TNC BANNER.jpg
│   │   ├── TNC LOGO.jpg
│   │   ├── Tournament Suite.webp
│   │   └── VIP Zone.webp
│   └── screenshots/
│       ├── Blade Components Folder.png
│       ├── Desktop Layout.png
│       ├── Features Section.png
│       ├── Footer.png
│       ├── GitHub Repository.png
│       ├── Hero Section.png
│       ├── Mobile Layout.png
│       ├── Navigation Bar.png
│       ├── Pricing Cards.png
│       ├── Tablet Layout.png
│       ├── Testimonials.png
│       └── VS Code Project Structure.png
├── resources/
│   └── views/
│       ├── components/
│       │   ├── layouts/
│       │   │   └── app.blade.php
│       │   ├── button.blade.php
│       │   ├── feature-card.blade.php
│       │   ├── footer.blade.php
│       │   ├── hero.blade.php
│       │   ├── navbar.blade.php
│       │   ├── pricing-card.blade.php
│       │   └── testimonial-card.blade.php
│       └── pages/
│           └── landing.blade.php
├── routes/
│   └── web.php
└── README.md
```

### Purpose of Key Directories

- **`resources/views/components/layouts`** — Houses the root application shell (`app.blade.php`), containing HTML head tags, meta titles, Vite scripts, and global page wrappers.
- **`resources/views/components`** — Holds all modular, reusable Blade UI components (button, navbar, hero, feature-card, pricing-card, testimonial-card, footer).
- **`resources/views/pages`** — Contains page-level views that combine components into full user routes (`landing.blade.php`).
- **`public`** — The public web root, containing asset folders like `images/` for web banners and `screenshots/` for documentation.
- **`public/screenshots`** — Holds full-page rendering, component, and project-structure screenshots for documentation verification.
- **`README.md`** — Comprehensive project documentation detailing setup instructions, design rationale, and architecture explanations.

---

## 9. Screenshots

| Section | Screenshot |
|---|---|
| Desktop view | `public/screenshots/Desktop Layout.png` |
| Tablet view | `public/screenshots/Tablet Layout.png` |
| Mobile view | `public/screenshots/Mobile Layout.png` |
| Navigation bar | `public/screenshots/Navigation Bar.png` |
| Hero section | `public/screenshots/Hero Section.png` |
| Features section | `public/screenshots/Features Section.png` |
| Pricing section | `public/screenshots/Pricing Cards.png` |
| Testimonials section | `public/screenshots/Testimonials.png` |
| Footer | `public/screenshots/Footer.png` |
| Blade components folder | `public/screenshots/Blade Components Folder.png` |
| GitHub repository | `public/screenshots/GitHub Repository.png` |
