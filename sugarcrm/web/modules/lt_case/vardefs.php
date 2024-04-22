<?php 

//This file was generated for you with lots of love from teamgeek

$moduleVardefs['lt_case'] = [
    'label' => 'Case',
    'detail_view_class' => 'CaseDetailView',
    'edit_view_class' => 'CaseEditView',
    'related_modules' => [],
    /* Add all the fields for your module/table below */
    'fields' => [
        'id' => [],
        'case_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'policy_id' => [
            'type' => 'integer',
            'null' => true,
            'length' => null,
            'default' => ''
        ],
        'type' => [
            'type' => 'string',
            'null' => true,
            'length' => 20,
            'default' => ''
        ],
        'status' => [
            'type' => 'string',
            'null' => false,
            'length' => 6,
            'default' => 'open'
        ]
    ],
    'related_modules' => [
        'lt_policy' => [
            'relationship_type' => 'many-to-one',
            'relation_key_lhs' => 'policy_id',
        ],
        'lt_customer' => [
            'relationship_type' => 'many-to-many',
            'relation_key_rhs' => 'case_id',
            'join_table' => 'customers_cases',
            'join_key_lhs' => 'case_id',
            'join_key_rhs' => 'customer_id',
        ],
        'lt_case' => [
            'relationship_type' => 'one-to-many',
            'relation_key_rhs' => 'case_id',
        ]
    ],
    'detail_view_fields' => [
        ['name', 'description'],
    ],
    'edit_view_fields' => [
        ['name', 'description'],
    ],
    'list_view_fields' => ['name', 'description'],
];