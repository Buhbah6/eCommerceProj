Feature: register
  In order to register an account on the website
  As a visitor
  I need to be able to enter a username, email, password, password confirmation, contact in a form to create an account

  Scenario: Register an account
    Given I am on the registration page
    When I input "TonyNad" in the "username" box
    And I input "tonynadeau03@gmail.com" in the "email" box
    And I input "TestPass" in the "password" box
    And I input "TestPass" in the "password_confirm" box
    And I click on "action"
    And I see the home page
