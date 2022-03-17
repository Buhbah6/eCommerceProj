Feature: logout
  In order to log out of my account
  As a user
  I need to be able to click a button to log out

  Scenario: Log out of the website
    Given I am on any page
    When I click "Logout"
    Then I see the home page with the option to login