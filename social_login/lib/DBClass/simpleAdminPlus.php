<?php

/*
	simpleAdminPlus' documentation can be found at
	http://geek-like-me.com/simpleAdminPlus/
	
	To get started with simpleAdminPlus please use the getting started guide.
	http://geek-like-me.com/simpleAdminPlus/#getting_started.php
	
	simpleAdminPlus is a library and has been designed to help prevent
	repeated code and to make tasks easier.
-------------------------- */

class simpleAdminPlus {
	
	var $dbh;
	
	// This is used for paging, to help prevent confict
	var $page_param = 'page';
	var $paging_limit = array();
	
	// This will connect simpleAdminPlus to a MySQL database
	function __construct($host, $user, $pass, $db_name) {
		$this->dbh = mysql_connect($host, $user, $pass)
			or die(mysql_error());
		
		mysql_select_db($db_name, $this->dbh)
			or die(mysql_error());
		
		$this->host = $host;
		$this->pass = $pass;
		$this->db_name = $db_name;
		
		$this->init('query');
		$this->init('form');
		$this->init('image');
	}
	
	// This is used to initialize the other
	// simpleAdminPlus classes
	function init($name) {
		switch ($name) {
			case 'query' :
				$this->query = new simpleAdminQuery($this->dbh);
			break;
			case 'form' :
				$this->form = new simpleAdminForm($this->dbh);
			break;
			case 'image' :
				$this->image = new simpleAdminImage();
			break;
		}
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#core.php/get_rows
	function get_rows($table_name, $order_by = '', $limit = '') {
		$order_by = (empty($order_by)) ? 'id' : $order_by;
		$limit = (empty($limit)) ? 0 : $limit;
		
		if( preg_match('/WHERE/i', $order_by) == FALSE && preg_match('/ORDER BY/i', $order_by) == FALSE )
			$order_by = "ORDER BY `$order_by`";
		
		if( $limit == 0 )
			$query = $this->query->get_results("SELECT * FROM `$table_name` $order_by");
		else {
			
			$page_num = $this->page_num();
				
			$this->paging_limit[$table_name] = $limit;
			
			$offset = ($page_num - 1) * $limit;
			$query = $this->query->get_results("SELECT * FROM `$table_name` $order_by LIMIT $offset, $limit");
			
			$num_rows = $this->query->sql("SELECT * FROM `$table_name` $order_by");
			$this->num_rows[$table_name] = mysql_num_rows($num_rows);
			
		}
		
		return $query;
	}
		
	// ==========
	// = Paging =
	// ==========
	
	// This function gets or sets the current page number from the url
	// and makes sure the number is not less than 1
	function page_num() {
		if( isset($_GET[$this->page_param]) ) {
			
			$page_num = $_GET[$this->page_param];
			
			if( $page_num < 1 )
				$page_num = 1;
		}else
			$page_num = 1;
			
		return $page_num;
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#core.php/paging_links
	function paging_links($table_name = '', $pages = '', $options = '') {
		$page = $this->paging($table_name, $pages);
		$page_param = $this->page_param;
		
		$gets = preg_replace('/(\?|&)' . $page_param . '=[0-9]/', '', $this->get_gets());
		
		if( $this->count_gets() > 0 ) {
			if( empty($gets) )
				$symbol = '?' . $gets;
			else {
				if( $gets[0] == '&' )
					$gets[0] = '?';
				$symbol = $gets . '&';
			}
		}else
			$symbol = '?' . substr($gets, 1);
			
		// Added for extra control
		$defaults = array(
			'first_text' => 'First',
			
			'last_text' => 'Last',
			
			'prev_text' => 'Previous',
			
			'next_text' => 'Next',
		);
		
		if( is_array($options) )
			$options = $this->extend($options, $defaults);
		else
			$options = $defaults;
			
		$options = (object) $options;
		
		echo '<ul id="paging">' . "\n";
		if( $options->first_text != FALSE ) {
			if( isset($page->first) )
				echo "\t" . '<li class="first"><a href="' . $symbol . $page_param . '=1">' . $options->first_text . '</a></li>' . "\n";
		}
		
		if( $options->prev_text != FALSE ) {
			if( isset($page->previous) )
				echo "\t" . '<li class="previous"><a href="' . $symbol . $page_param . '=' . $page->previous . '">' . $options->prev_text . '</a></li>' . "\n";
		}
			
		if( isset($page->list) ) {
			foreach( $page->list as $key => $page_num ) :
				if( $key == 'current' )
					echo "\t" . '<li class="current">' . $page_num . '</li>' . "\n";
				else
					echo "\t" . '<li class="page"><a href="' . $symbol . $page_param . '=' . $page_num . '">' . $page_num . '</a></li>' . "\n";
			endforeach;
		}
		
		if( $options->next_text != FALSE ) {
			if( isset($page->next) )
				echo "\t" . '<li class="next"><a href="' . $symbol . $page_param . '=' . $page->next . '">' . $options->next_text . '</a></li>' . "\n";
		}
		
		if( $options->last_text != FALSE ) {
			if( isset($page->last) )
				echo "\t" . '<li class="last"><a href="' . $symbol . $page_param . '=' . $page->last . '">' . $options->last_text . '</a></li>' . "\n";
		}
		
		echo '</ul>' . "\n";
	}
	
	// This function handles all the heavy lifting for creating the paging links
	// -----------
	// To use paging use paging_links()
	private function paging($table_name = '', $pages = '') {
		$limit = $this->paging_limit[$table_name];
		$page_num = $this->page_num();
		
		// $query = $this->query->sql("SELECT COUNT(*) AS `num_rows` FROM `$table_name`");
		// $row = mysql_fetch_assoc($query);
		$num_rows = $this->num_rows[$table_name];
		
		$num_pages = ceil($num_rows/$limit);
		
		if( $num_pages > 1 ) {
			
			$pages = (empty($pages)) ? 10 : $pages;
			
			$range = $pages;
            $range_min = ($range % 2 == 0) ? ($range / 2) - 1 : ($range - 1) / 2;
            $range_max = ($range % 2 == 0) ? $range_min + 1 : $range_min;
            $page_min = $page_num- $range_min;
            $page_max = $page_num+ $range_max;

            $page_min = ($page_min < 1) ? 1 : $page_min;
            $page_max = ($page_max < ($page_min + $range - 1)) ? $page_min + $range - 1 : $page_max;
            if ($page_max > $num_pages) {
                $page_min = ($page_min > 1) ? $num_pages - $range + 1 : 1;
                $page_max = $num_pages;
            }

            $page_min = ($page_min < 1) ? 1 : $page_min;
			$page_pagination = array();
			
			if ( ($page_num > ($range - $range_min)) && ($num_pages > $range) ) {
				$page_pagination['first'] = 1;
			}
			
			if ($page_num != 1) {
                $page_pagination['previous'] = ($page_num-1);
            }

            for ($i = $page_min;$i <= $page_max;$i++) {
                if ($i == $page_num)
                $page_pagination['list']['current'] = $i;
                else
                $page_pagination['list'][$i] = $i;
            }

            if ($page_num < $num_pages) {
                $page_pagination['next'] = ($page_num + 1);
            }

            if (($page_num< ($num_pages - $range_max)) && ($num_pages > $range)) {
                $page_pagination['last'] = $num_pages;
            }
			
			return (object) $page_pagination;
		}
	}
	
	// This is used to check if a get variable already exists
	private function count_gets() {
		$count = 0;
		foreach( $_GET as $key => $value ) :
			$count++;
		endforeach;

		return $count;
	}
	
	// This is used to check if a get variable already exists
	private function get_gets() {
		if( $this->count_gets() > 0 ) {
			$string = '';
			foreach( $_GET as $key => $value ) :
				if( empty($value) == FALSE ) {
					if( empty($string) )
						$string = '?' . $key . '=' . $value;
					else
						$string .= '&' . $key . '=' . $value;
				}else {
					if( empty($string) )
						$string = '?' . $key;
					else
						$string .= '&' . $key;
				}
					
			endforeach;
			
			return $string;
		}
	}

	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#core.php/extend
	function extend($options, $defaults) {
		
		$mixed_output = array();
		
		foreach( $defaults as $key => $value ) :
			if( isset($options[$key]) )
				$mixed_output[$key] = $options[$key];
			else
				$mixed_output[$key] = $value;
			
		endforeach;
		
		return $mixed_output;
	}
}

// Accessed through $simpleAdmin->query
class simpleAdminQuery extends simpleAdminPlus {
	
	var $dbh;
	
	var $last_query = array();
	
	function __construct($handle) {
		$this->dbh = $handle;
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#query.php/sql
	function sql($sql) {
		$table = preg_match('/(\`)\w*(\`)/', $sql, $name);
		$name = str_replace('`', '', $name[0]);
		$this->last_query[$name] = $sql;
		
		$query = mysql_query($sql)
			or die(mysql_error());
						
		return $query;
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#query.php/get_results
	function get_results($sql) {
		$query = $this->sql($sql);
		
		$output = array();
		while( $row = mysql_fetch_object($query) ) {
			$output[] = $row;
		}
		
		return $output;
	}

	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#query.php/insert
	function insert($table_name, $data, $value = null) {
		if( is_string($data) && !empty($value) ) {
			$data = array(
				$data => $value
			);
		}
		
		$columns = '(';
		$values  = '(';
		foreach( $data as $key => $value ) :
			$columns .= '`' . $key . '`, ';
			$values .= "'" . $value . "', ";
		endforeach;
				
		$sql = rtrim($columns, ', ') . ') VALUES ' . rtrim($values, ', ') . ')';
		
		$query = $this->sql("INSERT INTO `$table_name` $sql");
		
		return $query;
	}

	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#query.php/update
	function update($table_name, $data, $where, $where_column = '') {
		$where_column = (empty($where_column)) ? 'id' : $where_column;
		$fields = '';
		
		foreach( $data as $column => $value ) :
			$fields .= '`' . $column . '` = \'' . $value . '\', ';
		endforeach;
		
		$fields = rtrim($fields, ', ');
		
		$sql = "UPDATE `$table_name` SET $fields WHERE `$where_column` = '$where'";
		$res = mysql_query($sql, $this->dbh) or die(mysql_error());
		
		return true;
	}
}

// Accessed through $simpleAdmin->form
class simpleAdminForm extends simpleAdminPlus {
	
	var $dbh;
	var $table_name = null;
	var $field = array();
	
	// Validating
	var $errors = array();
	
	function __construct($handle) {
		$this->dbh = $handle;
		
		$this->init('query');
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/form_for
	function form_for($table_name = null, $id = null, $match = '') {
		$this->table_name = (empty($table_name)) ? null : $table_name;
		
		$match = (empty($match)) ? 'id' : $match;
		
		if( is_array($id) ) {
			foreach( $id as $field => $value ) :
				$this->field[$field] = $value;
			endforeach;
			if( $this->table_name == null )
				return $this;
			
		}elseif( $this->table_name == null )
			return $this;
		elseif( empty($id) )
			$query = $this->query->sql("SELECT * FROM `$table_name`");
		else {
			$query = $this->query->sql("SELECT * FROM `$table_name` WHERE `$match` = '$id'");
			$row = mysql_fetch_assoc($query);
		}
		
		if( isset($query) ) {
			$i = 0;
			while( $i < mysql_num_fields($query) ) {
				$meta = mysql_fetch_field($query, $i);

				if( empty($id) )
					$this->field[$meta->name] = '';
				else {				
					$this->field[$meta->name] = $row[$meta->name];
				}

				$i++;
			}
		}
		
		return $this;
	}
	
	private function create_attributes($array) {
		$output = '';
		foreach( $array as $name => $value ) :
			if( is_int($value) && substr($value, -2) != 'px' )
				$output .= $name . '="' . $value .  'px" ';
			else
				$output .= $name . '="' . $value .  '" ';
		endforeach;
		return $output;
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/label
	function label($field_name, $title = '') {
		$title = (empty($title)) ? ucfirst($field_name) : $title;
		
		if( empty($this->table_name) )
			return '<label for="' . $field_name . '">' . $title . '</label>' . "\n";
		else
			return '<label for="' . $this->table_name . '[' . $field_name . ']">' . $title . '</label>' . "\n";
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/input_box
	function input_box($field_name, $attributes = null) {
		if( is_array($attributes) )
			$attributes = $this->create_attributes($attributes);
		else
			$attributes = '';
		
		if( empty($this->table_name) ) {
			return '<input ' . $attributes . 'type="text" name="' . $field_name . '" id="' . $field_name . '" value="' . $this->field[$field_name] . '" />' . "\n";
		}else
			return '<input ' . $attributes . 'type="text" name="' . $this->table_name . '[' . $field_name . ']" id="' . $this->table_name . '[' . $field_name . ']" value="' . $this->field[$field_name] . '" />' . "\n";
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/password_box
	function password_box($field_name, $attributes = null) {
		if( is_array($attributes) )
			$attributes = $this->create_attributes($attributes);
		else
			$attributes = '';
		
		if( empty($this->table_name) ) {
			return '<input ' . $attributes . 'type="password" name="' . $field_name . '" id="' . $field_name . '" value="' . $this->field[$field_name] . '" />' . "\n";
		}else
			return '<input ' . $attributes . 'type="password" name="' . $this->table_name . '[' . $field_name . ']" id="' . $this->table_name . '[' . $field_name . ']" value="' . $this->field[$field_name] . '" />' . "\n";
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/text_box
	function text_box($field_name, $attributes = null) {
		if( is_array($attributes) )
			$attributes = $this->create_attributes($attributes);
		else
			$attributes = '';
		
		if( empty($this->table_name) ) {
			return '<textarea ' . $attributes . 'name="' . $field_name . '" id="' . $field_name . '">' . $this->field[$field_name] . '</textarea>' . "\n";
		}else
			return '<textarea ' . $attributes . 'name="' . $this->table_name . '[' . $field_name . ']" id="' . $this->table_name . '[' . $field_name . ']">' . $this->field[$field_name] . '</textarea>' . "\n";
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/select_box
	function select_box($field_name, $table_name, $value = null, $text = null, $attributes = null) {
		if( is_array($attributes) )
			$attributes = $this->create_attributes($attributes);
		else
			$attributes = '';
			
		$value = (empty($value)) ? null : $value;
		$text = (empty($text)) ? null : $text;
		if( is_string($table_name) && !empty($value) && !empty($text) ) {
			$query = $this->get_rows($table_name);
			
			if( empty($this->table_name) )
				echo '<select ' . $attributes . 'name="' . $field_name . '" id="' .  $field_name . '">' . "\n";
			else
				echo '<select ' . $attributes . 'name="' . $this->table_name . '[' . $field_name . ']" id="' . $this->table_name . '[' . $field_name . ']">' . "\n";
			foreach( $query as $row ) :
				if( $this->field[$field_name] == $row->$value )
					echo '<option selected="selected" value="' . $row->$value . '">' . $row->$text . '</option>' . "\n";
				else
					echo '<option value="' . $row->$value . '">' . $row->$text . '</option>' . "\n";
			endforeach;
			echo '</select>' . "\n";
		}elseif( is_array($table_name) ) {
			if( empty($this->table_name) )
				echo '<select ' . $attributes . 'name="' . $field_name . '" id="' .  $field_name . '">' . "\n";
			else
				echo '<select ' . $attributes . 'name="' . $this->table_name . '[' . $field_name . ']" id="' . $this->table_name . '[' . $field_name . ']">' . "\n";
				foreach( $table_name as $value => $text ) :
					echo '<option value="' . $value . '">' . $text . '</option>' . "\n";
				endforeach;
			echo '</select>' . "\n";
		}
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/submit
	function submit($text = '', $attributes = null) {
		if( is_array($attributes) )
			$attributes = $this->create_attributes($attributes);
		else
			$attributes = '';
		
		$text = (empty($text)) ? 'Save Changes' : $text;
		if( empty($this->table_name) )
			return '<input ' . $attributes . 'type="submit" name="submit" value="' . $text . '" />' . "\n";
		else
			return '<input ' . $attributes . 'type="submit" name="' . $this->table_name . '[submit]" value="' . $text . '" />' . "\n";
	}

	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/validate
	function validate($table_name = '') {
		$this->table_name = (empty($table_name)) ? null : $table_name;
				
		return $this;
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/presence_of
	function presence_of($field_name, $options = null) {
		$message = '<p class="form_error">The <span class="field_name">%field%</span> field %error%</p>';
		
		$defaults = array(
			'min_length' => null,
			'max_length' => null,
			'escape'     => true
		);
		
		if( is_array($options) )
			$options = $this->extend($options, $defaults);
		else
			$options = $defaults;
		
		$options = (object) $options;
		
		if( empty($this->table_name) ) {
			if( isset($_POST[$field_name]) )
				$field = $_POST[$field_name];
		}else {
			if( isset($_POST[$this->table_name][$field_name]) )
				$field = $_POST[$this->table_name][$field_name];
		}
		
		if( isset($field) ) {
			if( $options->escape )
				$field = mysql_real_escape_string($field);
			
			if( empty($field) ) {
				$this->errors[$field_name] = str_replace(
												array('%field%', '%error%'),
												array(ucfirst($field_name), 'is required'),
												$message
											 );
			}else {
				if( $options->min_length && strlen($field) < $options->min_length ) {
					$this->errors[$field_name] = str_replace(
													array('%field%', '%error%'),
													array(ucfirst($field_name), 'is too short'),
													$message
												 );
				}elseif( $options->max_length && strlen($field) > $options->max_length ) {
					$this->errors[$field_name] = str_replace(
													array('%field%', '%error%'),
													array(ucfirst($field_name), 'is too long'),
													$message
												 );
				}
			}
			
			$this->field[$field_name] = $field;
			
			return $field;
		}
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/has_errors
	function has_errors() {
		if( count($this->errors) > 0 )
			return true;
		else
			return false;
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/get_errors
	function get_errors() {
		foreach( $this->errors as $error => $message ) :
			echo $message;
		endforeach;
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#form.php/multi_part
	function multi_part() {
		echo 'enctype="multipart/form-data"';
	}
}

// Accessed through $simpleAdmin->image
class simpleAdminImage {

	var $image;
	var $image_type;
	var $error = '';
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#image.php/load
	function load($filename) {
		if( file_exists($filename) == FALSE )
			die('simpleAdmin->image failed to load the image');
			
		$image_info = getimagesize($filename);
		$this->image_type = $image_info[2];
				
		// Create image from type
		if( $this->image_type == IMAGETYPE_JPEG ) 
			$this->image = imagecreatefromjpeg($filename);
		elseif( $this->image_type == IMAGETYPE_GIF )
			$this->image = imagecreatefromgif($filename);
		elseif( $this->image_type == IMAGETYPE_PNG )
			$this->image = imagecreatefrompng($filename);
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#image.php/save
	function save($filename, $compression = '', $permissions = null) {
		$type = strtolower(end(explode('.', $filename)));
		($type == 'jpeg') ? $type = 'jpg' : $type;
		
		if( substr($permissions, 0, 1) != 0 )
			$permissions = 0 . $permissions;
					
		switch($type) {
			case 'jpg' :
				$compression = (empty($compression)) ? 100 : $compression;
				imagejpeg($this->image, $filename, $compression);
			break;
			case 'gif' :
				imagegif($this->image, $filename);
			break;
			case 'png' :
				imagepng($this->image, $filename);
			break;
			default :
				$this->error = "simpleAdminImage only saves in jpg, gif, and png";
				return false;
			break;
			
		}			
		   
		if( $permissions != null) {
			chmod($filename, $permissions);
		}
		
		return true;
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#image.php/output
	function output($image_type = '') {
		$type = (empty($type) || $type == 'jpeg') ? 'jpg' : $type;
		$type = strtolower($type);

		if( $type == 'jpg' ) {
			header("Content-Type: image/jpeg");
			imagejpeg($this->image);
		}elseif( $image_type == 'gif' ) {
			header("Content-Type: image/gif");
			imagegif($this->image);    
		}elseif( $image_type == 'png' ) {
			header("Content-Type: image/png");
			imagepng($this->image);
		}
	}
	
	// This returns the width of the image
	function get_width() {
		return imagesx($this->image);
	}
	
	// This returns the height of the image
	function get_height() {
		return imagesy($this->image);
	}

	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#image.php/resize_to_width
	function resize_to_width($width) {
		$width = str_replace('px', '', $width);
		
		$ratio = $width / $this->get_width();
		$height = $this->get_height() * $ratio;
		$this->resize($width,$height);
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#image.php/resize_to_height
	function resize_to_height($height) {
		$height = str_replace('px', '', $height);
		
		$ratio = $height / $this->get_height();
		$width = $this->get_width() * $ratio;
		$this->resize($width,$height);
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#image.php/scale
	function scale($scale) {
		$scale = str_replace('%', '', $scale);
		
		$width = $this->get_width() * $scale/100;
		$height = $this->get_height() * $scale/100; 
		$this->resize($width,$height);
	}
	
	// Documentation on using this function can be found here
		// http://geek-like-me.com/simpleAdminPlus/#image.php/resize
	function resize($width,$height) {
		$width = str_replace('px', '', $width);
		$height = str_replace('px', '', $height);
		
		$new_image = imagecreatetruecolor($width, $height);
		imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->get_width(), $this->get_height());
		$this->image = $new_image;   
	}      
}
?>