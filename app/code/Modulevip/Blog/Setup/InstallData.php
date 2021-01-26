<?php

namespace Modulevip\Blog\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if ($context->getVersion()) {
            $tableName = $setup->getTable('modulevip_blog_post');

            $data = [
                [
                    'title' => 'Post 1 Title',
                    'content' => 'Chào mừng đến với the first post.',
                ],
                [
                    'title' => 'Post 2 Title',
                    'content' => 'Chào mừng đến với the second post.',
                ],
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);
        }

        $setup->endSetup();
    }
}
