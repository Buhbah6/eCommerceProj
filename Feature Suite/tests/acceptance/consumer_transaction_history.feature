Feature: consumer_transaction_history
  In order to track the the user transactions
  As a consumer/user 
  I need to be able to see the history of the transactions that I did

  Scenario: try seeing the transaction history correctly
    Given I am logged in with an existant account  
    When I go into the transaction page
    Then I see the products that I bought 

  Scenario: try seeing the transaction history incorrectly
    Given I am not logged in with an existant account  
    When I go into the transaction page
    Then I see "You need to login" 