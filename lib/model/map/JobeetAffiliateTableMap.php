<?php


/**
 * This class defines the structure of the 'jobeet_affiliate' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 03/01/15 20:55:43
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class JobeetAffiliateTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.JobeetAffiliateTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('jobeet_affiliate');
		$this->setPhpName('JobeetAffiliate');
		$this->setClassname('JobeetAffiliate');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('URL', 'Url', 'VARCHAR', true, 255, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 255, null);
		$this->addColumn('TOKEN', 'Token', 'VARCHAR', true, 255, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'BOOLEAN', true, null, false);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('JobeetCategoryAffiliate', 'JobeetCategoryAffiliate', RelationMap::ONE_TO_MANY, array('id' => 'affiliate_id', ), 'CASCADE', null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('create_column' => 'created_at', ),
		);
	} // getBehaviors()

} // JobeetAffiliateTableMap
