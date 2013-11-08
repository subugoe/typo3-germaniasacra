<?php

namespace Subugoe\Germaniasacra\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Subugoe\Germaniasacra\Domain\Model\Zeitraum.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */
class ZeitraumTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Subugoe\Germaniasacra\Domain\Model\Zeitraum
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Subugoe\Germaniasacra\Domain\Model\Zeitraum();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getVonVonReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->fixture->getVonVon()
		);
	}

	/**
	 * @test
	 */
	public function setVonVonForIntegerSetsVonVon() {
		$this->fixture->setVonVon(12);

		$this->assertSame(
			12,
			$this->fixture->getVonVon()
		);
	}
	/**
	 * @test
	 */
	public function getVonBisReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->fixture->getVonBis()
		);
	}

	/**
	 * @test
	 */
	public function setVonBisForIntegerSetsVonBis() {
		$this->fixture->setVonBis(12);

		$this->assertSame(
			12,
			$this->fixture->getVonBis()
		);
	}
	/**
	 * @test
	 */
	public function getVonVerbalReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getVonVerbal()
		);
	}

	/**
	 * @test
	 */
	public function setVonVerbalForStringSetsVonVerbal() {
		$this->fixture->setVonVerbal('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVonVerbal()
		);
	}
	/**
	 * @test
	 */
	public function getBisVonReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->fixture->getBisVon()
		);
	}

	/**
	 * @test
	 */
	public function setBisVonForIntegerSetsBisVon() {
		$this->fixture->setBisVon(12);

		$this->assertSame(
			12,
			$this->fixture->getBisVon()
		);
	}
	/**
	 * @test
	 */
	public function getBisBisReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->fixture->getBisBis()
		);
	}

	/**
	 * @test
	 */
	public function setBisBisForIntegerSetsBisBis() {
		$this->fixture->setBisBis(12);

		$this->assertSame(
			12,
			$this->fixture->getBisBis()
		);
	}
	/**
	 * @test
	 */
	public function getBisVerbalReturnsInitialValueForString() {
		$this->assertSame(
			NULL,
			$this->fixture->getBisVerbal()
		);
	}

	/**
	 * @test
	 */
	public function setBisVerbalForStringSetsBisVerbal() {
		$this->fixture->setBisVerbal('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBisVerbal()
		);
	}
}
?>