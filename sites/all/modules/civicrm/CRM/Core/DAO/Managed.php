<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/Managed.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:49d518366db653a210558061604fb8cf)
 */

/**
 * Database access object for the Managed entity.
 */
class CRM_Core_DAO_Managed extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_managed';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = FALSE;

  /**
   * Surrogate Key
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Name of the module which declared this object
   *
   * @var string
   */
  public $module;

  /**
   * Symbolic name used by the module to identify the object
   *
   * @var string
   */
  public $name;

  /**
   * API entity type
   *
   * @var string
   */
  public $entity_type;

  /**
   * Foreign key to the referenced item.
   *
   * @var int unsigned
   */
  public $entity_id;

  /**
   * Policy on when to cleanup entity (always, never, unused)
   *
   * @var string
   */
  public $cleanup;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_managed';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Managed ID'),
          'description' => 'Surrogate Key',
          'required' => TRUE,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
          'localizable' => 0,
        ],
        'module' => [
          'name' => 'module',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Module'),
          'description' => 'Name of the module which declared this object',
          'required' => TRUE,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
          'localizable' => 0,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name'),
          'description' => 'Symbolic name used by the module to identify the object',
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
          'localizable' => 0,
        ],
        'entity_type' => [
          'name' => 'entity_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Type'),
          'description' => 'API entity type',
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
          'localizable' => 0,
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => 'Foreign key to the referenced item.',
          'required' => TRUE,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
          'localizable' => 0,
        ],
        'cleanup' => [
          'name' => 'cleanup',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Cleanup Setting'),
          'description' => 'Policy on when to cleanup entity (always, never, unused)',
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_ManagedEntities::getCleanupOptions',
          ]
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'managed', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'managed', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_managed_module_name' => [
        'name' => 'UI_managed_module_name',
        'field' => [
          0 => 'module',
          1 => 'name',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_managed::0::module::name',
      ],
      'UI_managed_entity' => [
        'name' => 'UI_managed_entity',
        'field' => [
          0 => 'entity_type',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_managed::0::entity_type::entity_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
