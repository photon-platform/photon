---
title: Send a Message
subtitle: Let us know who you are
taxonomy:
    photon:
        - footer
form:
    name: contact-form
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        -
            name: message
            label: Message
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
        - 
            name: confirmation
            type: honeypot
    buttons:
        -
            type: submit
            value: Submit
        -
            type: reset
            value: Reset
    process:
        -
            email:
                from: '{{ config.organization.email }}'
                to:
                    - '{{ config.organization.email }}'
                    - '{{ form.value.email }}'
                subject: '[CONTACT] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---

We are 
- happy to answer questions
- eager to hear feedback
- interested in collaboration

We look forward to hearing from you


===

FIll out the form below and we will get in touch as soon as possible
