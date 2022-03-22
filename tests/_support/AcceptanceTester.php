<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */
        /**
     * @Given I am on the page :url
     */
     public function iAmOnThePage($url)
     {
         $this->amOnPage($url);
     }

    /**
     * @When I input :term in the :boxname box
     */
     public function iInputInTheBox($term, $boxname)
     {
         $this->fillField($boxname, $term);
     }

    /**
     * @When I click :text
     */
     public function iClick($text)
     {
         $this->click($text);
     }

    /**
     * @Then I see :text
     */
     public function iSee($text)
     {
         $this->see($text);
     }
 /**
     * @Given I am on the login page
     */
     public function iAmOnTheLoginPage()
     {
         $url = "http://localhost/User/login";
         $this->amOnPage($url); 
     }

    /**
     * @Then I see the home page with my account logged in
     */
     public function iSeeTheHomePageWithMyAccountLoggedIn()
     {
	   $url = "http://localhost/Main/index";
	   $this->amOnPage($url);      
     }
	

     /**
     * @Given I am on the registration page
     */
     public function iAmOnTheRegistrationPage()
     {
         $url = "http://localhost/User/register";
         $this->amOnPage($url);
     }

    /**
     * @When I input :arg1 into the :arg2 box
     */
     public function iInputIntoTheBox($arg1, $arg2)
     {
	   $this->fillField("username","$arg1");
         $this->fillField("password","$arg2");
	   $this->fillField("password_confirm","$arg2");
	   $this->fillField("email","$arg1" + "@yahoo.com");
	   $this->fillField("contact","1234567");
     }

    /**
     * @When I click on :arg1
     */
     public function iClickOn($arg1)
     {
         $this->click($arg1);
     }

    /**
     * @Then I see the home page
     */
     public function iSeeTheHomePage()
     {
         $url = "http://localhost/Main/index";
	   $this->amOnPage($url);
     }

 	/**
     * @Given I am on my page
     */
     public function iAmOnMyPage()
     {
         $this->amOnPage("http://localhost/User/login");
	   $this->fillField("username","Buhbah6");
         $this->fillField("password","test");
	   $this->click("action");
         $url = "http://localhost/Main/index";
	   $this->amOnPage($url);
     }


	/**
     * @When I click on the link
     */
     public function iClickOnTheLink()
     {
         $this->click("Logout");
     }
	

    /**
     * @Then I see the home page with the option to login
     */
     public function iSeeTheHomePageWithTheOptionToLogin()
     {
         $url = "http://localhost/Main/index";
	   $this->amOnPage($url);
     }

}