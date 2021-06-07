<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

#if (${TESTED_NAME} && ${NAMESPACE} && !${TESTED_NAMESPACE})
use ${TESTED_NAME};
#elseif (${TESTED_NAME} && ${TESTED_NAMESPACE} && ${NAMESPACE} != ${TESTED_NAMESPACE})
use ${TESTED_NAMESPACE}\\${TESTED_NAME};
#end
use LatsyTest\TestLib\Cases\EntityTestCase;

/**
 * Class ${NAME}
 *
 * @package   ${NAMESPACE}
 * @author    SRG Group <dev@srg.hu>
 * @copyright 2021 SRG Group Kft.
 *
 * @property ${TESTED_NAME} $entity
 */
class ${NAME} extends EntityTestCase {

	protected string $modelClass = ${TESTED_NAME}::class;

}

	
