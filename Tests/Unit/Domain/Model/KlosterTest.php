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
 * Test case for class \Subugoe\Germaniasacra\Domain\Model\Kloster.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Germania Sacra
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub.uni-goettingen.de>
 */
class KlosterTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \Subugoe\Germaniasacra\Domain\Model\Kloster
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \Subugoe\Germaniasacra\Domain\Model\Kloster();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getKlosterReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setKlosterForStringSetsKloster() { 
		$this->fixture->setKloster('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKloster()
		);
	}
	
	/**
	 * @test
	 */
	public function getKlosterIdReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getKlosterId()
		);
	}

	/**
	 * @test
	 */
	public function setKlosterIdForIntegerSetsKlosterId() { 
		$this->fixture->setKlosterId(12);

		$this->assertSame(
			12,
			$this->fixture->getKlosterId()
		);
	}
	
	/**
	 * @test
	 */
	public function getPatroziniumReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPatroziniumForStringSetsPatrozinium() { 
		$this->fixture->setPatrozinium('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPatrozinium()
		);
	}
	
	/**
	 * @test
	 */
	public function getBemerkungReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBemerkungForStringSetsBemerkung() { 
		$this->fixture->setBemerkung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBemerkung()
		);
	}
	
	/**
	 * @test
	 */
	public function getBandSeiteReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBandSeiteForStringSetsBandSeite() { 
		$this->fixture->setBandSeite('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBandSeite()
		);
	}
	
	/**
	 * @test
	 */
	public function getTextGsBandReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTextGsBandForStringSetsTextGsBand() { 
		$this->fixture->setTextGsBand('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTextGsBand()
		);
	}
	
	/**
	 * @test
	 */
	public function getBandReturnsInitialValueForBand() { }

	/**
	 * @test
	 */
	public function setBandForBandSetsBand() { }
	
	/**
	 * @test
	 */
	public function getUrlReturnsInitialValueForUrl() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function setUrlForObjectStorageContainingUrlSetsUrl() { 
		$url = new \Subugoe\Germaniasacra\Domain\Model\Url();
		$objectStorageHoldingExactlyOneUrl = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneUrl->attach($url);
		$this->fixture->setUrl($objectStorageHoldingExactlyOneUrl);

		$this->assertSame(
			$objectStorageHoldingExactlyOneUrl,
			$this->fixture->getUrl()
		);
	}
	
	/**
	 * @test
	 */
	public function addUrlToObjectStorageHoldingUrl() {
		$url = new \Subugoe\Germaniasacra\Domain\Model\Url();
		$objectStorageHoldingExactlyOneUrl = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneUrl->attach($url);
		$this->fixture->addUrl($url);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneUrl,
			$this->fixture->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function removeUrlFromObjectStorageHoldingUrl() {
		$url = new \Subugoe\Germaniasacra\Domain\Model\Url();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($url);
		$localObjectStorage->detach($url);
		$this->fixture->addUrl($url);
		$this->fixture->removeUrl($url);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getUrl()
		);
	}
	
	/**
	 * @test
	 */
	public function getStandortReturnsInitialValueForKlosterStandort() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getStandort()
		);
	}

	/**
	 * @test
	 */
	public function setStandortForObjectStorageContainingKlosterStandortSetsStandort() { 
		$standort = new \Subugoe\Germaniasacra\Domain\Model\KlosterStandort();
		$objectStorageHoldingExactlyOneStandort = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneStandort->attach($standort);
		$this->fixture->setStandort($objectStorageHoldingExactlyOneStandort);

		$this->assertSame(
			$objectStorageHoldingExactlyOneStandort,
			$this->fixture->getStandort()
		);
	}
	
	/**
	 * @test
	 */
	public function addStandortToObjectStorageHoldingStandort() {
		$standort = new \Subugoe\Germaniasacra\Domain\Model\KlosterStandort();
		$objectStorageHoldingExactlyOneStandort = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneStandort->attach($standort);
		$this->fixture->addStandort($standort);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneStandort,
			$this->fixture->getStandort()
		);
	}

	/**
	 * @test
	 */
	public function removeStandortFromObjectStorageHoldingStandort() {
		$standort = new \Subugoe\Germaniasacra\Domain\Model\KlosterStandort();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($standort);
		$localObjectStorage->detach($standort);
		$this->fixture->addStandort($standort);
		$this->fixture->removeStandort($standort);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getStandort()
		);
	}
	
	/**
	 * @test
	 */
	public function getBearbeitungsstatusReturnsInitialValueForBearbeitungsstatus() { }

	/**
	 * @test
	 */
	public function setBearbeitungsstatusForBearbeitungsstatusSetsBearbeitungsstatus() { }
	
	/**
	 * @test
	 */
	public function getPersonallistenstatusReturnsInitialValueForPersonallistenstatus() { }

	/**
	 * @test
	 */
	public function setPersonallistenstatusForPersonallistenstatusSetsPersonallistenstatus() { }
	
	/**
	 * @test
	 */
	public function getOrdenReturnsInitialValueForKlosterOrden() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getOrden()
		);
	}

	/**
	 * @test
	 */
	public function setOrdenForObjectStorageContainingKlosterOrdenSetsOrden() { 
		$orden = new \Subugoe\Germaniasacra\Domain\Model\KlosterOrden();
		$objectStorageHoldingExactlyOneOrden = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneOrden->attach($orden);
		$this->fixture->setOrden($objectStorageHoldingExactlyOneOrden);

		$this->assertSame(
			$objectStorageHoldingExactlyOneOrden,
			$this->fixture->getOrden()
		);
	}
	
	/**
	 * @test
	 */
	public function addOrdenToObjectStorageHoldingOrden() {
		$orden = new \Subugoe\Germaniasacra\Domain\Model\KlosterOrden();
		$objectStorageHoldingExactlyOneOrden = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneOrden->attach($orden);
		$this->fixture->addOrden($orden);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneOrden,
			$this->fixture->getOrden()
		);
	}

	/**
	 * @test
	 */
	public function removeOrdenFromObjectStorageHoldingOrden() {
		$orden = new \Subugoe\Germaniasacra\Domain\Model\KlosterOrden();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($orden);
		$localObjectStorage->detach($orden);
		$this->fixture->addOrden($orden);
		$this->fixture->removeOrden($orden);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getOrden()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiteraturReturnsInitialValueForLiteratur() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getLiteratur()
		);
	}

	/**
	 * @test
	 */
	public function setLiteraturForObjectStorageContainingLiteraturSetsLiteratur() { 
		$literatur = new \Subugoe\Germaniasacra\Domain\Model\Literatur();
		$objectStorageHoldingExactlyOneLiteratur = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneLiteratur->attach($literatur);
		$this->fixture->setLiteratur($objectStorageHoldingExactlyOneLiteratur);

		$this->assertSame(
			$objectStorageHoldingExactlyOneLiteratur,
			$this->fixture->getLiteratur()
		);
	}
	
	/**
	 * @test
	 */
	public function addLiteraturToObjectStorageHoldingLiteratur() {
		$literatur = new \Subugoe\Germaniasacra\Domain\Model\Literatur();
		$objectStorageHoldingExactlyOneLiteratur = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneLiteratur->attach($literatur);
		$this->fixture->addLiteratur($literatur);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneLiteratur,
			$this->fixture->getLiteratur()
		);
	}

	/**
	 * @test
	 */
	public function removeLiteraturFromObjectStorageHoldingLiteratur() {
		$literatur = new \Subugoe\Germaniasacra\Domain\Model\Literatur();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($literatur);
		$localObjectStorage->detach($literatur);
		$this->fixture->addLiteratur($literatur);
		$this->fixture->removeLiteratur($literatur);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getLiteratur()
		);
	}
	
}
?>