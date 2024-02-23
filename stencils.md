---
layout: base.liquid
title: stencils
---

# Stencils

{% render 'stencil-list.liquid', title: 'Bands', posts: collections.bands %}
{% render 'stencil-list.liquid', title: 'Political', posts: collections.political %}
{% render 'stencil-list.liquid', title: 'Misc', posts: collections.misc %}
