<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/laragon/www/my-grav-site/user/pages/05.contact/form.md',
    'modified' => 1715069128,
    'size' => 564,
    'data' => [
        'header' => [
            'title' => 'Contact',
            'form' => [
                'name' => 'contact',
                'fields' => [
                    'name' => [
                        'label' => 'Name',
                        'placeholder' => 'Enter your name',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'email' => [
                        'label' => 'Email',
                        'placeholder' => 'Enter your email address',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'message' => [
                        'label' => 'Message',
                        'placeholder' => 'Enter your message',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    'submit' => [
                        'type' => 'submit',
                        'value' => 'Submit'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Contact
form:
  name: contact

  fields:
    name:
      label: Name
      placeholder: Enter your name
      autocomplete: on
      type: text
      validate:
        required: true

    email:
      label: Email
      placeholder: Enter your email address
      type: email
      validate:
        required: true

    message:
      label: Message
      placeholder: Enter your message
      type: textarea
      validate:
        required: true

  buttons:
    submit:
      type: submit
      value: Submit',
        'markdown' => '[center]<h1>Contact Us</h1>[/center]
'
    ]
];
