<?php


namespace Ling\HtmlPageTools\CssFileGenerator;


/**
 * The CssFileGeneratorInterface interface.
 *
 * A css file generator is a class which generates css files based on given identifiers.
 *
 *
 */
interface CssFileGeneratorInterface
{


    /**
     * Creates a css file based on the given $identifier,
     * and returns the url to this css file.
     *
     *
     *
     * @param string|null $identifier
     * @return string
     */
    public function generate(string $identifier = null): string;
}