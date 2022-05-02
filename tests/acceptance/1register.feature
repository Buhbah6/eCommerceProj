Feature: register
  In order to register an account on the website
  As a visitor
  I need to be able to enter a username, email, password, password confirmation, contact in a form to create an account

  Scenario: Register an account
    Given I am on "/User/register"
    When I input "user0" in the "username" box
    And I input "test@gmail.com" in the "email" box
    And I input "TestPass" in the "password" box
    And I input "TestPass" in the "password_confirm" box
    And I input "1234567890" in the "contact" box
    And I click on "Register!"
    Then I am redirected to "/User/setup2fa"
