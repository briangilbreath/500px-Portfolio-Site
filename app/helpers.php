<?php
/**
 * Set active page
 *
 * @param string $uri
 * @return string
 */
function set_active($uri)
{
    return Request::is($uri) ? 'active' : '';
}


function body_class() {
        $body_classes = [];
        $class = "";

        foreach ( Request::segments() as $segment ) {
            if ( is_numeric( $segment ) || empty( $segment ) ) {
                 continue;
            }

            $class .= ! empty( $class ) ? "-" . $segment : $segment;

            array_push( $body_classes, $class );
        }


        return ! empty( $body_classes ) ? implode( ' ', $body_classes ) : 'home';
     }
