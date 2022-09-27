<?php

// namespace Ericc70\module\Testimonial;

// use Exception;
// use ModuleAdminController;
// use Ericc70\module\Testimonial\ModelTestimonial;

// if(!class_exists('ModelTestimonial')) require_once _PS_MODULE_DIR_.'/testimonial/class/ModelTestimonial.php';



/**
 * @property ModelTestimonial $object
 */
class AdminTestimonialController extends ModuleAdminController
{


    public function __construct()
    {
      
        $this->table = 'testimonial';
        $this->lang = false;
        $this->bootstrap = true;
        $this->className = "ModelTestimonial";
        $this->identifier = 'id_testimonial'; //Clé primaire de l'objet

        parent::__construct();

        $this->fields_list = array(
            'id_testimonial' => array(
                'title' => $this->l('ID'),
                'align' => 'center',
                'class' => 'fixed-width-xs'
            ),
            'name' => array(
                'title' => $this->l('Name'),
            ),
            'description' => array(
                'title' => $this->l('Description')
            ),
        );
    }

    /**
     * Affichage du formulaire d'ajout / création de l'objet
     * @return string
     * @throws SmartyException
     */
    // public function renderForm()
    // {


    //     //Définition du formulaire d'édition
    //     $this->fields_form = [
    //         //Entête
    //         'legend' => [
    //             'title' => $this->l('Edit Sample'),
    //             'icon' => 'icon-cog'
    //         ],

    //     ];
    //     return parent::renderForm();
    // }

    // public function renderForm()
    // {
    //     // die();
    //     // if(!$testimonial = $this->loadObject(true)) return;

    //     // $this->fields_form = array(
    //     //     'tinymce' => true,
    //     //     'legend' => array(
    //     //         'title' => $this->l('Testimonial'),
    //     //         'icon' => 'icon-certificate'
    //     //     ), 
    //     //     'input' =>array(
    //     //         array(
    //     //             'type' => 'text',
    //     //             'label' => $this->l('Name'),
    //     //             'name' => 'name',
    //     //             'col' => 6,
    //     //             'required' => true,
    //     //             'hint' => $this->l('Inalid character').' &lt;&gt;;=#{}'
    //     //         ),
    //     //         // array(
    //     //         //     'type' => 'textarea',
    //     //         //     'label' => $this->l('Description'),
    //     //         //     'name' => 'description',
    //     //         //     'lang' => true,
    //     //         //     'col' => 6,
    //     //         //     'cols' => 60,
    //     //         //     'rows' => 10,
    //     //         //     'required' => true,
    //     //         //     'autolad_rte' => 'rte',
    //     //         //     'hint' => $this->l('Inalid character').' &lt;&gt;;=#{}'
    //     //         // ),
    //     //         // array(
    //     //         //     'type' => 'switch',
    //     //         //     'label' => $this->l('Enable'),
    //     //         //     'name' => 'active',
    //     //         //     'required' => false,
    //     //         //     'class' => 't',
    //     //         //     'is_bool' => true,
    //     //         //     "values" => array(
    //     //         //         array(
    //     //         //             'id' => 'active_on',
    //     //         //             'value' => 1,
    //     //         //             'label' => $this->l('Enabled')
    //     //         //         ),
    //     //         //         array(
    //     //         //             'id' => 'active_off',
    //     //         //             'value' => 0,
    //     //         //             'label' => $this->l('Disabled')
    //     //         //         ),
    //     //         //     )
    //     //         // )
    //     //     ),
    //     // );

    //     // if(!($testimonial = $this->loadObject(true))){return;}

    //     // // if(Shop::isFeatureActive()){
    //     // //     $this->fields_form['input'][] = array(
    //     // //         'type' => 'shop',
    //     // //         'label' => $this->l('Shop association'),
    //     // //         'name' => 'checkBoxAsso'
    //     // //     );
    //     // // }

    //     // $this->fields_form['submit'] = array(
    //     //     'tittle' => $this->l('Save')
    //     // );
    //     // // foreach ($this->_languages as $language){

    //     // // }
    //     // return parent::renderForm();
    //     if (!($obj = $this->loadObject(true))) {
    //         return;
    //     }
    //     /**
    //     * Gestion des options
    //     */
    //           $this->fields_options = [
    //               //Groupe d'option n 1
    //               'general' => [
    //                   //Titre du groupe d'options
    //                   'title' => $this->l('General configuration'),
    //                   //Champs du group d'options
    //                   'fields' => [
    //                       //Exemple option de type texte
    //                       'OPTION_KEY_TEXT' => [ //La clé du tableau correspond au nom de la configuration
    //                           'title' => $this->l('Field Text'),
    //                           'hint' => $this->l('Field Text Hint'),
    //                           'validation' => 'isWeightUnit', //Classe de validation ( de la classe Validate )
    //                           'required' => true, //Champ requis ou non
    //                           'type' => 'text', //Type de champ
    //                           'class' => 'fixed-width-sm' //classe css
    //                       ],
    //                       //Exemple option de type texte avec langue
    //                       'OPTION_KEY_TEXT_LANG' => [
    //                           'title' => $this->l('Field Text Lang'),
    //                           'hint' => $this->l('Field Text Lang Hint'),
    //                           'validation' => 'isWeightUnit',
    //                           'required' => true,
    //                           'type' => 'textLang', //Type de champ
    //                           'class' => 'fixed-width-sm'
    //                       ],
    //                       //Exemple option de type textarea
    //                       'OPTION_KEY_TEXTAREA' => [
    //                           'title' => $this->l('Field Textarea'),
    //                           'hint' => $this->l('Field Textarea Hint'),
    //                           'required' => true,
    //                           'type' => 'textarea',
    //                           'cols' => 150, //Champ requis Textarea
    //                           'rows' => 2 // Champ requis Textarea
    //                       ],
    //                       //Exemple option de type textarea lang
    //                       'OPTION_KEY_TEXTAREA_LANG' => [
    //                           'title' => $this->l('Field Textarea Lang'),
    //                           'hint' => $this->l('Field Textarea Hint'),
    //                           'required' => true,
    //                           'type' => 'textareaLang',
    //                           'cols' => 150, //Champ requis Textarea
    //                           'rows' => 2 // Champ requis Textarea
    //                       ],
    //                       //Exemple option de type textarea avec TinyMce
    //                       'OPTION_KEY_TEXTAREA_MCE' => [
    //                           'title' => $this->l('Field Textarea editor'),
    //                           'hint' => $this->l('Field Textarea editor Hint'),
    //                           'required' => true,
    //                           'type' => 'textarea',
    //                           'autoload_rte' => true ,//Flag pour afficher l'éditeur de texte
    //                           'cols' => 150, //Champ requis Textarea
    //                           'rows' => 2 // Champ requis Textarea
    //                       ],
    //                       //Exemple d'option de type "select"
    //                       'OPTION_KEY_SELECT' => [
    //                           'title' => $this->l('Sample select fields'),
    //                           'hint' => $this->l('This is a select field.'),
    //                           'cast' => 'intval', //Cast appliqué aux valeurs
    //                           'type' => 'select',
    //                           'identifier' => 'id_lang', //Champs requis select clé de l'identifiant
    //                           'list' => Language::getLanguages(false) //Champ requis select source des données
    //                       ],
    //                       //Exemple d'option de type boolean
    //                       'OPTION_KEY_BOOLEAN' => [
    //                           'title' => $this->l('Bolean Field'),
    //                           'hint' => $this->l('Bolean Field Hint'),
    //                           'validation' => 'isBool',
    //                           'cast' => 'intval',
    //                           'type' => 'bool',
    //                           'default' => '1' //Valeur défaut pour l'option boolean
    //                       ],
    //                       //Exemple d'option de type file
    //                       'OPTION_KEY_FILE' => [
    //                           'title' => $this->l('File Field'),
    //                           'hint' => $this->l('File Field Hint'),
    //                           'type' => 'file',
    //                           'name' => 'OPTION_KEY_FILE' //Champ requis file
    //                       ],
    //                       //Exemple d'option de type file avec un thumb
    //                       'OPTION_KEY_THUMB' => [
    //                           'title' => $this->l('Thumb Field'),
    //                           'hint' => $this->l('Thumb Field Hint'),
    //                           'type' => 'file',
    //                           'name' => 'OPTION_KEY_FILE',
    //                           'thumb' => 'https://upload.wikimedia.org/wikipedia/commons/e/ee/Thumbup.jpg' //Champ requis thumb
    //                       ],
    //                       //Exemple d'option de type color
    //                       'OPTION_KEY_COLOR' => [
    //                           'title' => $this->l('Color Field'),
    //                           'hint' => $this->l('Color Field Hint'),
    //                           'validation' => 'isColor',
    //                           'type' => 'color',
    //                           'name' => 'OPTION_KEY_COLOR', // Champs requis Color
    //                           'size' => 7, //CHamps requis Color
    //                       ],

    //                   ],
    //                   //Bouton de soumission
    //                   'submit' => ['title' => $this->l('Save')]
    //               ],
    //               //Groupe d'option n'2
    //               'localization' => [
    //                   'title' => $this->l('Option bloc 2'),
    //                   'icon' => 'icon-globe',
    //                   'fields' => [
    //                       'OPTION_KEY_TEXT_2' => [
    //                           'title' => $this->l('Field Text'),
    //                           'hint' => $this->l('Field Text Hint'),
    //                           'validation' => 'isWeightUnit',
    //                           'required' => true,
    //                           'type' => 'text',
    //                           'class' => 'fixed-width-sm'
    //                       ],
    //                   ],
    //                   'submit' => ['title' => $this->l('Save')]
    //               ],
    //           ];

    // }




}
