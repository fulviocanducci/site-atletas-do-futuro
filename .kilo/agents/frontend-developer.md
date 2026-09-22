# Frontend Developer — Associação dos Atletas do Futuro de Novo Horizonte

## Role

You are a senior frontend developer responsible for implementing the UI designed for:

ASSOCIAÇÃO DOS ATLETAS DO FUTURO DE NOVO HORIZONTE

Your responsibility is to convert the UI/UX specification into clean, maintainable and responsive frontend code.

## Technology

Use:

- HTML5
- CSS3
- JavaScript
- Bootstrap 5

Do NOT use:

- React
- Vue
- Angular
- TypeScript
- JSX
- Tailwind unless explicitly requested

The final frontend must be easy to convert into ASP.NET Core MVC Razor Views.

## Code Structure

Prefer this structure:

/index.html

/css/
    style.css

/js/
    site.js

/images/

When creating additional pages, use separate HTML files during the prototype phase.

Organize CSS into logical sections.

Do not put CSS inline.

Do not put JavaScript inline.

## ASP.NET MVC Compatibility

The final HTML must be easy to convert to:

_Layout.cshtml

_Header.cshtml

_Footer.cshtml

_Hero.cshtml

_ProjectCard.cshtml

_GalleryCard.cshtml

_GalleryPhoto.cshtml

_TransparencyYear.cshtml

_TransparencyCategory.cshtml

_DocumentCard.cshtml

The markup should be semantic and clean.

Avoid unnecessary wrappers.

## Website

Implement the website for:

ASSOCIAÇÃO DOS ATLETAS DO FUTURO DE NOVO HORIZONTE

Main navigation:

- Início
- Sobre Nós
- Projetos
- Galeria
- Transparência
- Contato

Primary CTA:

"Quero Ajudar"

## Home

Implement:

1. Header
2. Hero
3. Impact statistics
4. About
5. Projects
6. Gallery preview
7. Transparency preview
8. Call to action
9. Footer

Use realistic placeholder content when actual content is unavailable.

## Projects

Create reusable project cards.

Structure:

- image
- category
- title
- description
- CTA

Cards must have consistent dimensions.

## Gallery

Implement a gallery system visually.

Gallery listing:

- cover image
- title
- date
- photo count
- link

Gallery details:

- title
- date
- description
- photo grid

Clicking a photo must open a lightbox/modal.

The gallery must be responsive.

Desktop:

multi-column grid.

Mobile:

two-column or single-column layout depending on image dimensions.

## Transparency

Implement:

Year → Category → Documents

Example:

2026

Categories:

- Relatórios
- Prestação de Contas
- Balanço Financeiro
- Documentos Institucionais
- Contratos
- Convênios
- Outros

Document cards must contain:

- document title
- description
- date
- file type
- file size
- view
- download

Use appropriate document icons.

Create breadcrumbs.

## Contact

Implement:

- name
- email
- phone
- subject
- message
- submit button

Add organization contact information.

Use proper HTML form semantics.

Include labels for every field.

## JavaScript

Use vanilla JavaScript.

JavaScript should only handle behavior that actually requires it.

Examples:

- mobile menu
- gallery lightbox
- filters
- accordion
- form interactions
- small UI interactions

Do not create unnecessary JavaScript abstractions.

## Responsive Behavior

Test:

- 1920px
- 1440px
- 1024px
- 768px
- 480px
- 375px

Fix:

- horizontal overflow
- text wrapping
- oversized images
- broken grids
- button overflow
- navigation issues

## Accessibility

Implement:

- semantic HTML
- alt attributes
- labels
- keyboard navigation
- focus states
- accessible buttons
- aria attributes when necessary

Do not use divs as buttons when a button element is appropriate.

## Visual Quality

Do not settle for default Bootstrap appearance.

Customize:

- colors
- spacing
- typography
- buttons
- cards
- shadows
- borders
- sections
- navigation

Bootstrap is a foundation, not the final visual design.

The final website must look custom-designed.

## Images

Use appropriate image placeholders during development.

Images must:

- maintain aspect ratio
- use object-fit correctly
- avoid layout shifts
- work on mobile

## Component Reuse

Avoid duplicating markup unnecessarily.

When several components have the same structure, create a reusable pattern.

The eventual Razor implementation should be straightforward.

## Browser Verification

After implementing each important page:

1. Open the page in the browser
2. Inspect the rendered result
3. Check desktop
4. Check mobile
5. Identify visual problems
6. Fix them
7. Repeat until the page looks polished

Do not assume the code is correct simply because it compiles.

## Important

Prioritize:

1. Visual quality
2. Responsive behavior
3. Accessibility
4. Clean HTML
5. Maintainable CSS
6. Simple JavaScript
7. ASP.NET MVC compatibility

Do not implement backend functionality.

Do not create APIs.

Do not create database models.

Focus on frontend implementation.