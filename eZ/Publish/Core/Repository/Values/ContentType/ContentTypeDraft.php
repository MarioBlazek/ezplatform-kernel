<?php
namespace eZ\Publish\Core\Repository\Values\ContentType;

use eZ\Publish\API\Repository\Values\ContentType\ContentTypeDraft as APIContentTypeDraft,
    ezp\Base\Exception\PropertyNotFound,
    ezp\Base\Exception\PropertyPermission;

/**
 *
 * This class represents a draft of a content type
 *
 */
class ContentTypeDraft extends APIContentTypeDraft
{
    public function __get( $propertyName )
    {
        return $this->innerContentType->$propertyName;
    }

    public function __set( $propertyName, $propertyValue )
    {
        $this->innerContentType->$propertyName = $propertyValue;
    }

    public function __isset( $propertyName )
    {
        return isset( $this->innerContentType->$propertyName );
    }

    /**
     * Holds internal content type object
     *
     * @var \eZ\Publish\API\Repository\Values\ContentType\ContentType
     * @todo document
     */
    protected $innerContentType;

    /**
     * This method returns the human readable name in all provided languages
     * of the content type
     *
     * The structure of the return value is:
     * <code>
     * array( 'eng' => '<name_eng>', 'de' => '<name_de>' );
     * </code>
     *
     * @return string[]
     */
    public function getNames()
    {
        return $this->innerContentType->getNames();
    }

    /**
     *
     * this method returns the name of the content type in the given language
     * @param string $languageCode
     * @return string the name for the given language or null if none exists.
     */
    public function getName( $languageCode )
    {
        return $this->innerContentType->getName( $languageCode );
    }

    /**
     *  This method returns the human readable description of the content type
     *
     * The structure of this field is:
     * <code>
     * array( 'eng' => '<description_eng>', 'de' => '<description_de>' );
     * </code>
     *
     * @return string[]
     */
    public function getDescriptions()
    {
        return $this->innerContentType->getDescriptions();
    }

    /**
     * this method returns the name of the content type in the given language
     * @param string $languageCode
     * @return string the description for the given language or null if none exists.
     */
    public function getDescription( $languageCode )
    {
        return $this->innerContentType->getDescription( $languageCode );
    }

    /**
     * This method returns the content type groups this content type is assigned to
     * @return array an array of {@link ContentTypeGroup}
     */
    public function getContentTypeGroups()
    {
        return $this->innerContentType->contentTypeGroups;
    }

    /**
     * This method returns the content type field definitions from this type
     *
     * @return array an array of {@link FieldDefinition}
     */
    public function getFieldDefinitions()
    {
        return $this->innerContentType->getFieldDefinitions();
    }

    /**
     *
     * this method returns the field definition for the given identifier
     * @param $fieldDefinitionIdentifier
     * @return FieldDefinition
     */
    public function getFieldDefinition( $fieldDefinitionIdentifier )
    {
        return $this->innerContentType->getFieldDefinition( $fieldDefinitionIdentifier );
    }
}
