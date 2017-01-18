<?php
	
	namespace DWAPS\ModelBundle\Entity;

	use FOS\UserBundle\Model\User as BaseUser;
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="dwaps_user")
	 */
	class DwapsUser extends BaseUser
	{
		/**
		 * @ORM\Id
		 * @ORM\Column(type="integer")
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		protected $id;

		public function __construct()
		{
			parent::__construct();
		}
	}