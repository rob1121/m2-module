<?php
namespace Mageplaza\HelloWorld\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface as Db;

class UpgradeSchema implements UpgradeSchemaInterface
{

  const TABLE_NAME = 'mageplaza_helloworld_post';
  protected $changelog = [
    '1.1.0' => 'installIfTableNotExist'
  ];

	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
    $setup->startSetup();

    foreach($this->changelog as $version => $action) {
      if(version_compare($context->getVersion(), $version, '<')) {
        $this->{$action}($setup);
      }
    }

		$setup->endSetup();
  }
  
  private function installIfTableNotExist(SchemaSetupInterface $setup)
  {
    if (!$setup->tableExists(self::TABLE_NAME)) {
      $table = $setup->getConnection()->newTable(
        $setup->getTable(self::TABLE_NAME)
      )
        ->addColumn(
          'post_id',
          Table::TYPE_INTEGER,
          null,
          [
            'identity' => true,
            'nullable' => false,
            'primary'  => true,
            'unsigned' => true,
          ],
          'Post ID'
        )
        ->addColumn(
          'name',
          Table::TYPE_TEXT,
          255,
          ['nullable => false'],
          'Post Name'
        )
        ->addColumn(
          'url_key',
          Table::TYPE_TEXT,
          255,
          [],
          'Post URL Key'
        )
        ->addColumn(
          'post_content',
          Table::TYPE_TEXT,
          '64k',
          [],
          'Post Post Content'
        )
        ->addColumn(
          'tags',
          Table::TYPE_TEXT,
          255,
          [],
          'Post Tags'
        )
        ->addColumn(
          'status',
          Table::TYPE_INTEGER,
          1,
          [],
          'Post Status'
        )
        ->addColumn(
          'featured_image',
          Table::TYPE_TEXT,
          255,
          [],
          'Post Featured Image'
        )
        ->addColumn(
          'created_at',
          Table::TYPE_TIMESTAMP,
          null,
          ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
          'Created At'
        )->addColumn(
          'updated_at',
          Table::TYPE_TIMESTAMP,
          null,
          ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
          'Updated At')
        ->setComment('Post Table');
      $setup->getConnection()->createTable($table);

      $setup->getConnection()->addIndex(
        $setup->getTable(self::TABLE_NAME),
        $setup->getIdxName(
          $setup->getTable(self::TABLE_NAME),
          ['name','url_key','post_content','tags','featured_image'],
          Db::INDEX_TYPE_FULLTEXT
        ),
        ['name','url_key','post_content','tags','featured_image'],
        Db::INDEX_TYPE_FULLTEXT
      );
    }
  }
}