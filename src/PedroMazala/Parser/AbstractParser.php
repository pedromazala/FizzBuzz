<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 31/08/2018
 * Time: 10:17
 */

namespace App\PedroMazala\Parser;

abstract class AbstractParser implements ParserInterface
{
	/**
	 * @var ParserInterface|null
	 */
	private $next;

	public function __construct(?ParserInterface $next = null)
	{
		$this->next = $next;
	}

	public function next(): ?ParserInterface
	{
		return $this->next;
	}

	/**
	 * @param int $value
	 * @return mixed
	 */
	public function parse(int $value)
	{
		if ($this->match($value)) {
			return $this->getParsed($value);
		}

		return $this->next()->parse($value);
	}

	abstract protected function getParsed(int $value);
}
