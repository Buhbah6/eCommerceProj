Feature: sort_by_price
  In order to sort the product list 
  As a user
  I need to be able to sort the product list by the price

  Scenario: try sorting by price
    Given I am logged in as "user0" with password "TestPass"
    And I click "sort by Price"
    Then I am redirected to "/Product/sortByPrice"