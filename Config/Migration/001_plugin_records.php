<?php
/**
 * Add plugin migration
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsMigration', 'NetCommons.Config/Migration');

/**
 * Add plugin migration
 *
 * @package NetCommons\PluginManager\Config\Migration
 */
class PluginRecords extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'plugin_records';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(),
		'down' => array(),
	);

/**
 * plugin data
 *
 * @var array $migration
 */
	public $records = array(
		'Plugin' => array(
			//日本語
			array(
				'language_id' => '2',
				'key' => 'circular_notices',
				'namespace' => 'netcommons/circular-notices',
				'name' => '回覧板',
				'type' => 1,
				'default_action' => 'circular_notices/index',
				'default_setting_action' => 'circular_notice_block_role_permissions/edit',
			),
			//英語
			array(
				'language_id' => '1',
				'key' => 'circular_notices',
				'namespace' => 'netcommons/circular-notices',
				'name' => 'Circular Notices',
				'type' => 1,
				'default_action' => 'circular_notices/index',
				'default_setting_action' => 'circular_notice_block_role_permissions/edit',
			),
		),
		'PluginsRole' => array(
			array(
				'role_key' => 'room_administrator',
				'plugin_key' => 'circular_notices'
			),
		),
		'PluginsRoom' => array(
			//パブリックスペース(暫定)
			array('room_id' => '1', 'plugin_key' => 'circular_notices', ),
			////プライベートスペース
			//array('room_id' => '2', 'plugin_key' => 'circular_notices', ),
			//グループスペース
			array('room_id' => '3', 'plugin_key' => 'circular_notices', ),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		$this->loadModels([
			'Plugin' => 'PluginManager.Plugin',
		]);

		if ($direction === 'down') {
			$this->Plugin->uninstallPlugin($this->records['Plugin'][0]['key']);
			return true;
		}

		foreach ($this->records as $model => $records) {
			if (!$this->updateRecords($model, $records)) {
				return false;
			}
		}
		return true;
	}
}
