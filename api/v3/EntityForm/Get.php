<?php

/**
 * EntityForm.Get API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
 */
function _civicrm_api3_entity_form_get_spec(&$spec) {
  $params['parent_entity_id']['api.required'] = 1;
  $params['entity_table']['api.required'] = 1;
}

/**
 * EntityForm.Get API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_entity_form_get($params) {
  return _civicrm_api3_basic_get('CRM_Multiform_BAO_EntityForm', $params);
}

