<?php

return [
    'categories' => 'Categories',
    'slides' => 'Slides',
    'plugin' => [
        'name' => 'Slider',
        'description' => 'Free swiper slider adaptation for wintercms'
    ],
    'components' => [
        'slider' => [
            'name' => 'Slider component',
            'description' => 'Free swiper slider adaptation for wintercms'
        ]
    ],
    'buttons' => [
        'create' => 'Create',
        'create_and_close' => 'Create and Close',
        'save' => 'Save',
        'save_and_close' => 'Save and close',
        'cancel' => 'Cancel'
    ],
    'models' => [
        'category' => [
            'form' => [
                'parent' => 'Parent category',
                'emptyOption' => '(root)',
                'name' => 'Name',
                'active' => 'Active'
            ],
            'columns' => [
                'name' => 'Name',
                'active' => 'Active'
            ]
        ],
        'slide' => [
            'form' => [
                'active' => 'Active',
                'category' => 'Category',
                'name' => 'Name',
                'sub_name' => 'Sub name',
                'link' => 'Link',
                'button_text' => 'Button Text',
                'text' => 'Text',
                'image' => 'Image'
            ],
            'columns' => [
                'image' => 'Image',
                'name' => 'Name',
                'active' => 'Active'
            ]
        ]
    ],
    'controllers' => [
        'categories' => [
            'new' => 'New Category',

            'list' => 'Manage Categories',
            'return_to_list' => 'Return to categories list',

            'delete_request_confirm' => 'Are you sure you want to delete the selected Categories?',
            'delete_selected' => 'Delete selected',
            'deleting' => 'Deleting Category...',
            'delete_category_confirm' => 'Delete this category?',

            'creating' => 'Creating Category...',
            'saving' => 'Saving Category...'
        ],
        'slides' => [
            'new' => 'New Slide',

            'list' => 'Manage Slides',
            'return_to_list' => 'Return to slides list',

            'delete_request_confirm' => 'Are you sure you want to delete the selected Slides?',
            'delete_selected' => 'Delete selected',
            'deleting' => 'Deleting Slide...',
            'delete_category_confirm' => 'Delete this slide?',

            'creating' => 'Creating Slide...',
            'saving' => 'Saving Slide...'
        ]
    ]
];
