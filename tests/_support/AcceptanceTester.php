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
     * @Given I am on :url
     */
     public function iAmOnThePage($url)
     {
         $this->amOnPage($url);
     }

     /**
      * @And I am on :url
      */
     public function andIAmOnPage($url) {
        $this->amOnPage($url);
     }

    /**
     * @When I input :content in the :field box 
     */
     public function iInputInTheBox($content, $field)
     {
        $this->fillField($field, $content);
     }

     /**
      * @And I input :content in the :field
      */
     public function andIInput($content, $field) {
        $this->fillField($field, $content);
     }

     /**
      * @Given I enter :content in the :field box and I select :option
      */
      public function iEnterInTheSearchBar($content, $field, $option) {
         $this->selectOption('search_type', $option);
         $this->fillField($field, $content);
      }

      /**
      * @Given I select :option in the :field box
      */
      public function iSelectOption($option, $field) {
         $this->selectOption($field, $option);
      }

     /**
      * @Then I am redirected to :url
      */
     public function iAmRedirectedTo($url) {
        $this->iAmOnThePage($url);
     }

     /**
      * @And I am redirected to :url
      */
     public function andIAmRedirected($url) {
        $this->iAmOnThePage($url);
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
      * @Then I don't see :text
      */
     public function iDontSee($text) {
        $this->dontSee($text);
     }

    /**
     * @When I click on :arg1
     */
     public function iClickOn($arg1)
     {
         $this->click($arg1);
     }

     /**
      * @And I click on :arg1
      */
     public function andIClickOn($arg1) {
         $this->click($arg1);
     }

     /**
      * @Given I am logged in as :username with password :password
      */
     public function amLoggedIn($username, $password) {
        $this->amOnPage("/User/login");
        $this->fillField("username", $username);
        $this->fillField("password", $password);
        $this->click("Login!");
        $this->click("Skip 2FA");
        $this->click("Home Page");
     }
}