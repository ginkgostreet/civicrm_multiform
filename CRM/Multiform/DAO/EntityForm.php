<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.5                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2014                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Multiform/EntityForm.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Multiform_DAO_EntityForm extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_entity_form';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   * Form Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * The Parent Entity table for entity_id
   *
   * @var string
   */
  public $entity_table;
  /**
   * The entity this form belongs to.
   *
   * @var int unsigned
   */
  public $entity_id;
  /**
   *
   * @var string
   */
  public $title;
  /**
   * HTML for display before profiles
   *
   * @var text
   */
  public $Header;
  /**
   * HTML for display after profiles
   *
   * @var text
   */
  public $footer;
  /**
   * Serialized PHP for non-generic settings
   *
   * @var text
   */
  public $options;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_entity_form
   */
  function __construct()
  {
    $this->__table = 'civicrm_entity_form';
    parent::__construct();
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'entity_form_id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('EntityForm ID') ,
          'required' => true,
        ) ,
        'entity_form_entity_table' => array(
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('EntityForm Entity Type') ,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'entity_form_parent_entity_id' => array(
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('EntityForm Parent Entity') ,
        ) ,
        'entity_form_title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Title') ,
          'maxlength' => 192,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'entity_form_header' => array(
          'name' => 'Header',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Header') ,
        ) ,
        'footer' => array(
          'name' => 'footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Footer') ,
        ) ,
        'entity_form_options' => array(
          'name' => 'options',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Serialized Options') ,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'entity_form_id',
        'entity_table' => 'entity_form_entity_table',
        'entity_id' => 'entity_form_parent_entity_id',
        'title' => 'entity_form_title',
        'Header' => 'entity_form_header',
        'footer' => 'footer',
        'options' => 'entity_form_options',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['entity_form'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['entity_form'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
