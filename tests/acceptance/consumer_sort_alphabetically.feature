Feature: consumer_sort_alphabetically
  In order to sort the product list 
  As a consumer
  I need to be able to sort the product list alphabetically

  Scenario: try sorting alphabetically correctly
    Given I am a consumer 
    When I sort alphabetically  
    Then I see the products list sorted alphabetically