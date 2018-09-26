class User
 {
 	private $userRoles = array();
 	private static $db;

 	//Alternatively use your own way of setting your Database connection.
    public static function setDatabase($db)
    {
	    self::$db = $db;
    }

 	//Populate the user object when it's created
 	public function __construct($user_id)
 	{
	 	$getUser = $this->db->prepare("SELECT * FROM user WHERE user_id = :userid ");
	 	$getUser->execute(array(":userid" => $userid));
	 	if($getUser->rowCount() == 1)
	 	{
	 		$userData = $getUser->fetch(PDO::FETCH_ASSOC);
		 	$this->user_id = $user_id;
		 	$this->username = ucfirst($userData['username']);
		 	$this->email = $userData['email_address'];
		 	//etc.. More data if needed
		 	self::loadRoles();//Initiate the userroles
	 	}
 	}

	//Fill the array with this user's roles, it's
    protected static function loadRoles()
    {
        $fetchRoles = $this->db->prepare("SELECT user_role.role_id, role.role_name FROM user_role JOIN role ON user_role.role_id = role.role_id WHERE user_role.user_id = :user_id");
        $fetchRoles->execute(array(":user_id" => $this->user_id));

		//Populate the array
        while($row = $fetchRoles->fetch(PDO::FETCH_ASSOC))
        {
            $this->userRoles[$row["role_name"]] = Role::getRolePermissions($row["role_id"]);
        }
    }

    //Check if the user has a certain permission
    public function hasPermission($permission)
    {
    	//If the user has more roles, check them too
        foreach ($this->userRoles as $role)
        {
        	//Do the actual checking
            if ($role->hasPermission($permission))
            {
                return true;
            }
        }
        return false;
    }
}
