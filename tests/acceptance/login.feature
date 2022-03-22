Feature: login
  In order to log into the website
  As a user
  I need to be able to provide my username and password to login

  Scenario: login with username 'John123' and password 'Test'
    Given I am on the login page
    When I input "John123" in the "username" box
    And I input "Test" in the "password" box
    And I click "action"
    Then I see the home page with my account logged in