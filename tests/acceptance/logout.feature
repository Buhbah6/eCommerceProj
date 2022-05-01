Feature: logout
  In order to log out of my account
  As a user
  I need to be able to click a button to log out

  Scenario: Log out of the website
    Given I am logged in as "user0" with password "TestPass"
    And I am on "/Main/index"
    And I click on "Logout"
    Then I am redirected to "/Main/index"
