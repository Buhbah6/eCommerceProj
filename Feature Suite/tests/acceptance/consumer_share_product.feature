Feature: consumer_share_product
  In order to share a specific product 
  As a consumer/user
  I need to be able to share the product selected 

  Scenario: try sharing product correctly
    Given I am logged in with an existant account 
    When I share the product 
    Then I the shared product with the user name 

  Scenario: try sharing product incorrectly
    Given I am not logged in with an existant account 
    When I share the product 
    Then I see "You need to login"