<?php

class setting_model extends Model {
	
	public function getAllSettingStie()
	{
		$AllSetting = $this->query('
			SELECT * FROM `lp_setting` WHERE
			id = ?',
			1
		)->fetchArray();
		return $AllSetting;
	}

}

?>
