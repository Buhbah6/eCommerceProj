Feature: purchase_history
  In order to track the the user purchases
  As a user 
  I need to be able to see the history of the transactions that I completed

  Scenario: try viewing purchase history
    Given I am logged in as "user0" with password "TestPass"
    And I click "My Profile"
    And I click "View Purchase History"
    Then I am redirected to "/User/purchase_history" 
