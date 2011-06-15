<?php
/**
 * Keyword Field model object
 *
 * @copyright Copyright (c) 2011, eZ Systems AS
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2.0
 * @package ext
 * @subpackage content
 */

/**
 * Keyword Field value object class
 */
namespace ezx\content;
class Field_Type_Keyword extends Field_Type_String
{
    /**
     * Field type identifier
     * @var string
     */
    const FIELD_IDENTIFIER = 'ezkeyword';

    /**
     * @public
     * @var string
     */
    protected $default = '';

    /**
     * Definition of properties on this class
     *
     * {@inheritdoc}
     *
     * @see \ezx\base\Abstract_Model::$definition
     * @var array
     */
    protected static $definition = array(
        'default' => array(
            'type' => self::TYPE_STRING,
            'legacy_column' => 'data_text1',
        ),
    );

    /**
     * Sets identifier on design override and calls parent __construct.
     */
    public function __construct()
    {
        $this->types[] = self::FIELD_IDENTIFIER;
        parent::__construct();
    }
}
