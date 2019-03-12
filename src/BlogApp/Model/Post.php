<?php
namespace BlogApp\Model;

/**
 * Class used to modelate posts data
 *
 * @author Ramon Vicente <ramonvicentee@gmail.com>
 */

 /**
 * @Entity
 * @Table(name="posts")
 */
class Post {
    /**
    *	@var integer @Id
    *   @Column(name="id", type="integer")
    *   @GeneratedValue(strategy="AUTO")
    */
    private $id;
    /**
    * @var string @Column(type="string", length=100)
    */
    private $title;
    /**
    * @var string @Column(type="string", length=100)
    */
    private $slug;
    /**
    * @var string @Column(type="string")
    */
    private $body;
    /**
    * @var string @Column(type="string", length=100)
    */
    private $image;
    /**
    * @var string @Column(type="boolean", length=45)
    */
    private $publisher;
    /**
	 * @ManyToOne(targetEntity="Author",cascade={"persist"})
	 * @JoinColumn(name="author_id", referencedColumnName="id" nullable=false)
	 */
    private $author;

    /**
     * @ManyToMany(targetEntity="Tag", mappedBy="posts",cascade={"persist","remove"})
     */
    private $tags;
    
    public function __construct($id = 0, $title = "", $slug = "", $body = "", $image = "", $publisher = "", $author = 0, $tags=array()) {
        $this->id = $id;
        $this->title = $title;
        $this->slug = $slug;
        $this->body = $body;
        $this->image = $image;
        $this->publisher = $publisher;
        $this->author = $author;
        $this->tags = $tags;
        
    }

    public static function construct($array) {
        $obj = new Post();
        $obj->setId($array['id']);
        $obj->setTitle($array['title']);
        $obj->setSlug($array['slug']);
        $obj->setBody($array['body']);
        $obj->setImage($array['image']);
        $obj->setPublisher($array['publisher']);
        $obj->setAuthor($array['author']);
        $obj->setTags($array['tags']);
        return $obj;

    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getTags() {
        return $this->tags;
    }

    public function setTags($tags) {
        $this->tags = $tags;
    }

    public function equals($object) {
        if ($object instanceof Post) {

            if ($this->id != $object->id) {
                return false;

            }

            if ($this->title != $object->title) {
                return false;

            }

            if ($this->slug != $object->slug) {
                return false;

            }

            if ($this->body != $object->body) {
                return false;

            }

            if ($this->image != $object->image) {
                return false;

            }

            if ($this->publisher != $object->publisher) {
                return false;

            }

            if ($this->author != $object->author) {
                return false;

            }
            
            if ($this->tags != $object->tags) {
                return false;

            }

            return true;

        } else {
            return false;
        }

    }

    public function toString() {

        return " [id:" . $this->id . "]  [title:" . $this->title . "]  [slug:" . $this->slug . "]  [body:" . $this->body . "]  [image:" . $this->image . "]  [publisher:" . $this->publisher . "]  [author:" . $this->author . "] [author:" . $this->author . "] ";
    }

    public function toArray(){
        return [
            "id"=>$this->id,
            "title"=>$this->title,
            "posts"=>$this->posts,
            "slug" => $this->$slug,
            "body" => $this->$body,
            "image" => $this->$image,
            "publisher" => $this->$publisher,
            "author" => $this->$author,
            "tags" => $this->$tags
        ];
    }

}
