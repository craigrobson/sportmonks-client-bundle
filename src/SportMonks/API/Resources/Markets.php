<?php
namespace SportMonks\API\Resources;


use SportMonks\API\Traits\Resource\Find;
use SportMonks\API\Traits\Resource\FindAll;
use SportMonks\API\Traits\Utility\InitTrait;

/**
 * Class Markets
 * @package SportMonks\API\Resources
 */
class Markets extends ResourceAbstract
{
    use InitTrait;

    use FindAll;

    use Find;
}
