<?php

namespace Tests\EndToEnd;

use Tests\Support\EndToEndTester;

class ActivationCest {

	public function test_it_activates_correctly( EndToEndTester $I ): void {
		$I->loginAsAdmin();
		$I->amOnAdminPage( '/themes.php' );

		$I->seeElement( '.theme.active[data-slug="jer-twentytwentyfive-child-theme"]' );
	}
}
