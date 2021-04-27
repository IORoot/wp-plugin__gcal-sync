<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_60433733f3e4f',
        'title' => 'gCal Importer',
        'fields' => array(
            array(
                'key' => 'field_604337742c733',
                'label' => 'Auth',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_604337562c732',
                'label' => 'Authorise',
                'name' => 'authorise',
                'type' => 'oAuthgcal',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'oauthservice' => 'gcal',
            ),
            array(
                'key' => 'field_6045df53955ec',
                'label' => 'Calendar',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_604630b3c339c',
                'label' => 'Calendar',
                'name' => 'gcal_calendar',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6045df5a955ed',
                        'label' => 'Calendar ID',
                        'name' => 'calendarId',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'choices' => array(
                            0 => 'andy@londonparkour.com',
                            1 => 'londonparkour.com_4e9a8gsjtqbmiaf339h32fcg6o@group.calendar.google.com',
                            2 => 'c_n2gl68dpfre8o8vacadi69ab2k@group.calendar.google.com',
                            3 => 'londonparkour.com_lf0j3dmg65fn8hoas3m3fe72t8@group.calendar.google.com',
                        ),
                        'default_value' => false,
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_604630d6c339d',
                        'label' => 'Max Results',
                        'name' => 'maxResults',
                        'type' => 'number',
                        'instructions' => 'Number of events ahead to get.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => 10,
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_6087f12119e70',
                        'label' => 'Skip Private Events',
                        'name' => 'skip_private_events',
                        'type' => 'true_false',
                        'instructions' => 'Any events that are marked as \'private\' on visibility will not be inserted.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'message' => '',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_604646a770750',
                'label' => 'Posts',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_6046470370751',
                'label' => 'Posts',
                'name' => 'gcal_posts',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6046471670752',
                        'label' => 'Post Type',
                        'name' => 'post_type',
                        'type' => 'text',
                        'instructions' => 'The post type to insert items into.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => 'posts',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_604655e3f8d4a',
                'label' => 'Extra Fields',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_604655fcf8d4b',
                'label' => 'Extra Fields',
                'name' => 'extra_fields',
                'type' => 'repeater',
                'instructions' => 'Matching on the Event Title (gCal event summary field), add these fields onto each event before inserting into CPT.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'collapsed' => 'field_6046560cf8d4c',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6046560cf8d4c',
                        'label' => 'Event Title Match',
                        'name' => 'event_title_match',
                        'type' => 'text',
                        'instructions' => 'Make sure this matches the event or recurring event title.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_60465639f8d4d',
                        'label' => 'Featured Image',
                        'name' => 'featured_image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_60465663f8d4e',
                        'label' => 'Meta Fields',
                        'name' => 'meta_fields',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'collapsed' => 'field_6046567ef8d4f',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'block',
                        'button_label' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_6046567ef8d4f',
                                'label' => 'Field Key',
                                'name' => 'additional_field_key',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '30',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'hide_admin' => 0,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_60465699f8d50',
                                'label' => 'Field Value',
                                'name' => 'additional_field_value',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '70',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'hide_admin' => 0,
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'key' => 'field_6049dd49580ae',
                'label' => 'Regex Replace',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_6049dd63580af',
                'label' => 'Regex Replace',
                'name' => 'regex_replace',
                'type' => 'repeater',
                'instructions' => 'When the main event description is imported, perform these preg_replace() on it.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'collapsed' => 'field_6049eb66c7f36',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6049eb66c7f36',
                        'label' => 'Label',
                        'name' => 'label',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_6049dd70580b0',
                        'label' => 'Regex Pattern',
                        'name' => 'Pattern',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => 'ue__codemirror',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => 2,
                        'new_lines' => '',
                    ),
                    array(
                        'key' => 'field_6049dd86580b1',
                        'label' => 'Replacement',
                        'name' => 'replacement',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => 'ue__codemirror',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => 2,
                        'new_lines' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_6059ff66c7948',
                'label' => 'Scheduler',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_605a01aac7949',
                'label' => 'Scheduler Clone',
                'name' => 'scheduler_clone',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'clone' => array(
                    0 => 'group_605a01d3184bf',
                ),
                'display' => 'seamless',
                'layout' => 'block',
                'prefix_label' => 0,
                'prefix_name' => 0,
            ),
            array(
                'key' => 'field_605a1fd5d06a5',
                'label' => 'Trash',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_605a1fe2d06a6',
                'label' => 'Trash seconds',
                'name' => 'trash_seconds',
                'type' => 'number',
                'instructions' => 'Number of seconds after startUnix value has passed before post_status is changed to \'trash\'.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'default_value' => 3600,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'gcal_importer',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_605a01d3184bf',
        'title' => 'Scheduler Clone',
        'fields' => array(
            array(
                'key' => 'field_605a024d87eb9',
                'label' => 'Schedule',
                'name' => 'schedule',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'collapsed' => 'field_605a02e087ebb',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_605a07e89802d',
                        'label' => 'Enabled',
                        'name' => 'enabled',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '15',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'message' => '',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_605a02e087ebb',
                        'label' => 'Schedule Label',
                        'name' => 'schedule_label',
                        'type' => 'text',
                        'instructions' => 'Required',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '30',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_605a02fb87ebc',
                        'label' => 'Schedule Repeats',
                        'name' => 'schedule_repeats',
                        'type' => 'select',
                        'instructions' => 'Required',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '30',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'choices' => array(
                            '1min' => '1 Minute',
                            '2mins' => '2 Minutes',
                            '3mins' => '3 Minutes',
                            '5mins' => '5 Minutes',
                            '10mins' => '10 Minutes',
                            '30mins' => '30 Minutes',
                            '1hour' => '1 Hour',
                            '2hours' => '2 Hours',
                            '3hours' => '3 Hours',
                            '4hours' => '4 Hours',
                            '6hours' => '6 Hours',
                            '12hours' => '12 Hours',
                            '2days' => '2 days',
                            '3days' => '3 days',
                            '1week' => '1 week',
                            '2weeks' => '2 weeks',
                            '4weeks' => '4 weeks',
                            '1month' => '1 month',
                            '3months' => '3 months',
                            'weekly' => 'Once Weekly',
                            'wp_convert_yoast_blocks_cron_interval' => 'Every 5 Minutes',
                            'wp_convert_schema_posts_cron_interval' => 'Every 5 Minutes',
                            'wp_fetch_search_console_data_cron_interval' => 'Every 5 Minutes',
                            'wio_1_min' => '1 min',
                            'wio_2_min' => '2 min',
                            'wio_5_min' => '5 min',
                            'wio_10_min' => '10 min',
                            'wio_30_min' => '30 min',
                            'wio_hourly' => '60 min',
                            'wio_daily' => 'daily',
                            'hourly' => 'Once Hourly',
                            'twicedaily' => 'Twice Daily',
                            'daily' => 'Once Daily',
                            'none' => 'None',
                        ),
                        'default_value' => false,
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_605a035087ebd',
                        'label' => 'Schedule Starts',
                        'name' => 'schedule_starts',
                        'type' => 'date_time_picker',
                        'instructions' => 'Optional',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '25',
                            'class' => '',
                            'id' => '',
                        ),
                        'hide_admin' => 0,
                        'display_format' => 'Y-m-d H:i:s',
                        'return_format' => 'U',
                        'first_day' => 1,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;