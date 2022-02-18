Feature: consumer_sort_by_price
  In order to sort the product list 
  As a consumer
  I need to be able to sort the product list by the price

  Scenario: try sorting by price
    Given I am a consumer 
    When I sort by price  
    Then I see the products list sorted from the lowest to the highest prices