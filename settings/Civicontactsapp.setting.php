<?php

return array(
  'cca_global_config' => array(
    'group_name' => 'Contact App Settings',
    'group' => 'cca',
    'name' => 'cca_global_config',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'html_type' => 'Text',
    'description' => '',
    'title' =>  'Enable Global Config',
    'help_text' => 'If set it as Yes, Application config will be same for all users.',
  ),
  'cca_licence_activated' => array(
    'group_name' => 'Contact App Settings',
    'group' => 'cca',
    'name' => 'cca_licence_activated',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'add' => '4.7',
    'is_domain' => 1,
    'default' => 0,
    'is_contact' => 0,
    'description' => '',
    'title' =>  'Licence Activated',
    'help_text' => '',
  ),
  'cca_email_to_activity' => array(
    'group_name' => 'Contact App Settings',
    'group' => 'cca',
    'name' => 'cca_email_to_activity',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'add' => '4.7',
    'is_domain' => 1,
    'is_contact' => 0,
    'html_type' => 'Text',
    'description' => '',
    'title' =>  'Email to Activity',
    'help_text' => 'If set it as Yes, A new activity will be created for each email sent from Application.',
  ),
  'cca_licence_code' => array(
    'group_name' => 'Contact App Settings',
    'group' => 'cca',
    'name' => 'cca_licence_code',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'add' => '4.7',
    'html_attributes' => array(
      'size' => '40',
      'maxlength' => '100',
    ),
    'is_domain' => 1,
    'is_contact' => 0,
    'html_type' => 'Text',
    'description' => 'Please contact <a href="https://agileware.com.au/contact" target="_blank">Agileware</a> to get licence code for Contact App.',
    'title' =>  'Licence Code',
    'help_text' => '',
  ),
  'cca_sync_interval' => array(
    'group_name' => 'Contact App Settings',
    'group' => 'cca',
    'name' => 'cca_sync_interval',
    'type' => 'String',
    'add' => '4.7',
    'quick_form_type' => 'Select',
    'html_type' => 'Select',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => 'default',
    'description' => '',
    'title' =>  'Sync Interval',
    'pseudoconstant' => array(
      'callback' => 'CRM_Civicontactsapp_Form_Settings::getSyncIntervalOptions',
    ),
    'html_attributes' => array(
      
    ),
    'help_text' => ''
  ),
 );
