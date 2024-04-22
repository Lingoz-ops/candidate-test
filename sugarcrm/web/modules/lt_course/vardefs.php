<?php 

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_course'] = [
    'label' => 'Course',
    'detail_view_class' => 'CourseDetailView',
    'edit_view_class' => 'CourseEditView',
    'fields' => [
        'id' => [],
        'course_name' => [
            'type' => 'string',
            'null' => false,
            'length' => 50,
            'default' => ''
        ],

    ],
    'related_modules' => [
        'lt_course_student' => [
            'relationship_type' => 'many-to-many',
            'join_table' => 'lt_course_student',
            'join_key_lhs' => 'course_id',
            'join_key_rhs' => 'student_id',
        ],
        'lt_teacher_course' => [
            'relationship_type' => 'many-to-one',
            'relation_key_lhs' => 'teacher_id',
        ]
    ],
    'detail_view_fields' => [
        ['course_name'],
        ['start_date', 'end_date'],
    ],
    'edit_view_fields' => [
        ['course_name'],
        ['start_date', 'end_date'],
    ],
    'list_view_fields' => ['course_name', 'start_date', 'end_date'],
];
