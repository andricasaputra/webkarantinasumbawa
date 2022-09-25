<?php
 
class Paginator {
 
    private $_limit;
    private $_page;
    private $_query;
    private $_total;
    private $conn;
    private $db;

	public function __construct(Database $db){

			$this->conn = $db;
			$this->db = $this->conn->getConnection();
	}

	public function sql() {
     	$db = $this->conn->getConnection();
	    $this->_query  = "SELECT * FROM berita WHERE tampil = 'Ya' ORDER BY id DESC";
	    $rs = $this->db->query( $this->_query );
		$this->_total = $rs->num_rows;

	}

    public function getData( $limit = 5, $page = 1 ) {
     	$db = $this->conn->getConnection();
	    $this->_limit   = $limit;
	    $this->_page    = $page;
	 
	    if ( $this->_limit == 'all' ) {
	        $query      = $this->_query;
	    } else {
	        $query      = $this->_query . " LIMIT " . ( ( $this->_page - 1 ) * $this->_limit ) . ", $this->_limit";
	    }
	    
	    $rs             = $this->db->query( $query );
	 
	    while ( $row = $rs->fetch_assoc() ) {
	        $results[]  = $row;
	    }
	 
	    $result         = new stdClass();
	    $result->page   = $this->_page;
	    $result->limit  = $this->_limit;
	    $result->total  = $this->_total;
	    $result->data   = $results;
	 
	    return $result;
	}

	public function createLinks( $links, $list_class ) {
	    if ( $this->_limit == 'all' ) {
	        return '';
	    }
	 
	    $last       = ceil( $this->_total / $this->_limit );
	 
	    $start      = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
	    $end        = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links : $last;
	 
	    $html       = '<ul class="' . $list_class . '" >';
	 
	    $class      = ( $this->_page == 1 ) ? "disabled" : "";

		    if ($class == 'disabled') {
		    	$html       .= '<li class="disabled"><a href="#">&laquo;</a></li>';
		    }else{
		    	$html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page - 1 ) . '">&laquo;</a></li>';
		    }

	    if ( $start > 1 ) {
	        $html   .= '<li><a href="?limit=' . $this->_limit . '&page=1">1</a></li>';
	        $html   .= '<li class="enabled"><span>...</span></li>';
	    }
	 
	    for ( $i = $start ; $i <= $end; $i++ ) {
	        $class  = ( $this->_page == $i ) ? "active" : "";
	        $html   .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . $i . '">' . $i . '</a></li>';
	    }
	 
	    if ( $end < $last ) {
	        $html   .= '<li class="disabled"><span>...</span></li>';
	        $html   .= '<li><a href="?limit=' . $this->_limit . '&page=' . $last . '">' . $last . '</a></li>';
	    }
	 
	    $class      = ( $this->_page == $last ) ? "disabled" : "";

	    	if ($class == 'disabled') {
		    	$html       .= '<li class="disabled"><a href="#">&raquo;</a></li>';
		    }else{
		    	$html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page + 1 ) . '">&raquo;</a></li>';
		    }

	 
	    $html       .= '</ul>';
	 
	    return $html;
	}
 
}

?>