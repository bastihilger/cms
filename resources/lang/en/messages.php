<?php

return [
    'activate_account_notification_body' => 'You are receiving this email because we received a password reset request for your account.',
    'activate_account_notification_subject' => 'Activate Your Account',
    'asset_container_blueprint_instructions' => 'Blueprints define the available custom fields on your assets.',
    'asset_container_create_folder_instructions' => 'The ability to create folders in this container.',
    'asset_container_disk_instructions' => 'The filesystem disk this container will use.',
    'asset_container_move_instructions' => 'The ability to move files around in this container.',
    'asset_container_quick_download_instructions' => 'Enable the quick download button when editing files.',
    'asset_container_rename_instructions' => 'The ability to rename files in this container.',
    'asset_folders_directory_instructions' => 'We recommend avoiding spaces and special characters to keep your URLs clean.',
    'blueprints_button_help_text' => 'You will be able to customize your Blueprint once it\'s created.',
    'blueprints_title_instructions' => 'Usually a singular noun, like Article or Product',
    'cache_utility_application_cache_description' => 'Laravel\'s unified cache used by Statamic, third party addons, and composer packages.',
    'cache_utility_description' => 'Manage and view important information about Statamic\'s various caching layers.',
    'cache_utility_image_cache_description' => 'The image cache stores copies of all transformed and resized images.',
    'cache_utility_stache_description' => 'The Stache is Statamic\'s content store that functions much like a database. It is generated automatically from your content files.',
    'cache_utility_static_cache_description' => 'Static pages bypass Statamic completely and are rendered directly from your server for maximum performance.',
    'collection_wizard_amp_instructions' => 'AMP versions will be routed to <code>{site url}/amp/{entry url}</code>',
    'collection_wizard_articles_description' => 'Entries with dates in the future will be private.',
    'collection_wizard_blueprints_instructions' => 'Choose from existing Blueprints or create a new one.',
    'collection_wizard_content_model_intro' => 'Your content model determines what fields and behaviors define this collection.',
    'collection_wizard_dates_intro' => 'You can select different date behaviors.',
    'collection_wizard_default_status_draft_description' => 'Entries will default to <span class="text-grey-60">draft</span> status.',
    'collection_wizard_default_status_published_description' => 'Entries will default to <span class="text-green">published</span> status.',
    'collection_wizard_events_description' => 'Entries with dates in the past will be private.',
    'collection_wizard_handle_instructions' => 'Handles are used to reference this collection on the frontend. Cannot easily be changed.',
    'collection_wizard_intro' => 'A Collection is a group of entries that hold similar content and shares behavior and attributes, like URL patterns, ordering, and visibility.',
    'collection_wizard_layout_instructions' => 'Set your default layout.',
    'collection_wizard_mount_instructions' => 'Optionally set an entry that will act as a parent. Also enables shortcut links in any structures.',
    'collection_wizard_no_dates_description' => 'Entries will not have any dates.',
    'collection_wizard_order_intro' => 'Choose how you want your Collection to be ordered.',
    'collection_wizard_ordered_alpha_ascending' => 'Entries will be sorted from A to Z.',
    'collection_wizard_ordered_alpha_descending' => 'Entries will be sorted from Z to A.',
    'collection_wizard_ordered_by_date_description' => 'Entries are ordered by date.',
    'collection_wizard_ordered_by_title_description' => 'Entries are ordered alphabetically by title.',
    'collection_wizard_ordered_date_ascending' => 'Entries will be sorted from oldest to newest (unusual).',
    'collection_wizard_ordered_date_descending' => 'Entries will be sorted from newest to oldest.',
    'collection_wizard_ordered_sequentially_ascending' => 'Entries will be sorted from lowest to highest.',
    'collection_wizard_ordered_sequentially_descending' => 'Entries will be sorted from highest to lowest.',
    'collection_wizard_ordered_sequentially_description' => 'Entries are ordered sequentially and can be manually reordered.',
    'collection_wizard_route_instructions' => 'Routes are optional. If you don\'t need a URL, you don\'t need a route.',
    'collection_wizard_routing_intro' => 'Route rules determine the URL pattern of your collection\'s entries.',
    'collection_wizard_structure_instructions' => 'Enable hierarchial (parent/child) URLs.',
    'collection_wizard_structure_route_instructions' => 'A route is required when choosing a structure. You can also use `parent_uri` and `depth`.',
    'collection_wizard_taxonomies_instructions' => 'Allow taxonomy relationships to be defined on entries in this collection.',
    'collection_wizard_template_instructions' => 'Set this collection\'s default template.',
    'collection_wizard_title_instructions' => 'We recommend a plural noun, like "Articles", "Products", or "Breakfast Foods".',
    'collections_blueprint_instructions' => 'Entries in this collection may use any of these blueprints.',
    'collections_default_publish_state_instructions' => 'Whether new entries created in the Control Panel should be published by default.',
    'collections_future_date_behavior_instructions' => 'How future dated entries should behave.',
    'collections_layout_instructions' => 'Set this collection\'s default layout.',
    'collections_mount_instructions' => 'Enable add/edit shortcuts from Structures and `mount` variable in your route.',
    'collections_orderable_instructions' => 'Enable manual ordering via drag & drop.',
    'collections_past_date_behavior_instructions' => 'How past dated entries should behave.',
    'collections_route_instructions' => 'The route controls entries URL pattern.',
    'collections_sort_direction_instructions' => 'The default sort direction.',
    'collections_structure_instructions' => 'Structures enable page hierarchies that control order and URL.',
    'collections_taxonomies_instructions' => 'Connect entries in this collection to taxonomies. Fields will be automatically added to publish forms.',
    'collections_template_instructions' => 'Set a default template.',
    'email_utility_configuration_description' => 'Mail settings are configured in <code>:path</code>',
    'email_utility_description' => 'Check email configuration and send a test.',
    'field_conditions_instructions' => 'When to show or hide this field.',
    'field_desynced_from_origin' => 'Desynced from origin. Click to sync and revert to the origin\'s value.',
    'field_synced_with_origin' => 'Synced with origin. Click or edit the field to desync.',
    'field_validation_instructions' => 'Has access to all of Laravel\'s validation rules.',
    'fields_blueprints_description' => 'Blueprints let you mix and match fields and fieldsets to create the content structures for collections and other data types.',
    'fields_display_instructions' => 'The field\'s label shown in the Control Panel.',
    'fields_fieldsets_description' => 'Fieldsets are simple, flexible, and completely optional groupings of fields that help to organize reusable, pre-configured fields.',
    'fields_handle_instructions' => 'The field\'s template variable.',
    'fields_instructions_instructions' => 'Shown under the field\'s display label, like this very text. Markdown is supported.',
    'fields_listable_instructions' => 'Control the column visibility of this field.',
    'fieldset_import_fieldset_instructions' => 'The fieldset to be imported.',
    'fieldset_import_prefix_instructions' => 'The prefix that should be applied to each field when they are imported. eg. hero_',
    'fieldsets_button_help_text' => 'You will be able to customize your Fieldset once it\'s created.',
    'fieldsets_title_instructions' => 'Usually describes what fields will be inside, like Image Block',
    'focal_point_instructions' => 'Setting a focal point allows dynamic photo cropping with a subject that stays in frame.',
    'focal_point_previews_are_examples' => 'Crop previews are for example only',
    'forgot_password_enter_email' => 'Enter your email address so we can send a reset password link.',
    'form_wizard_blueprint_instructions' => 'Choose from existing Blueprints or create a new one.',
    'form_wizard_email_notifications_instructions' => 'Be notified of submissions at this email address. You can further customize notification settings later.',
    'form_wizard_fields_intro' => 'Define fields for your form.',
    'form_wizard_handle_instructions' => 'How to reference to this form on the frontend. Cannot easily be changed.',
    'form_wizard_intro' => 'A Form is a group of fields used for collecting user input.',
    'form_wizard_store_submissions_instructions' => 'Whether form submissions should be stored. Turn off if you only wish to get email notifications.',
    'form_wizard_submissions_intro' => 'Choose how you would like to handle form submissions.',
    'form_wizard_title_instructions' => 'Usually a call to action, like "Contact Us".',
    'forms_blueprint_instructions' => 'Choose from existing Blueprints or create a new one.',
    'forms_email_from_instructions' => 'Leave blank to fall back to the site default.',
    'forms_email_instructions' => 'Add any emails you want to be sent upon submission.',
    'forms_email_reply_to_instructions' => 'Leave blank to fall back to sender.',
    'forms_email_subject_instructions' => 'Email subject line.',
    'forms_email_template_instructions' => 'Leave blank to use an automagic email template.',
    'forms_email_to_instructions' => 'Email address of the recipient.',
    'forms_honeypot_instructions' => 'The field name to be used for the honeypot.',
    'forms_store_instructions' => 'Whether form submissions should be stored. Turn off if you only wish to get email notifications.',
    'forms_title_instructions' => 'Usually a call to action, like "Contact Us".',
    'getting_started_widget_addons' => 'Addons extend Statamic\'s core capabilities. Go see what\'s possible!',
    'getting_started_widget_blueprints' => 'Blueprints define the custom fields used to create and store your content.',
    'getting_started_widget_collections' => 'Collections contain the different types of content in your site.',
    'getting_started_widget_docs' => 'Get to know Statamic by understanding its capabilities the right way.',
    'getting_started_widget_header' => 'Getting Started with Statamic',
    'getting_started_widget_intro' => 'To begin building your new Statamic site, we recommend starting with these steps.',
    'getting_started_widget_structures' => 'Structures establish the hierarchy of your pages and help you manage your site navigation.',
    'global_search_open_using_slash' => 'You can open global search using the <kbd>/</kbd> key',
    'global_set_blueprint_instructions' => 'Defines the field layout when editing this global set.',
    'global_set_handle_instructions' => 'How you will reference this global set in templates, etc.',
    'global_set_title_instructions' => 'The display name of this global set.',
    'phpinfo_utility_description' => 'Check your PHP configuration settings and installed modules.',
    'publish_actions_create_revision' => 'A revision will be created based off the working copy. The current revision will not change.',
    'publish_actions_current_becomes_draft_because_scheduled' => 'Since the current revision is published and you\'ve selected a date in the future, once you submit, the revision will act like a draft until the selected date.',
    'publish_actions_publish' => 'Changes to the working copy will applied to the entry and it will be published immediately.',
    'publish_actions_schedule' => 'Changes to the working copy will applied to the entry and it will be appear published on the selected date.',
    'publish_actions_unpublish' => 'The current revision will be unpublished.',
    'reset_password_notification_body' => 'You are receiving this email because we received a password reset request for your account.',
    'reset_password_notification_no_action' => 'If you did not request a password reset, no further action is required.',
    'reset_password_notification_subject' => 'Reset Password Notification',
    'role_change_handle_warning' => 'Changing the handle will not update references to it in users and groups.',
    'search_utility_description' => 'Manage and view important information about Statamic\'s search indexes.',
    'session_expiry_enter_password' => 'Enter your password to continue where you left off',
    'session_expiry_logged_out_for_inactivity' => 'You have been logged out because you\'ve been inactive for a while.',
    'session_expiry_logging_out_in_seconds' => 'You have been inactive for a while and will be logged out in :seconds seconds. Click to extend your session.',
    'session_expiry_new_window' => 'Opens in a new window. Come back once you\'ve logged in.',
    'structure_wizard_collection_instructions' => 'If the collection you intend to use does not exist yet, choose <b>this structure</b> later while creating it.',
    'structure_wizard_collections_instructions' => 'Entries from selected collections will be available to choose from when building the page tree.',
    'structure_wizard_description' => 'Structures are link trees most often used to create nav bars and other forms of site navigation.',
    'structure_wizard_expect_root_instructions' => 'Whether you want the first page in the tree to be considered the "root" or "home" page.',
    'structure_wizard_handle_instructions' => 'How you\'ll reference to this structure on the frontend. Cannot easily be changed.',
    'structure_wizard_max_depth_instructions' => 'The maximum number of levels deep a page may be nested. Leave blank for no limit.',
    'structure_wizard_purpose_collection' => 'Control a collection\'s URLs with parent/child relationships.',
    'structure_wizard_purpose_intro' => 'Structures can either control a collection with parent/child URLs, or define hand-crafted nav trees from existing entries and user-defined URLs.',
    'structure_wizard_purpose_navigation' => 'Create a tree of links to existing entries and/or user-defined URLs.',
    'structure_wizard_settings_intro' => 'Define which collections are available to this Structure and how deep it can grow.',
    'structure_wizard_title_instructions' => 'For example: "Pages", "Main Nav Bar", or "Documentation".',
    'structures_empty' => 'Structures can contain links arranged into a hierarchy from which you can create URLs or navigation areas.',
    'tab_sections_instructions' => 'The fields in each section will be grouped together into tabs. Create new fields, reuse existing fields, or import entire groups of fields from existing fieldsets.',
    'taxonomies_blueprints_instructions' => 'Terms in this taxonomy may use any of these blueprints.',
    'taxonomy_wizard_blueprint_instructions' => 'Choose from existing Blueprints or create a new one.',
    'taxonomy_wizard_collections_instructions' => 'Fields are automatically added when taxonomies are attached to collections.',
    'taxonomy_wizard_collections_intro' => 'Optionally attach this taxonomy to existing Collections. You can always do this later by editing a collection\'s settings.',
    'taxonomy_wizard_fields_intro' => 'Blueprints are used to customize the available fields on this taxonomy.',
    'taxonomy_wizard_handle_instructions' => 'Handles are used to reference this taxonomy on the frontend. Cannot be easily changed.',
    'taxonomy_wizard_intro' => 'A Taxonomy is a system of classifying data around a set of unique characteristics, such as category or color.',
    'taxonomy_wizard_title_instructions' => 'We recommend using a plural noun, like "Categories" or "Tags".',
    'updates_available' => 'Update available|:count updates available',
    'user_wizard_account_created' => 'The user account has been created.',
    'user_wizard_email_instructions' => 'The email address also serves as a username and must be unique.',
    'user_wizard_intro' => 'Users can be assigned to roles that customize their permissions, access, and abilities throughout the Control Panel.',
    'user_wizard_invitation_body' => 'Activate your new Statamic account on :site to begin managing this website. For your security, the link below expires after 1 hour. After that, please contact the site administrator for a new password.',
    'user_wizard_invitation_intro' => 'Send a welcome email with account activiation details to the new user.',
    'user_wizard_invitation_share' => 'Copy these credentials and share them with <code>:email</code> via your preferred method.',
    'user_wizard_invitation_share_before' => 'After you create the user, you\'ll be given details to share with <code>:email</code> via your preferred method.',
    'user_wizard_invitation_subject' => 'Activate your new Statamic account on :site',
    'user_wizard_name_instructions' => 'You can leave the name blank if you want to let the user fill it in.',
    'user_wizard_roles_groups_intro' => 'Users can be assigned to roles that customize their permissions, access, and abilities throughout the Control Panel.',
    'user_wizard_super_admin_instructions' => 'Super admins have complete control and access to everything in the control panel. Grant this role wisely.',
];
