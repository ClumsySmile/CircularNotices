<?php
/**
 * CircularNoticeContentFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Hirohisa Kuwata <Kuwata.Hirohisa@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * CircularNoticeContentFixture
 */
class CircularNoticeContentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID |  |  | '),
		'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'cerculat notice content key | 回覧キー | Hash値 | ', 'charset' => 'utf8'),
		'circular_notice_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'circular notice key | 回覧板キー | circular_notices.key | ', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'comment' => 'public status, 1: public, 2: public pending, 3: draft during 4: remand | 公開状況  1:公開中、2:公開申請中、3:下書き中、4:差し戻し |  | '),
		'subject' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'subject | 件名 |  | ', 'charset' => 'utf8'),
		'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'content | 本文 |  | ', 'charset' => 'utf8'),
		'reply_type' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'reply type. 1:text field , 2:selection, 3:multiple selection | 回答方式  1:記述方式、2:択一方式、3:選択方式 |  | '),
		'choices_key' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'circular notice choices key | 回覧選択肢キー | circular_notices_choidces.key | ', 'charset' => 'utf8'),
		'opened_period_from' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'opend period (from)  | 回覧期間（開始日時） |  | '),
		'opened_period_to' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'opend period (to)  | 回覧期間（終了日時） |  | '),
		'reply_deadline_set_fag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'reply deadline set flag. 0:unset , 1:set | 回答期限設定フラグ |  | '),
		'reply_deadline' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'reply deadline | 回答期限 |  | '),
		'target_users_key' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'circular notice target users key | 回覧先会員キー | circular_notices_choidces.key | ', 'charset' => 'utf8'),
		'is_auto_translated' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'translation type. 0:original , 1:auto translation | 翻訳タイプ  0:オリジナル、1:自動翻訳 |  | '),
		'translation_engine' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'translation engine | 翻訳エンジン |  | ', 'charset' => 'utf8'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'created user | 作成者 | users.id | '),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'created datetime | 作成日時 |  | '),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'modified user | 更新者 | users.id | '),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'modified datetime | 更新日時 |  | '),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'key' => 'Lorem ipsum dolor sit amet',
			'circular_notice_key' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'subject' => 'Lorem ipsum dolor sit amet',
			'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'reply_type' => 1,
			'choices_key' => 'Lorem ipsum dolor sit amet',
			'opened_period_from' => '2015-03-09 09:25:20',
			'opened_period_to' => '2015-03-09 09:25:20',
			'reply_deadline_set_fag' => 1,
			'reply_deadline' => '2015-03-09 09:25:20',
			'target_users_key' => 'Lorem ipsum dolor sit amet',
			'is_auto_translated' => 1,
			'translation_engine' => 'Lorem ipsum dolor sit amet',
			'created_user' => 1,
			'created' => '2015-03-09 09:25:20',
			'modified_user' => 1,
			'modified' => '2015-03-09 09:25:20'
		),
	);

}