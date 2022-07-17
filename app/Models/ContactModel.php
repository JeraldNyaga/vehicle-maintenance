<?php
namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model{

	protected $DBGroup              = 'default';
	protected $table                = 'tbl_message';
	protected $primaryKey           = 'message_id';
	protected $allowedFields        = ["name","email","phone","message"];
}
?>