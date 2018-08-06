<?php namespace Mageplaza\HelloWorld\Setup;

      use Magento\Framework\DB\Adapter\AdapterInterface as Db;
      use Magento\Framework\DB\Ddl\Table;
      use Magento\Framework\Setup\InstallSchemaInterface;
      use Magento\Framework\Setup\ModuleContextInterface;
      use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{
  public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) 
  {
      $tableName = 'mageplaza_hellworld_post';
      $setup->startSetup();

      if(!$setup->getConnection()->isTableExists($tableName)) {
        $table = $setup->getConnection()->newTable($tableName)
        
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
        )
        
        ->addColumn(
					'updated_at',
					Table::TYPE_TIMESTAMP,
					null,
					['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
					'Updated At')
        ->setComment('Post Table');
        
				$setup->getConnection()->createTable($table);
				
				
        $setup->getTable($tableName)->addIndex(
          $setup->getTable('mageplaza_helloworld_post'),
          $setup->getIdxName(
            $setup->getTable('mageplaza_helloworld_post'),
            ['name','url_key','post_content','tags','featured_image'],
            Db::INDEX_TYPE_FULLTEXT
          ),
          ['name','url_key','post_content','tags','featured_image'],
          Db::INDEX_TYPE_FULLTEXT
        );
      }


      $setup->endSetup();
  }
}