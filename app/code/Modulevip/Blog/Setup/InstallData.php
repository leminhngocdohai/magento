<?php

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            [
                'title' => 'Post 1 Title',
                'content' => 'Chào mừng đến với the first post.',
            ],

        ];

        foreach ($data as $value) {
            $setup->getConnection()->insertForce($setup->getTable('modulevip_blog_post'), $value);
        }
    }
}
