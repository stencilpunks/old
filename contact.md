---
layout: base.liquid
title: Contact
---

# Suggestion / Contact Box

We realized that posting a form that directly contacts a group email account (as opposed to posting an email address
to contact) was probably one of the only ways alot of kids were going to actually make suggestions and give feedback.
It seems to be working. We get several emails a week filled with positive feedback and stencil requests. For both, we
thank you. The requests are one of the only things keeping this site alive.

\*\* If your using this form to ask a question, please read the [FAQ](/faq) page to see if your question has
already been answered.

## Contact

<form name="contact" method="POST" data-netlify="true">
  <label>
    Name
    <input type="text" id="name" name="name" required placeholder="Sid Vicious">
  </label>
  <label>
    Email
    <input type="email" id="email" name="email" required placeholder="sidvicious@domain.com">
  </label>
  <label for="message">Message</label>
  <textarea name="message" id="message" required>Your message here.</textarea>
  <button>Contact</button>
</form>
