<?php

/**
 * EntityForm.Create API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
 */
function _civicrm_api3_entity_form_create_spec(&$spec) {
  $spec['entity_id']['api.required'] = 1;
  $spec['entity_table']['api.required'] = 1;
}

/**
 * EntityForm.Create API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_entity_form_create($params) {
  return _civicrm_api3_basic_create('CRM_Multiform_BAO_EntityForm', $params);
}