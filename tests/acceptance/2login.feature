Feature: login
  In order to log into the website
  As a user
  I need to be able to provide my username and password to login

  Scenario: login with username 'user0' and password 'TestPass'
    Given I am on "/User/login"
    When I input "user0" in the "username" box
    And I input "TestPass" in the "password" box
    And I click on "Login!"
    Then I am redirected to "/User/setup2fa"