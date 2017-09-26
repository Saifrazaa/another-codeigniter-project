
<?php  

class application_model extends CI_Model
{

public function shopp_data()
{

$this->db->select('*');
$que=$this->db->get('products');
return $que->result();

}
public function totalrows()
{
return $this->db->count_all('products');

}

public function fetch_data($limit,$offset)
{
	$this->db->limit($limit,$offset);
	$query=$this->db->get('products');

if($query->num_rows()>0)
{
	foreach($query->result() as $row )
	{
		$data[]=$row;
	}
	return $data;
}
}
public function add_products()
{



}


}














?>