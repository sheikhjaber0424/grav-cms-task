<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/laragon/www/my-grav-site/user/pages/03.contact/modular.md',
    'modified' => 1714995424,
    'size' => 130,
    'data' => [
        'header' => [
            'title' => 'Contact',
            'content' => [
                'items' => '@self.modular'
            ],
            'admin' => [
                'children_display_order' => 'collection'
            ]
        ],
        'frontmatter' => 'title: Contact
content:
    items: \'@self.modular\'
admin:
    children_display_order: collection',
        'markdown' => 'This is the contact Page'
    ]
];
