<?php


class Posts extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $title;
     
    /**
     *
     * @var string
     */
    public $content;
     
    /**
     *
     * @var string
     */
    public $img;
     
    /**
     *
     * @var string
     */
    public $date;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id', 
            'title' => 'title', 
            'content' => 'content', 
            'img' => 'img', 
            'date' => 'date'
        );
    }

}
