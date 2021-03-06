<?php
/**
 * CircularNotices App Model
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Hirohisa Kuwata <Kuwata.Hirohisa@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppModel', 'Model');

/**
 * CircularNotice App Model
 *
 * @author Hirohisa Kuwata <Kuwata.Hirohisa@withone.co.jp>
 * @package NetCommons\CircularNotices\Model
 */
class CircularNoticesAppModel extends AppModel {

/**
 * Validate datetime from to.
 *
 * @param array $check check fields.
 * @param array $params parameters.
 * @return bool
 */
	public function validateDatetimeFromTo($check, $params) {
		$checkValue = array_values($check)[0];
		$isCompareFrom = isset($params['from']);
		$compareValue = $isCompareFrom ? $params['from'] : $params['to'];

		if (($isCompareFrom && $checkValue > $compareValue) ||
			(! $isCompareFrom && $checkValue < $compareValue)
		) {
			return true;
		}
		return false;
	}

/**
 * Validate datetime between.
 *
 * @param array $check check fields.
 * @param array $params parameters.
 * @return bool
 */
	public function validateDatetimeBetween($check, $params) {
		$checkValue = array_values($check)[0];
		$min = $params['from'];
		$max = $params['to'];

		if ($checkValue >= $min && $checkValue <= $max) {
			return true;
		}
		return false;
	}

/**
 * Get users for stub.
 *
 * @return array
 */
	protected function _getUsersStub() {
		return array(
			array('User' => array(
				'id' => 1,
				'username' => 'system_administrator'
			)),
			array('User' => array(
				'id' => 2,
				'username' => 'room_administrator'
			)),
			array('User' => array(
				'id' => 3,
				'username' => 'chief_editor'
			)),
			array('User' => array(
				'id' => 4,
				'username' => 'editor'
			)),
			array('User' => array(
				'id' => 5,
				'username' => 'general_user'
			)),
		);
	}
}
