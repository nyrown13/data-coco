<?php
 namespace MailPoetVendor\Doctrine\ORM\Mapping; if (!defined('ABSPATH')) exit; use Attribute; use MailPoetVendor\Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor; final class EntityListeners implements Annotation { public $value = []; public function __construct(array $value = []) { $this->value = $value; } } 