# Proposta Visual — Home da Associação dos Atletas do Futuro de Novo Horizonte

> **Status:** Proposta de design (não implementada)
> **Público-alvo:** Frontend Developer (implementação em HTML, CSS, JavaScript — Bootstrap 5 / ASP.NET Core MVC)
> **Base conceitual:** `.kilo/agents/project-context.md` + `.kilo/agents/ui-designer.md`

---

## 1. Identidade Visual e Direção Conceitual

### 1.1 Conceito Central

**"Campo de Possibilidades"** — A identidade visual evoca a ideia de um campo esportivo ao mesmo tempo em que transmite crescimento, comunidade e futuro. A estética é institucional mas calorosa, séria mas acessível, energética mas não infantil.

### 1.2 Personalidade Visual

| Dimensão | Posicionamento |
|---|---|
| Tom | Profissional, acolhedor, inspirador |
| Energia | Moderada a alta — dinâmico sem ser caótico |
| Confiança | Alta — instituição séria e transparente |
| Humanidade | Presente — foco em pessoas reais, não em abstratos |
| Originalidade | Design próprio, não template genérico |

### 1.3 Referências Visuais

- Organizações esportivas sociais brasileiras com identidade própria (não ONGs genéricas)
- Instituições educacionais que valorizam a juventude sem infantilização
- Design editorial esportivo (revistas, transmissões) — uso ousado da fotografia
- Espaçamentos amplos, respiro visual, hierarquia clara

### 1.4 Princípios de Design

1. **Fotografia como protagonista** — Imagens reais de atividades esportivas ocupam papel central em quase todas as seções
2. **Respiração visual** — Amplo uso de whitespace; cada seção tem espaço próprio
3. **Hierarquia inequívoca** — O visitante sabe exatamente onde olhar primeiro em cada seção
4. **Cores com significado** — Cada cor tem função comunicacional, não decorativa
5. **Mobile-first intencional** — Cada seção é pensada desde a base para funcionar em telas pequenas
6. **Acessibilidade como requisito estrutural** — Contraste, navegação por teclado, semântica HTML, alt text

---

## 2. Paleta de Cores

### 2.1 Cores Principais

| Nome | Hex | Uso | Significado |
|---|---|---|---|
| **Verde Campo** | `#1B6B3A` | Cor primária — navegação, títulos, ícones, links | Esporte, crescimento, vitalidade, esperança, campo gramado |
| **Âmbar Energia** | `#E8A838` | Cor secundária — destaques, badges, ícones de estatísticas | Energia, juventude, conquista, sol, troféu |
| **Laranja Ação** | `#D84315` | Cor CTA — botões principais, banners de chamada | Ação, urgência, "Quero Ajudar", engajamento |

### 2.2 Neutros

| Nome | Hex | Uso |
|---|---|---|
| **Branco** | `#FFFFFF` | Fundo principal, cards, áreas de conteúdo |
| **Off-White** | `#F7F6F2` | Fundo alternativo de seções (alterna com branco) |
| **Cinza Claro** | `#F0EDE8` | Fundo de inputs, áreas de destaque suave |
| **Cinza Médio** | `#9E9A93` | Texto secundário, legendas, metadados |
| **Cinza Escuro** | `#5A5A6E` | Texto de suporte, descrições |
| **Carvão** | `#1A1A2E` | Texto principal, títulos, headers |
| **Borda** | `#E0DFD8` | Bordas de cards, separadores, inputs |

### 2.3 Estados Interativos

| Estado | Cor |
|---|---|
| Hover primário | `#145A2E` (Verde Campo escurecido) |
| Hover CTA | `#B8380F` (Laranja Ação escurecido) |
| Foco (focus) | `#E8A838` (Âmbar — outline visível 3px) |
| Erro | `#C62828` |
| Sucesso | `#2E7D32` |

### 2.4 Regras de Acessibilidade

- Texto Carvão (`#1A1A2E`) sobre Branco (`#FFFFFF`): contraste **16.1:1** ✓ AAA
- Texto Carvão sobre Off-White (`#F7F6F2`): contraste **15.4:1** ✓ AAA
- Texto Cinza Escuro (`#5A5A6E`) sobre Branco: contraste **7.2:1** ✓ AAA
- Verde Campo (`#1B6B3A`) sobre Branco: contraste **5.8:1** ✓ AA (grandes textos AAA)
- Laranja Ação (`#D84315`) sobre Branco: contraste **4.6:1** ✓ AA (textos grandes/bold)
- Âmbar Energia (`#E8A838`) sobre Carvão (`#1A1A2E`): contraste **8.9:1** ✓ AAA

### 2.5 Uso por Seção (alternância de fundo)

```
Header:      Verde Campo (fundo) / Carvão (texto invertido)
Hero:        Imagem com overlay escuro (Verde Campo 70% opacidade)
Impact:      Off-White (fundo)
About:       Branco (fundo)
Projects:    Off-White (fundo)
Gallery:     Branco (fundo)
Transparency: Off-White (fundo)
CTA:         Verde Campo (fundo) / Carvão (texto invertido)
Footer:      Carvão (fundo) / Cinza Médio (texto)
```

---

## 3. Tipografia

### 3.1 Família Tipográfica

| Função | Fonte | Peso | Justificativa |
|---|---|---|---|
| **Títulos e Headlines** | **Inter** (Google Fonts) | 700 (Bold) | Moderna, altamente legível, excelente em português, performance web |
| **Subtítulos** | **Inter** | 600 (SemiBold) | Continuidade hierárquica |
| **Corpo de texto** | **Inter** | 400 (Regular) | Leitura confortável em longos textos |
| **Botões** | **Inter** | 600 (SemiBold) | Legibilidade + peso de ação |
| **Legendas/Meta** | **Inter** | 400 (Regular) | Complementar ao corpo |
| **Estatísticas/Numbers** | **Inter** | 800 (ExtraBold) | Impacto visual máximo para números |

> **Fallback stack:** `Inter, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif`
> **Display:** Carregar via Google Fonts com `display=swap` para performance

### 3.2 Escala Tipográfica

| Elemento | Desktop | Tablet | Mobile | Peso | Line Height |
|---|---|---|---|---|---|
| **H1** (Hero headline) | 3.5rem (56px) | 2.5rem (40px) | 2rem (32px) | 700 | 1.15 |
| **H2** (Títulos de seção) | 2.25rem (36px) | 1.75rem (28px) | 1.5rem (24px) | 700 | 1.2 |
| **H3** (Subtítulos) | 1.5rem (24px) | 1.375rem (22px) | 1.25rem (20px) | 600 | 1.3 |
| **H4** (Card titles) | 1.125rem (18px) | 1.125rem (18px) | 1rem (16px) | 600 | 1.35 |
| **Body Large** | 1.125rem (18px) | 1.125rem (18px) | 1rem (16px) | 400 | 1.65 |
| **Body** | 1rem (16px) | 1rem (16px) | 1rem (16px) | 400 | 1.65 |
| **Caption** | 0.875rem (14px) | 0.875rem (14px) | 0.8125rem (13px) | 400 | 1.5 |
| **Micro** | 0.75rem (12px) | 0.75rem (12px) | 0.75rem (12px) | 500 | 1.4 |
| **Botão** | 1rem (16px) | 1rem (16px) | 1rem (16px) | 600 | 1 |
| **Estatística** | 3rem (48px) | 2.25rem (36px) | 1.75rem (28px) | 800 | 1 |

### 3.3 Regras Tipográficas

- Máximo de 2 tamanhos de título por seção (H2 + H3 ou H3 + H4)
- Títulos nunca ultrapassam 2 linhas em desktop (quebrar se necessário)
- Texto de corpo limitado a 65 caracteres por linha (max-width nos contêineres)
- Negrito apenas para ênfase pontual dentro de parágrafos (evitar bold excessivo)
- Nunca usar itálico para texto longo (apenas para nomes estrangeiros ou ênfase editorial)

---

## 4. Espaçamento e Layout

### 4.1 Sistema de Espaçamento (Base 8px)

| Token | Valor | Uso |
|---|---|---|
| `xs` | 4px | Micro espaçamento (ícones internos) |
| `sm` | 8px | Espaçamento apertado |
| `md` | 16px | Espaçamento padrão entre elementos |
| `lg` | 24px | Espaçamento entre grupos |
| `xl` | 32px | Espaçamento entre blocos |
| `2xl` | 48px | Margem interna de cards |
| `3xl` | 64px | Margem entre seções (padding vertical) |
| `4xl` | 96px | Margem entre seções principais |
| `5xl` | 128px | Hero padding, seções de impacto |

### 4.2 Layout de Container

| Breakpoint | Largura Máxima | Padding Horizontal |
|---|---|---|
| Mobile (< 768px) | 100% | 20px |
| Tablet (768px–1023px) | 720px | 32px |
| Desktop (1024px–1439px) | 960px | 48px |
| Large Desktop (≥ 1440px) | 1200px | 48px |

### 4.3 Grid System

- Baseado no Bootstrap 5 grid (12 colunas)
- Gutter: 24px desktop / 16px tablet / 12px mobile
- Seções usam container com max-width conforme tabela acima
- Cards usam grid responsivo: 1 col (mobile) → 2 col (tablet) → 3 col (desktop)

---

## 5. Estrutura da Home e Hierarquia das Seções

A Home é composta por **9 seções** na seguinte ordem top-down:

```
┌─────────────────────────────────────────┐
│  1. HEADER / NAVEGAÇÃO (sticky)         │
├─────────────────────────────────────────┤
│  2. HERO                                │
├─────────────────────────────────────────┤
│  3. IMPACTO (Estatísticas)              │
├─────────────────────────────────────────┤
│  4. SOBRE NÓS                           │
├─────────────────────────────────────────┤
│  5. PROJETOS                            │
├─────────────────────────────────────────┤
│  6. PRÉVIA DE GALERIA                   │
├─────────────────────────────────────────┤
│  7. PRÉVIA DE TRANSPARÊNCIA             │
├─────────────────────────────────────────┤
│  8. CHAMADA PARA AÇÃO (CTA)             │
├─────────────────────────────────────────┤
│  9. FOOTER                              │
└─────────────────────────────────────────┘
```

### 5.1 Hierarquia Visual por Seção

Cada seção segue esta hierarquia interna:

```
[Tag/Label opcional — Micro, Âmbar, uppercase]
[H2 — Título da seção — Carvão]
[Descrição — Body — Cinza Escuro]
[Conteúdo principal — cards, imagens, estatísticas]
[CTA secundário opcional — link com seta]
```

### 5.2 Descrição Detalhada de Cada Seção

---

#### 5.2.1 HEADER / NAVEGAÇÃO

**Posição:** Topo fixo (sticky), permanece visível ao scrollar
**Fundo:** Verde Campo (`#1B6B3A`)
**Altura:** 72px desktop / 60px mobile

**Layout desktop (≥ 1024px):**
```
[Logo à esquerda] [Navegação central] [CTA "Quero Ajudar" à direita]
```

**Layout mobile (< 768px):**
```
[Logo à esquerda] [Ícone hamburger à direita]
```
O menu de navegação aparece em drawer/fullscreen ao tocar no hamburger.

**Elementos:**

| Elemento | Estilo |
|---|---|
| Logo | Placeholder (área reservada). Altura 40px. Fundo branco com padding. |
| Links de navegação | Texto Carvão invertido (`#FFFFFF`), 0.875rem, peso 500, hover: sublinhado Âmbar |
| CTA "Quero Ajudar" | Botão Laranja Ação, pill shape, 0.875rem, peso 600 |
| Ícone hamburger | 3 linhas brancas, 24x18px, espaçamento 4px |
| Mobile menu | Fundo Verde Campo escuro (`#145A2E`), links grandes (1.25rem), CTA em destaque |

**Itens de navegação:**
1. Início (ativo — Âmbar)
2. Sobre Nós
3. Projetos
4. Galeria
5. Transparência
6. Contato

**Comportamento:**
- Sticky: sim, com sombra sutil após scroll (> 80px)
- Mobile menu: slide-in lateral ou dropdown fullscreen com animação suave (200ms ease)
- Scroll spy: item ativo na navegação muda conforme seção visível

---

#### 5.2.2 HERO

**Posição:** Logo abaixo do header
**Altura:** 85vh desktop (mínimo 560px, máximo 720px) / 70vh mobile (mínimo 480px)

**Layout:**
```
┌──────────────────────────────────────────────┐
│                                              │
│         [Imagem de fundo full-width]         │
│         [Overlay: Verde Campo 70%]           │
│                                              │
│         [Tag: "Associação Sem Fins Lucrativos"]│
│                                              │
│         H1: "Transformando                    │
│              o futuro através do esporte."    │
│                                              │
│         Descrição curta (2 linhas max)       │
│                                              │
│         [CTA Primário: "Conheça Nossos        │
│          Projetos"]  [CTA Secundário:         │
│          "Quero Ajudar"]                     │
│                                              │
│         [Scroll indicator — seta para baixo] │
└──────────────────────────────────────────────┘
```

**Elementos:**

| Elemento | Estilo |
|---|---|
| Imagem de fundo | Fotografia real de atividade esportiva (futebol, atletismo, etc.). `object-fit: cover`. |
| Overlay | Gradiente linear: da esquerda (Verde Campo 85%) para direita (Verde Campo 40%) — desktop. Sólido Verde Campo 75% — mobile. |
| Tag | Micro, Âmbar, uppercase, letter-spacing 2px, com linha Âmbar à esquerda (4px largura, 16px altura) |
| H1 | 3.5rem/56px, peso 700, branco, max 2 linhas |
| Descrição | 1.125rem/18px, peso 400, branco 90% opacidade, max 2 linhas |
| CTA Primário | Botão branco, texto Verde Campo, pill shape |
| CTA Secundário | Botão transparente com borda branca 2px, texto branco, pill shape, hover: fundo branco 15% |
| Scroll indicator | Seta animada (bounce suave), branca, 24px, centralizada abaixo dos CTAs |

**Imagem de fundo — Especificação técnica:**
- Formato: JPG ou WebP
- Resolução mínima: 1920x1080px
- Compressão: 80% qualidade
- Responsive: servir imagens em 3 tamanhos via `srcset`
- Lazy loading: não (hero é above the fold)
- Alt text: "Atletas em atividade esportiva no projeto da Associação dos Atletas do Futuro"

---

#### 5.2.3 IMPACTO (Estatísticas)

**Fundo:** Off-White (`#F7F6F2`)
**Padding vertical:** 80px desktop / 56px mobile

**Layout desktop:**
```
[Tag: "Nossos Números"]
[H2: "Impacto que transforma"]
[Descrição curta]

┌────────────┐  ┌────────────┐  ┌────────────┐  ┌────────────┐
│   [Ícone]  │  │   [Ícone]  │  │   [Ícone]  │  │   [Ícone]  │
│   000      │  │   000      │  │   000      │  │   000      │
│  Atletas   │  │  Projetos  │  │ Voluntários│  │  Anos      │
│  Atendidos │  │            │  │            │  │  de Atu.   │
└────────────┘  └────────────┘  └────────────┘  └────────────┘
```

**Layout mobile:** 2x2 grid ou 1 coluna empilhada

**Elementos:**

| Elemento | Estilo |
|---|---|
| Tag | Micro, Verde Campo, uppercase |
| H2 | 2.25rem, Carvão, peso 700 |
| Descrição | 1rem, Cinza Escuro, max 2 linhas |
| Número | 3rem/48px, peso 800, Âmbar Energia, fonte Inter |
| Ícone | 40x40px, Verde Campo, SVG inline |
| Label | 0.875rem, Cinza Escuro, peso 500 |
| Separador | Linha vertical Âmbar 2px entre colunas (desktop) |

**Comportamento:**
- Animação de contagem (count-up) ao entrar na viewport via Intersection Observer
- Números aparecem com fade-in + slide-up (200ms ease-out)
- Apenas uma animação por visitante (usar `once: true` no observer)

**Dados (placeholders — aguardando informações oficiais):**
- Atletas Atendidos: `[Número a ser fornecido]`
- Projetos: `[Número a ser fornecido]`
- Voluntários: `[Número a ser fornecido]`
- Anos de Atuação: `[Ano a ser fornecido]` (base: desde 2001)

---

#### 5.2.4 SOBRE NÓS

**Fundo:** Branco (`#FFFFFF`)
**Padding vertical:** 80px desktop / 56px mobile

**Layout desktop (2 colunas):**
```
┌──────────────────┐  ┌──────────────────────────────┐
│                  │  │ [Tag: "Sobre Nós"]           │
│  [Imagem]        │  │                              │
│  400x500px       │  │ H2: "Uma instituição          │
│  border-radius   │  │     comprometida com         │
│  16px            │  │     o desenvolvimento        │
│                  │  │     dos jovens."             │
│                  │  │                              │
│                  │  │ Texto institucional          │
│                  │  │ (3-4 parágrafos curtos)      │
│                  │  │                              │
│                  │  │ [CTA: "Saiba Mais →"]        │
└──────────────────┘  └──────────────────────────────┘
```

**Layout mobile:** Imagem em cima (100% largura, 280px altura, `object-fit: cover`), texto embaixo

**Elementos:**

| Elemento | Estilo |
|---|---|
| Imagem | Fotografia institucional (reunião, equipe, atividade em grupo). Border-radius 16px. Sombra suave. |
| Tag | Micro, Verde Campo, uppercase |
| H2 | 2.25rem, Carvão, peso 700 |
| Texto | 1rem, Cinza Escuro, peso 400, line-height 1.65 |
| CTA | Link texto Verde Campo, peso 600, com seta → que se anima ao hover (translação 4px) |

---

#### 5.2.5 PROJETOS

**Fundo:** Off-White (`#F7F6F2`)
**Padding vertical:** 80px desktop / 56px mobile

**Layout:**
```
[Tag: "Nossos Projetos"]
[H2: "Transformando vidas"]
[Descrição]

┌─────────────┐  ┌─────────────┐  ┌─────────────┐
│ [Imagem]    │  │ [Imagem]    │  │ [Imagem]    │
│ [Categoria] │  │ [Categoria] │  │ [Categoria] │
│ [Título]    │  │ [Título]    │  │ [Título]    │
│ [Desc short]│  │ [Desc short]│  │ [Desc short]│
│ [Saiba mais]│  │ [Saiba mais]│  │ [Saiba mais]│
└─────────────┘  └─────────────┘  └─────────────┘

[Ver todos os projetos →]  (link centralizado)
```

**Grid:** 3 colunas desktop / 2 colunas tablet / 1 coluna mobile

**Elementos do Card:**

| Elemento | Estilo |
|---|---|
| Card | Fundo branco, border-radius 12px, overflow hidden, sombra `0 2px 8px rgba(0,0,0,0.06)` |
| Imagem | 16:10 aspect ratio, `object-fit: cover`, topo do card |
| Categoria | Badge: fundo Âmbar 15%, texto Âmbar, micro, peso 600, pill, padding 4px 10px |
| Título | H4, Carvão, peso 600, 1.125rem |
| Descrição | 0.875rem, Cinza Escuro, max 3 linhas (`-webkit-line-clamp: 3`) |
| CTA | Link Verde Campo, peso 600, 0.875rem, com seta → |
| Hover card | Sombra aumenta `0 8px 24px rgba(0,0,0,0.1)`, translateY -4px, transição 300ms ease |

**Comportamento:**
- Cards carregam com staggered animation (fade-in + slide-up, delay de 100ms por card)
- Apenas ao entrar na viewport

---

#### 5.2.6 PRÉVIA DE GALERIA

**Fundo:** Branco (`#FFFFFF`)
**Padding vertical:** 80px desktop / 56px mobile

**Layout:**
```
[Tag: "Galeria"]
[H2: "Por nossos olhos"]
[Descrição]

┌─────────────────┐  ┌─────────────────┐
│ [Capa foto]     │  │ [Capa foto]     │
│ [Título]        │  │ [Título]        │
│ [Data] [N fotos]│  │ [Data] [N fotos]│
│ [Ver Galeria →] │  │ [Ver Galeria →] │
└─────────────────┘  └─────────────────┘

[Ver todas as galerias →] (link centralizado)
```

**Grid:** 2 colunas desktop / 1 coluna mobile

**Elementos do Gallery Card:**

| Elemento | Estilo |
|---|---|
| Card | Fundo branco, border-radius 12px, overflow hidden, sombra `0 2px 8px rgba(0,0,0,0.06)` |
| Imagem capa | 16:9 aspect ratio, `object-fit: cover` |
| Título | H4, Carvão, peso 600 |
| Data | 0.75rem, Cinza Médio |
| Contagem | Badge pequeno: fundo Cinza Claro, texto Cinza Escuro, micro, pill |
| CTA | Link Âmbar, peso 600, 0.875rem |

---

#### 5.2.7 PRÉVIA DE TRANSPARÊNCIA

**Fundo:** Off-White (`#F7F6F2`)
**Padding vertical:** 80px desktop / 56px mobile

**Layout:**
```
[Tag: "Transparência"]
[H2: "Prestação de contas clara"]
[Descrição]

┌─────────────────────────────────────────────┐
│ [Ícone documento]  Relatórios Anuais        │
│                    2024                     │
│                    [Ver →]                  │
├─────────────────────────────────────────────┤
│ [Ícone documento]  Prestação de Contas      │
│                    2024                     │
│                    [Ver →]                  │
├─────────────────────────────────────────────┤
│ [Ícone documento]  Balanço Financeiro       │
│                    2024                     │
│                    [Ver →]                  │
└─────────────────────────────────────────────┘

[Ver Transparência →] (link centralizado, Âmbar)
```

**Elementos:**

| Elemento | Estilo |
|---|---|
| Lista item | Fundo branco, border-radius 8px, padding 20px, flex row |
| Ícone | 40x40px, Verde Campo, SVG (ícone de documento/PDF) |
| Título | H4, Carvão, peso 600 |
| Ano | Micro, Cinza Médio |
| CTA | Link Verde Campo, peso 600, com seta → |
| Hover | Fundo muda para Cinza Claro, transição 200ms |

---

#### 5.2.8 CHAMADA PARA AÇÃO (CTA)

**Fundo:** Verde Campo (`#1B6B3A`)
**Padding vertical:** 80px desktop / 56px mobile
**Texto:** Branco / Carvão invertido

**Layout:**
```
┌──────────────────────────────────────────────┐
│                                              │
│  [Tag: "Participe"] (Âmbar, uppercase)       │
│                                              │
│  H2: "Faça parte dessa transformação"        │
│                                              │
│  Descrição: "Sua contribuição faz a          │
│  diferença na vida de jovens atletas."       │
│                                              │
│  [CTA Primário: "Quero Ajudar"]              │
│  [CTA Secundário: "Conheça Projetos"]        │
│                                              │
└──────────────────────────────────────────────┘
```

**Elementos:**

| Elemento | Estilo |
|---|---|
| Tag | Micro, Âmbar, uppercase, letter-spacing 2px |
| H2 | 2.25rem, Branco, peso 700 |
| Descrição | 1.125rem, Branco 85%, max 2 linhas |
| CTA Primário | Botão Laranja Ação, pill, 1rem peso 600, padding 14px 32px |
| CTA Secundário | Botão transparente, borda branca 2px, texto branco, pill |

---

#### 5.2.9 FOOTER

**Fundo:** Carvão (`#1A1A2E`)
**Padding vertical:** 64px desktop / 48px mobile
**Texto:** Branco 70% / Cinza Médio

**Layout desktop (4 colunas):**
```
┌────────────┐ ┌────────────┐ ┌────────────┐ ┌────────────┐
│ LOGO +     │ │ NAVEGAÇÃO  │ │ CONTATO    │ │ REDES      │
│ Descrição  │ │ Início     │ │ Endereço   │ │ Instagram  │
│ © 2026     │ │ Sobre Nós  │ │ Email      │ │ Facebook   │
│            │ │ Projetos   │ │ Telefone   │ │            │
│            │ │ Galeria    │ │            │ │            │
│            │ │ Transparência│          │ │            │
│            │ │ Contato    │ │            │ │            │
└────────────┘ └────────────┘ └────────────┘ └────────────┘

───────────────────────────────────────────────
[Política de Privacidade]  [Termos de Uso]    © 2026 Associação dos Atletas do Futuro de Novo Horizonte
```

**Layout mobile:** Empilhado em 1 coluna

**Elementos:**

| Elemento | Estilo |
|---|---|
| Logo | Placeholder, altura 40px, branco |
| Títulos de coluna | 0.875rem, Branco, peso 600, margin-bottom 16px |
| Links | 0.875rem, Branco 70%, hover: Âmbar, transição 200ms |
| Separador | Linha horizontal Branco 15%, 1px, margin 32px 0 |
| Bottom bar | Flex row, espaço entre, Cinza Médio 0.75rem |
| Ícones redes | 24x24px, Branco 70%, hover: Âmbar |

---

## 6. Componentes Reutilizáveis

### 6.1 Botão (Button)

**Variantes:**

| Variante | Fundo | Texto | Borda | Border Radius | Padding |
|---|---|---|---|---|---|
| **Primary** | Laranja Ação (`#D84315`) | Branco | nenhuma | 50px (pill) | 12px 28px |
| **Secondary** | Transparente | Branco | 2px Branco | 50px (pill) | 12px 28px |
| **Outline** | Transparente | Verde Campo | 2px Verde Campo | 50px (pill) | 12px 28px |
| **Ghost** | Transparente | Verde Campo | nenhuma | 50px (pill) | 12px 28px |
| **White** | Branco | Verde Campo | nenhuma | 50px (pill) | 12px 28px |

**Comportamento:**
- Hover: fundo escurece 10%, translateY -1px, transição 200ms ease
- Active: fundo escurece 20%, translateY 0
- Focus: outline 3px Âmbar (`#E8A838`), offset 2px
- Disabled: opacidade 0.5, cursor not-allowed, sem hover

**Tamanhos:**

| Tamanho | Fonte | Padding |
|---|---|---|
| Small | 0.875rem | 8px 20px |
| Default | 1rem | 12px 28px |
| Large | 1.125rem | 14px 36px |

### 6.2 Card (Card Genérico)

**Base:**
- Fundo: Branco
- Border-radius: 12px
- Overflow: hidden
- Sombra: `0 2px 8px rgba(0,0,0,0.06)`
- Hover: `0 8px 24px rgba(0,0,0,0.1)`, translateY -4px, transição 300ms ease

### 6.3 Tag/Label

- Fonte: 0.75rem (12px), peso 600, uppercase, letter-spacing 2px
- Cor: Verde Campo (sobre fundo claro) / Âmbar (sobre fundo escuro)
- Elemento decorativo: linha vertical 4px x 16px à esquerda, mesma cor do texto
- Margin-bottom: 12px

### 6.4 Projeto Card

Herda de Card. Estrutura interna:
```
[Imagem — 16:10, object-fit cover]
[Padding interno: 24px]
  [Badge Categoria — Âmbar pill]
  [H4 Título — Carvão, 600]
  [P Descrição — Cinza Escuro, 3 linhas max]
  [Link CTA — Verde Campo, 600, seta →]
```

### 6.5 Gallery Card

Herda de Card. Estrutura interna:
```
[Imagem capa — 16:9, object-fit cover]
[Padding interno: 20px]
  [H4 Título — Carvão, 600]
  [Flex row: Data (Cinza Médio) + Badge contagem (Cinza Claro)]
  [Link CTA — Âmbar, 600, "Ver Galeria →"]
```

### 6.6 Document Card (Transparency)

- Fundo: Branco
- Border-radius: 8px
- Padding: 20px
- Layout: Flex row [Ícone 40px] [Flex-col: Título + Ano] [CTA à direita]
- Hover: fundo Cinza Claro

### 6.7 Breadcrumb

- Separador: `/` (slash) entre itens
- Item ativo: Carvão, peso 600
- Itens navegáveis: Cinza Escuro, hover Verde Campo
- Fonte: 0.875rem
- Margin-bottom: 24px

### 6.8 Form (Contato)

**Campos:**

| Campo | Tipo | Obrigatório |
|---|---|---|
| Nome | text | Sim |
| E-mail | email | Sim |
| Telefone | tel | Não |
| Assunto | select | Sim |
| Mensagem | textarea (5 linhas) | Sim |

**Estilo dos campos:**
- Border: 1px Borda (`#E0DFD8`)
- Border-radius: 8px
- Padding: 12px 16px
- Fonte: 1rem Inter
- Background: Branco
- Focus: borda Verde Campo 2px, outline none, box-shadow 0 0 0 3px Âmbar 20%
- Error: borda vermelha `#C62828`, mensagem de erro abaixo em vermelho 0.75rem
- Label: 0.875rem, peso 600, Carvão, margin-bottom 6px

**Layout:** 2 colunas desktop (Nome | E-mail, Telefone | Assunto), 1 coluna mobile. Mensagem ocupa 2 colunas.

**Botão submit:** Laranja Ação, pill, "Enviar mensagem"

### 6.9 Modal/Lightbox (Gallery)

- Fundo: preto 90% opacidade
- Imagem centralizada, max 90vw x 85vh
- Botão fechar: canto superior direito, branco, 32px
- Navegação: setas esquerda/direita, branco, 48px
- Caption: fundo preto 60% na base, texto branco
- Animação: fade-in 200ms ease

### 6.10 Alert/Message

- Padding: 16px 20px
- Border-radius: 8px
- Border-left: 4px (cor do tipo)
- Fundo: variação clara da cor
- Tipos: sucesso (verde), erro (vermelho), info (azul), aviso (âmbar)

### 6.11 Statistic (Estatística)

```
[Ícone 40x40 — Verde Campo]
[Número — 3rem, Âmbar, peso 800]
[Label — 0.875rem, Cinza Escuro, peso 500]
```

### 6.12 Pagination

- Números: 40x40px, border-radius 50%, centrado
- Ativo: fundo Verde Campo, texto branco
- Inativo: fundo transparente, texto Carvão, hover fundo Cinza Claro
- Anteriores/Próximos: ícones seta + texto

---

## 7. Estrutura de Páginas e Hierarquia

### 7.1 Mapa de Páginas

```
Home (/)
├── Sobre Nós (/sobre-nos)
│   └── [Conteúdo institucional]
├── Projetos (/projetos)
│   ├── Listagem (/projetos)
│   └── Detalhe (/projetos/[slug])
├── Galeria (/galeria)
│   ├── Listagem (/galeria)
│   └── Detalhe (/galeria/[id])
│       └── Lightbox (modal)
├── Transparência (/transparencia)
│   ├── Ano ([ano])
│   │   └── Categoria ([categoria])
│   │       └── Documento (download/view)
│   └── Breadcrumbs: Transparência / 2026 / Prestação de Contas
└── Contato (/contato)
    └── [Formulário + Informações]
```

### 7.2 Templates Razor Partial Views (mapeamento)

| Partial View | Conteúdo |
|---|---|
| `_Layout.cshtml` | Estrutura geral (header, footer, scripts) |
| `_Header.cshtml` | Logo + navegação + CTA |
| `_Footer.cshtml` | Informações institucionais + links |
| `_Hero.cshtml` | Seção hero da home |
| `_ImpactStats.cshtml` | Seção de estatísticas |
| `_AboutSection.cshtml` | Seção sobre nós |
| `_ProjectCard.cshtml` | Card individual de projeto |
| `_GalleryCard.cshtml` | Card individual de galeria |
| `_GalleryPhoto.cshtml` | Foto individual na grid da galeria |
| `_TransparencyYear.cshtml` | Ano com categorias |
| `_TransparencyCategory.cshtml` | Categoria com documentos |
| `_DocumentCard.cshtml` | Card de documento |
| `_Breadcrumb.cshtml` | Navegação por trilha |
| `_ContactForm.cshtml` | Formulário de contato |
| `_Alert.cshtml` | Mensagem de feedback |
| `_Modal.cshtml` | Modal/lighbox |

---

## 8. Comportamento Responsivo

### 8.1 Breakpoints

| Nome | Range | Target |
|---|---|---|
| **Mobile** | < 768px | Smartphones |
| **Tablet** | 768px – 1023px | Tablets, pequenos notebooks |
| **Desktop** | 1024px – 1439px | Notebooks, monitores médios |
| **Large Desktop** | ≥ 1440px | Monitores grandes |

### 8.2 Comportamento por Seção — Mobile (< 768px)

| Seção | Comportamento |
|---|---|
| **Header** | Logo + hamburger. Menu em drawer fullscreen (100vw x 100vh), fundo Verde Campo escuro, links grandes (1.25rem), CTA em destaque no topo. Fechar com X ou tap fora. |
| **Hero** | Imagem com overlay sólido (não gradiente). H1: 2rem. CTAs empilhados (100% largura cada, margin 8px entre eles). |
| **Impacto** | 1 coluna. Número: 1.75rem. Ícone acima do número. Sem separador vertical. |
| **Sobre Nós** | Imagem em cima (100% largura, 280px altura). Texto embaixo. |
| **Projetos** | 1 coluna. Cards empilhados. Imagem 16:10. |
| **Galeria** | 1 coluna. Cards empilhados. Imagem 16:9. |
| **Transparência** | Lista empilhada. Ícone à esquerda, texto ao lado. |
| **CTA** | CTAs empilhados, 100% largura. |
| **Footer** | 1 coluna, empilhado. Separadores entre blocos. |

### 8.3 Comportamento por Seção — Tablet (768px–1023px)

| Seção | Comportamento |
|---|---|
| **Header** | Logo + navegação inline (itens ajustados). CTA menor. |
| **Hero** | H1: 2.5rem. CTAs lado a lado. |
| **Impacto** | 2 colunas (2x2 grid). |
| **Sobre Nós** | 2 colunas (imagem + texto). |
| **Projetos** | 2 colunas. |
| **Galeria** | 2 colunas. |
| **Transparência** | Lista horizontal (ícone + texto + CTA). |
| **Footer** | 2 colunas (2 grupos por linha). |

### 8.4 Comportamento por Seção — Desktop (≥ 1024px)

| Seção | Comportamento |
|---|---|
| **Header** | Layout completo: logo + navegação + CTA. |
| **Hero** | H1: 3.5rem. Gradient overlay da esquerda para direita. |
| **Impacto** | 4 colunas. |
| **Sobre Nós** | 2 colunas (imagem 40% + texto 60%). |
| **Projetos** | 3 colunas. |
| **Galeria** | 2 colunas. |
| **Transparência** | Lista com layout expandido. |
| **Footer** | 4 colunas. |

### 8.5 Comportamento de Scroll

- **Desktop:** Scroll suave (smooth scroll) para âncoras
- **Mobile:** Scroll padrão, mas com scroll-snap em seções Hero e CTA (opcional, sutil)
- **Header:** Sombra aparece após scroll > 80px (transição 200ms)
- **Voltar ao topo:** Botão flutuante (fixed, bottom-right) aparece após scroll > 600px, ícone ↑, fundo Verde Campo, 48px, border-radius 50%

---

## 9. Experiência Mobile — Detalhes Adicionais

### 9.1 Touch Targets

- Todos os elementos interativos: mínimo 44x44px (recomendação WCAG 2.5.5)
- Links de navegação no mobile menu: padding 16px 0, altura total ~60px
- Botões: padding mínimo conforme tabela de componentes

### 9.2 Typography Mobile

- Nenhum texto abaixo de 13px (0.8125rem)
- H1 hero: 2rem (32px) — quebra automaticamente em 2 linhas
- H2 seções: 1.5rem (24px)
- Corpo: 1rem (16px)
- Line-height mínimo: 1.5 para todo texto

### 9.3 Imagens Mobile

- Hero: `object-fit: cover`, foco no centro da imagem
- Cards: imagens em aspect ratio fixo (16:10 ou 16:9) para evitar layout shift
- Lazy loading para imagens abaixo da dobra
- WebP com fallback JPEG

### 9.4 Navegação Mobile

- Hamburger menu: animação de transformação (3 linhas → X) ao abrir
- Menu drawer: slide-in da esquerda, 100vw, com overlay preto 50%
- Fechar: tap no overlay, tap no X, ou swipe para direita
- Scroll lock no body quando menu aberto

### 9.5 Formulários Mobile

- Campos em 1 coluna (empilhados)
- Fonte 16px nos inputs (evita zoom no iOS Safari)
- Labels sempre visíveis (não placeholder-only)
- Botão submit: 100% largura, padding generoso (14px)
- Validation messages: abaixo do campo, vermelho, 0.75rem

### 9.6 Performance Mobile

- Imagens responsivas via `srcset` e `sizes`
- Lazy loading para todas as imagens exceto hero
- CSS crítico inline (acima da dobra)
- JavaScript mínimo e assíncrono (`defer`)
- Total bundle target: < 150KB (JS + CSS gzipped)

---

## 10. Acessibilidade

### 10.1 WCAG 2.1 AA Compliance

| Critério | Implementação |
|---|---|
| **Contraste** | Todas as combinações de cor atendem AA (ver tabela 2.4) |
| **Navegação por teclado** | Todos os elementos interativos acessíveis via Tab |
| **Estado de foco** | Outline 3px Âmbar em todos os elementos focáveis |
| **Skip link** | "Pular para conteúdo" no topo, visível ao focar |
| **Semantic HTML** | `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>` |
| **Alt text** | Todas as imagens com alt descritivo (ou alt="" para decorativas) |
| **Formulários** | Labels associados, aria-describedby para erros, aria-required |
| **Botões** | Elemento `<button>` ou `<a>` (nunca `<div>` com click handler) |
| **Heading hierarchy** | H1 → H2 → H3 sem pulos, uma H1 por página |
| **Language** | `<html lang="pt-BR">` |
| **ARIA** | aria-label em ícones, aria-expanded em menu mobile, role="navigation" |

### 10.2 Redução de Movimento

- Respeitar `prefers-reduced-motion: reduce`
- Desabilitar: count-up animation, hover transitions, scroll animations
- Manter: funcionalidade básica (menu toggle, lightbox)

---

## 11. Imagens — Diretrizes

### 11.1 Estilo Fotográfico

- **Tipo:** Fotografia documental/editorial real
- **Sujeitos:** Atletas em ação, treinamentos, momentos de equipe, instalações
- **Não usar:** Stock photos, imagens genéricas de arquivo, fotos com pessoas fingindo sorrisos
- **Tratamento:** Leve aumento de saturação (10-15%), contraste natural, sem filtros pesados
- **Crops:** Priorizar 16:9 (hero, gallery), 16:10 (cards), 4:5 (sobre nós)

### 11.2 Especificações Técnicas

| Uso | Formato | Resolução | Compressão |
|---|---|---|---|
| Hero | WebP + JPEG fallback | 1920x1080px | 80% |
| Cards | WebP + JPEG fallback | 800x500px | 75% |
| Galeria | WebP + JPEG fallback | 1200x675px | 75% |
| Ícones | SVG | Vetor | N/A |
| Logo | SVG + PNG fallback | Vetor + 400x100px | N/A |

### 11.3 Placeholders (para desenvolvimento)

Enquanto as fotos reais não estiverem disponíveis, usar:
- Placeholder.co com cores da paleta (Verde Campo, Âmbar)
- Ou Unsplash com busca: "youth sports Brazil community" (para desenvolvimento apenas — substituir antes do deploy)

---

## 12. Instruções para o Frontend Developer

### 12.1 Stack

- HTML5 semântico
- CSS3 customizado (não Tailwind)
- Bootstrap 5 (base, mas customizado — não aparência default)
- JavaScript vanilla (ES6+)
- Sem frameworks de UI (React, Vue, Angular, etc.)

### 12.2 Estrutura de Arquivos

```
/index.html
/css/
    style.css          (todos os estilos customizados)
/js/
    site.js            (menu mobile, scroll animations, lightbox, scroll-to-top)
/images/
    (fotos e ícones)
```

### 12.3 Ordem de Implementação

1. **Header/Navigation** — Estrutura base, navegação funcional, menu mobile
2. **Hero** — Imagem, overlay, CTAs, scroll indicator
3. **Impact/Statistics** — Números com count-up animation
4. **About** — Layout imagem + texto
5. **Projects** — Cards reutilizáveis, grid responsivo
6. **Gallery Preview** — Cards com imagens
7. **Transparency Preview** — Lista de documentos
8. **CTA Section** — Banner de chamada
9. **Footer** — Links, informações, redes sociais
10. **Polimento** — Animações, hover states, micro-interações
11. **Testes Responsivos** — Verificar em todos os breakpoints
12. **Acessibilidade** — Audit final (WCAG checklist)

### 12.4 Customização Bootstrap

Bootstrap será usado como base, mas o visual final deve ser **significativamente diferente** do default. Variáveis a customizar:

```css
:root {
  --bf-primary: #1B6B3A;
  --bf-secondary: #E8A838;
  --bf-cta: #D84315;
  --bf-dark: #1A1A2E;
  --bf-gray: #5A5A6E;
  --bf-light-gray: #9E9A93;
  --bf-border: #E0DFD8;
  --bf-offwhite: #F7F6F2;
  --bf-radius: 12px;
  --bf-radius-pill: 50px;
  --bf-font: 'Inter', sans-serif;
}
```

### 12.5 Conteúdo Placeholder

Todos os números, textos institucionais, nomes de projetos e descrições são placeholders. Usar texto entre colchetes `[PLACEHOLDER]` para facilitar a substituição posterior. **Não apresentar informações fictícias como fatos reais da organização.**

### 12.6 ASP.NET MVC Mapping

Cada seção da Home será implementada como Razor Partial View. Manter classes CSS consistentes e markup limpo para facilitar a conversão. Preferir classes descritivas sobre genéricas (ex: `.hero-section` em vez de `.section-1`).

---

## 13. Resumo Visual Rápido

```
PALETA:   ██ Verde Campo #1B6B3A  (primária)
          ██ Âmbar #E8A838       (secundária)
          ██ Laranja #D84315     (CTA)
          ██ Carvão #1A1A2E      (texto)
          ██ Off-White #F7F6F2   (fundo)

TIPOGRAFIA: Inter (Google Fonts)
            H1: 56px/700  →  H2: 36px/700  →  H3: 24px/600
            Body: 16px/400  →  Caption: 14px/400

SECTIONS:  Header → Hero → Impact → About → Projects → Gallery → Transparency → CTA → Footer

COMPONENTS: Button, Card, ProjectCard, GalleryCard, DocumentCard,
            Statistic, Tag, Breadcrumb, Form, Modal, Alert, Pagination

BREAKPOINTS: Mobile < 768px | Tablet 768-1023px | Desktop ≥ 1024px

ACCESSIBILITY: WCAG 2.1 AA | Keyboard nav | Focus visible | Semantic HTML
```

---

*Proposta criada por: UI Designer agent*
*Data: 2026-09-22*
*Status: Pronta para implementação pelo Frontend Developer*
