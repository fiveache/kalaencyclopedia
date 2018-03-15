<?php

// @codingStandardsIgnoreLine Squiz.Classes.ValidClassName.NotCamelCaps
class Scribunto_LuaHashLibraryTests extends Scribunto_LuaEngineTestBase {
	protected static $moduleName = 'HashLibraryTests';

	protected function getTestModules() {
		return parent::getTestModules() + [
			'HashLibraryTests' => __DIR__ . '/HashLibraryTests.lua',
		];
	}

}