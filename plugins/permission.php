<?php

class LS_Custom_Permissions extends GP_Plugin {
	var $id = 'lscp';
	var $project = null;

	function __construct() {
		parent::__construct();

		$this->add_action( 'can_user', array( 'args' => 2 ) );
	}

	/**
	 * Return the verdict as true if the user is a super admin in LimeSurvey
	 */
	function can_user( $verdict, $filter_args ) {
		$user = $filter_args['user'];

		/* -- EDIT HERE -- for the criteria to judge the user as admin */
		// superadmin is a field in LimeSurvey User Table, and is added as a variable in $user
		if ( $user->superadmin == 1 )
			$verdict = true;
		return $verdict;
	}
}

// GP::$plugins->ls_custom_permissions = new LS_Custom_Permissions;
