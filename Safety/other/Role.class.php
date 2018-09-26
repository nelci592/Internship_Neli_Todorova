class Role
{
    protected $permissions;
	private static $db;

	//Initiate an empty array for the permissions
    protected function __construct()
    {
        $this->permissionList = array();
    }

    //Alternatively use your own way of setting your Database connection.
    public static function setDatabase($db)
    {
	    self::$db = $db;
    }

    //Create populate Role Object
    public static function getRole($role_id)
    {
        $role = new Role();//Create new role object

        //Prepate statement and execute it
        $stm = self::$db->prepare("SELECT permission.description FROM role_permission JOIN permissions ON role_permission.permission_id = permission.permission_id WHERE role_permission.role_id = :role_id");
        $stm->execute(array(":role_id" => $role_id));

		//Loop through the results
        while($row = $stm->fetch(PDO::FETCH_ASSOC))
        {
            $role->permissionList[$row["permission_description"]] = true;
        }
        return $role;
    }

    //Check if the specific role has a given permission
    public function verifyPermission($permission)
    {
        return isset($this->permissions[$permission]);
    }
}
