<?php
namespace BlogApp\Model;

/**
 * Class used to modelate authors data
 *
 * @author Ramon Vicente <ramonvicentee@gmail.com>
 */

/**
 * @Entity
 * @Table(name="authors")
 */
class Author {

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
    * @OneToMany(targetEntity="Post", mappedBy="author",cascade={"persist","remove"})
    **/
    private $posts;

    public function __construct($id=0, $name = "", $posts = array()) {
        $this->id = $id;
        $this->name = $name;
        $this->posts = $posts;

    }

    public static function construct($array) {
        $obj = new Author();
        $obj->setId($array['id']);
        $obj->setName($array['name']);
        $obj->setPosts($array['posts']);
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

    public function getPosts() {
        return $this->posts;
    }

    public function setPosts($posts) {
        $this->posts = $posts;
    }

    public function equals($object) {
        if ($object instanceof Tag) {

            if ($this->id != $object->id) {
                return false;

            }

            if ($this->name != $object->name) {
                return false;

            }

            if ($this->posts != $object->posts) {
                return false;

            }

            return true;

        } else {
            return false;
        }

    }

    public function toString() {

        return " [id:" . $this->id . "]  [name:" . $this->name . "] [posts:" . $this->posts . "]";
    }

}
