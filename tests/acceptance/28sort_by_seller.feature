Feature: sort_by_seller
  In order to sort all products by seller
  As a user 
  I need to be logged in and on the main page

  Scenario: try sorting by seller
    Given I am logged in as "user0" with password "TestPass"
    And I click "sort by Seller"
    Then I am redirected to "/Product/sortBySeller"
