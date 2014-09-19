<?php

class CRM_Multiform_BAO_EntityForm extends CRM_Multiform_DAO_EntityForm {

  /**
   * Function to create a Form Entity
   * takes an associative array and creates an EntityForm object
   *
   * This function is invoked from within the web form layer and also from the api layer
   *
   * @param array   $params an assoc array of name/value pairs
   *
   * @return object CRM_MultiForm_BAO_EntityForm
   * @access public
   * @static
   */
  static function create($params) {

    if (empty($params)) {
      return;
    }

    $form = new CRM_Multiform_BAO_EntityForm();

    $form->copyValues($params);
    $form->save();

    return $form;
  }
}

