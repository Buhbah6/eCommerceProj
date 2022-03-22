Feature: consumer_sort_by_review
  In order to sort the product list 
  As a consumer
  I need to be able to sort the product list by the most reviewed products to the least reviewed

  Scenario: try sorting by review
    Given I am a consumer 
    When I sort by reviews  
    Then I see the products list sorted from the most to the least reviewed products