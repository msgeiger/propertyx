<?php


/**
 * This class adds structure of 'customer' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue Jul 14 12:51:39 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CustomerMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CustomerMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(CustomerPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CustomerPeer::TABLE_NAME);
		$tMap->setPhpName('Customer');
		$tMap->setClassname('Customer');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', true, 255);

		$tMap->addColumn('SURNAME', 'Surname', 'VARCHAR', true, 255);

		$tMap->addColumn('MUNICIPALITY', 'Municipality', 'VARCHAR', false, 255);

		$tMap->addColumn('ADDRESS', 'Address', 'VARCHAR', false, 255);

		$tMap->addColumn('ZIP', 'Zip', 'VARCHAR', false, 5);

		$tMap->addColumn('PHONE', 'Phone', 'VARCHAR', false, 255);

		$tMap->addColumn('MOBILE', 'Mobile', 'VARCHAR', false, 255);

		$tMap->addColumn('NEWMUNICIPALITY', 'Newmunicipality', 'VARCHAR', false, 255);

		$tMap->addForeignKey('OFFER_ID', 'OfferId', 'INTEGER', 'offer', 'ID', true, null);

		$tMap->addForeignKey('TYPE_ID', 'TypeId', 'INTEGER', 'type', 'ID', true, null);

		$tMap->addForeignKey('TYPOLOGY_ID', 'TypologyId', 'INTEGER', 'typology', 'ID', true, null);

		$tMap->addColumn('BEDROOM', 'Bedroom', 'INTEGER', false, null);

		$tMap->addColumn('BATH', 'Bath', 'INTEGER', false, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null);

		$tMap->addColumn('MAXPRICE', 'Maxprice', 'FLOAT', true, null);

		$tMap->addColumn('IS_ACTIVE', 'IsActive', 'BOOLEAN', true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null);

	} // doBuild()

} // CustomerMapBuilder