<?php

/*
 * PHP Server Monitor v2.0.1
 * Monitor your servers with error notification
 * http://phpservermon.sourceforge.net/
 *
 * Copyright (c) 2008-2011 Pepijn Over (ipdope@users.sourceforge.net)
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 */

abstract class txtmsgCore implements txtmsgInterface {
	protected $originator;
	protected $password;
	protected $recipients = array();
	protected $username;

	/**
	 * Define login information for the gateway
	 *
	 * @param string $username
	 * @param string $password
	 */
	public function setLogin($username, $password) {
		$this->username = $username;
		$this->password = $password;
	}

	/**
	 * Set the mobile number the text message will be send from
	 *
	 * @param string $originator
	 */
	public function setOriginator($originator) {
		$this->originator = $originator;
	}

	/**
	 * Add new recipient to the list
	 *
	 * @param unknown_type $recipient
	 */
	public function addRecipients($recipient) {
		array_push($this->recipients, $recipient);
	}
}

?>