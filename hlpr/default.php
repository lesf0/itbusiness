<?

	// URL tree (for breadcrumbs & stuff)
	$url_tree = array(
		array(
			'name'	=> 'Главная',
			'url'	=> '/'
		)
	);

	// ID's in tables
	$tables_id = array();


	$current_uri = '';
	$tok = strtok($request_uri, '/');
	while ($tok !== false) {
		$current_uri .= '/' . $tok;
		$page_cur = DB::queryFirstRow('SELECT name,lookup FROM pages WHERE %s REGEXP CONCAT("^",REPLACE(`url`, "*", "[^/]+"),"$") ORDER BY `url` DESC LIMIT 1', $current_uri);

		if(empty($page_cur)){
			throw new Exception("Parent page not found", 1);
		}

		if(!empty($page_cur['lookup'])){
			$info_cur			= DB::queryFirstRow('SELECT `id`,`name` FROM %b WHERE `alias`=%s', $page_cur['lookup'], $tok);

			if(empty($info_cur)){
				throw new Exception("Parent page content not found", 1);
			}

			$tables_id[$page_cur['lookup']]	= $info_cur['id'];

			$url_tree[] = array(
				'name'	=> $info_cur['name'],
				'url'	=> $current_uri
			);
		}else{
			$url_tree[] = array(
				'name'	=> $page_cur['name'],
				'url'	=> $current_uri
			);
		}

		$tok = strtok('/');
	}


	// Menu data
	$menus = array();
	$menu_ids = DB::query('SELECT `id`,`alias` FROM `menu`');
	foreach ($menu_ids as $menu_id) {
		$menu = DB::query('SELECT `pages`.`name`,`pages`.`url`,`pages`.`lookup`,`menu_pages`.`recursive` FROM `pages`,`menu_pages` WHERE `menu_pages`.`pages_id`=`pages`.`id` AND `menu_pages`.`menu_id`=%d ORDER BY IFNULL(`menu_pages`.`sort`, `menu_pages`.`id`)', $menu_id['id']);
		
		foreach ($menu as &$entry) {
			if($entry['recursive'] && !is_null($entry['lookup'])){
				$submenu = DB::query('SELECT `name`,`alias` FROM %b ORDER BY IFNULL(`sort`,`id`)', $entry['lookup']);

				if(!is_null($submenu)){
					$entry['submenu'] = $submenu;
				}
			}
		}

		$menus[$menu_id['alias']] = $menu;
	}

	unset($entry);
?>