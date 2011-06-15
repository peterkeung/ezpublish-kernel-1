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
class Field_Author extends Field_String
{
    /**
     * Field type identifier
     * @var string
     */
    const FIELD_IDENTIFIER = 'ezauthor';

    /**
     * @see Interface_ContentFieldType
     */
    public function __construct( Abstract_FieldType $contentTypeFieldType )
    {
        $this->types[] = self::FIELD_IDENTIFIER;
        parent::__construct( $contentTypeFieldType );
    }
}
