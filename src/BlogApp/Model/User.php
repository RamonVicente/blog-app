<?php
namespace BlogApp\Model;

/**
 * Class used to modelate users data
 *
 * @author Ramon Vicente <ramonvicentee@gmail.com>
 */

 /**
 * @Entity
 * @Table(name="users")
 */
class User {

    /**
    *	@var integer @Id
    *   @Column(name="id", type="integer")
    *   @GeneratedValue(strategy="AUTO")
    */
    private $id;
    /**
    * @var string @Column(type="string", length=45)
    */
    private $name;
    /**
    * @var string @Column(type="string", length=100)
    */
    private $email;
    /**
    * @var string @Column(type="string", length=100)
    */
    private $password;

    public function __construct($id = 0, $name = "", $email = "", $password = "") {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

    }

    public static function construct($array) {
        $obj = new User();
        $obj->setId($array['id']);
        $obj->setName($array['name']);
        $obj->setEmail($array['email']);
        $obj->setPassword($array['password']);
        return $obj;

    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function equals($object) {
        if ($object instanceof User) {

            if ($this->id != $object->id) {
                return false;

            }

            if ($this->name != $object->name) {
                return false;

            }

            if ($this->email != $object->email) {
                return false;

            }

            if ($this->password != $object->password) {
                return false;

            }

            return true;

        } else {
            return false;
        }

    }

    public function toString() {

        return " [id:" . $this->id . "] [name:" . $this->name . "]  [email:" . $this->email . "] ";
    }

}
