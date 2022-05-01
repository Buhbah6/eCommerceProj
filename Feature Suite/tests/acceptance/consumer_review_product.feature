Feature: consumer_review_product
  In order to share an opinion about a certain product
  As a consumer/user
  I need to be able to share a review

  Scenario: try reviewing product correctly
    Given I am logged in with an existing account 
    When I share a review  
    Then I see review page 

  Scenario: try reviewing product incorrectly
    Given I am not logged in with an existing account 
    When I share a review  
    Then I see "You need to login"