<?php
/**
 * File containing the Content List parser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\REST\Client\Input\Parser;

use eZ\Publish\Core\REST\Common\Input\Parser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;

/**
 * Parser for ContentList
 */
class ContentList extends Parser
{
    /**
     * Parse input structure
     *
     * @param array $data
     * @param ParsingDispatcher $parsingDispatcher
     * @return ValueObject
     * @todo Error handling
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        $contents = array();
        foreach ( $data['ContentInfo'] as $rawContentData )
        {
            $contents[] = $parsingDispatcher->parse(
                $rawContentData,
                $rawContentData['_media-type']
            );
        }
        return $contents;
    }
}