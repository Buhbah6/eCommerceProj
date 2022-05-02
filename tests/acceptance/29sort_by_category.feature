Feature: sort_by_category
  In order to sort all products by category
  As a user 
  I need to be logged in and on the main page

  Scenario: try sorting by category
    Given I am logged in as "user0" with password "TestPass"
    And I click "sort by Catagory"
    Then I am redirected to "/Product/sortByCategory"
