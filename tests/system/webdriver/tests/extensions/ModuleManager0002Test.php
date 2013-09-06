<?php

require_once 'JoomlaWebdriverTestCase.php';

use SeleniumClient\By;
use SeleniumClient\SelectElement;
use SeleniumClient\WebDriver;
use SeleniumClient\WebDriverWait;
use SeleniumClient\DesiredCapabilities;

/**
 * This class tests the Module Manager: Add / Edit Module Screen
 * @author Mark
 *
 */
class ModuleManager0002Test extends JoomlaWebdriverTestCase
{
	/**
	 *
	 * @var ModuleManagerPage
	 */
	protected $moduleManagerPage = null; // Global configuration page

	public function setUp()
	{
		parent::setUp();
		$cpPage = $this->doAdminLogin();
		/* @var $cpPage ControlPanelPage */
		$this->moduleManagerPage = $cpPage->clickMenu('Module Manager', 'ModuleManagerPage');
	}

	public function tearDown()
	{
		$this->doAdminLogout();
		parent::tearDown();
	}

	/**
	 * @test
	 */
	public function constructor_OpenEditScreen_ModuleEditOpened()
	{
		$salt = rand();
		$title = 'Module' . $salt;
		$client = 'Site';
		$type = 'Map';
		$position = 'mynewposition';
		$suffix = 'mysuffix';
		$otherFields = array('Position' => $position, 'Module Class Suffix' => $suffix);
		$this->moduleManagerPage->addModule($title, $client, $type, $otherFields);
		print_r($this->moduleManagerPage);
//		$moduleEditPage = $this->getPageObject('ModuleEditPage');
//		$testElements = $moduleEditPage->getAllInputFields($moduleEditPage->tabs);
//		var_dump($testElements);
	// $this->moduleManagerPage->editModule($title, array('Title' => $newTitle, 'Position' => $newPosition, 'Module Class Suffix' => $newSuffix, 'Note' => $newNote));
//		$this->moduleManagerPage->clickButton('new');
//		$this->driver->waitForElementUntilIsPresent(By::xPath("//a[contains(., 'Maps')]"))->click();
//		/* @var $moduleEditPage ModuleEditPage */
//		$moduleEditPage = $this->getPageObject('ModuleEditPage');
//		//$moduleEditPage->clickButton('cancel');
//		$this->moduleManagerPage = $this->getPageObject('ModuleManagerPage');
//		$this->moduleManagerPage->editModule($title, array('Title' => $newTitle, 'Position' => $newPosition, 'Module Class Suffix' => $newSuffix, 'Note' => $newNote));
	}



}