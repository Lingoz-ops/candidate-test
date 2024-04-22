<?php 

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_teacher'] = [
    'label' => 'Teacher',
    'detail_view_class' => 'TeacherDetailView',
    'edit_view_class' => 'TeacherEditView',
    'fields' => [
        'id' => [],
        'first_name' => [
            'type' => 'string',
            'null' => false,
            'length' => 50,
            'default' => ''
        ],
        'last_name' => [
            'type' => 'string',
            'null' => false,
            'length' => 50,
            'default' => ''
        ],
        'email' => [
            'type' => 'string',
            'null' => true,
            'length' => 100,
            'default' => ''
        ],
    ],
    'related_modules' => [
        'lt_teacher_course' => [
            'relationship_type' => 'one-to-many',
            'relation_key_rhs' => 'teacher_id',
        ]
    ],
    'detail_view_fields' => [
        ['first_name', 'last_name'],
        ['email'],
    ],
    'edit_view_fields' => [
        ['first_name', 'last_name', 'email'],
    ],
    'list_view_fields' => ['first_name', 'last_name', 'email'],
];
