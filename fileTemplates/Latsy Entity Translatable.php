<?php

#if (${NAMESPACE})

namespace ${NAMESPACE};
#end

use Latsy\Core\Traits\Entity\IsNewTrait;
use Latsy\Core\Traits\Entity\TimestampableTrait;
use Latsy\Core\Traits\ModelToArrayTrait;
use Doctrine\ORM\Mapping as ORM;
use Latsy\FrontendApi\Interfaces\ApiEntityInterface;
use Latsy\I18n\Interfaces\TranslatableEntityInterface;
use Latsy\I18n\Traits\TranslatableEntityTrait;

/**
 * Class ${NAME}
 *
 * @package ${NAMESPACE}
 * @author SRG Group <dev@srg.hu>
 * @copyright ${YEAR} SRG Group Kft.
 *
 * @ORM\Table(name="${TABLENAME}")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class ${NAME} implements ApiEntityInterface, TranslatableEntityInterface {

	use TimestampableTrait;
	use ModelToArrayTrait;
	use IsNewTrait;
	use TranslatableEntityTrait;
	
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 */
	private int #[[$id]]#;
	
	/**
	 * Get Id
	 *
	 * @return int
	 */
	public function getId(): int {
		return #[[$this]]#->id;
	}
	
	
	/**
	 * @return string
	 */
	protected function getTranslationEntityClass(): string {
		// TODO: Implement getTranslationEntityClass() method.
	}
	
	
}
