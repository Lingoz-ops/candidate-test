<?php 

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_student'] = [
    'label' => 'Student',
    'detail_view_class' => 'StudentDetailView',
    'edit_view_class' => 'StudentEditView',
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
        'lt_course_student' => [
            'relationship_type' => 'many-to-many',
            'join_table' => 'lt_course_student',
            'join_key_lhs' => 'student_id',
            'join_key_rhs' => 'course_id',
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
