<?

$root_url = '';

function include_resources() {
	
}

function root_url($path) {
	global $root_url;
	
	return $root_url . $path;
}

function h($str) {
	return $str;
}

class Shop_Cart {
	public static function get_item_total_num() {
		return 0;
	}
}

class page {
	public $title = 'Home';
	public $keywords = '';
	public $description = '';
}

class site {
	public $page;
	
	public function __construct() {
		$body_class = null;
		
		$this->page = new page();
		
		$page = file_get_contents("templates/general.php");
		
		eval('?>' . $page . '<?');
	}
	
	public function render_partial($filename) {	
		$body_class = null;
		
		$filename = str_replace(':', '/', $filename);
		
		$page = file_get_contents("partials/" . $filename . ".php");
		
		return eval('?>' . $page . '<?');
	}
	
	public function render_page() {	
		$body_class = null;
		
		$q = str_replace('/', '', $_REQUEST['q']);
		
		if(!$q)
			$q = "home";
		
		$page = file_get_contents("pages/" . $q . ".php");
		
		$self = $this;
		
		$page = str_replace("\$this", "\$self", $page);
		
		eval('?>' . $page . '<?');
	}
	
	public function render_head() {
		return;
	}
}

new site();