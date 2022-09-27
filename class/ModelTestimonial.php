<?php

// namespace Ericc70\module\Testimonial;

// use Exception;

// if(!class_exist('ModelTestimony')) require_once _PS_MODULE_DIR_.'/testimonial/class/ModelTestimony';

class ModelTestimonial extends ObjectModel
{

    public $name;
    public $active = true;
    public $description;
    public $id;
   

        /**
     * @see ObjectModel::$definition
     */
    public static $definition = [
        'table' => 'testimonial',
        'primary' => 'id_testimonial',
        'multilang' => true,
        'fields' => [
            'name' => ['type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 255],
            'active' => ['type' => self::TYPE_BOOL],
          

            /* Lang fields */
            'description' => ['type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml']
        
        ],
    ];


}

