Feature: register
  In order to register an account on the website
  As a visitor
  I need to be able to enter a username, email, and password in a form to create an account

  Scenario: Register an account (Anthony Nadeau)
    Given I am on the registration page
    When I input "TonyNad" into the "Username" box
    And I input "tonynadeau03@gmail.com" into the "email" box
    And I input "TestPass" into the "password" box
    And I input "TestPass" into the "Confirm password" box
    And I click on "Create Account"
    Then I see my account logged in
    And I see the home page
