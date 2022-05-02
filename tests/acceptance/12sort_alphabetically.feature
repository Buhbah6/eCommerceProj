Feature: sort_alphabetically
  In order to sort the product list 
  As a user
  I need to be able to sort the product list alphabetically

  Scenario: try sorting alphabetically correctly
    Given I am logged in as "user0" with password "TestPass"
    And I click "sort by Alphabetically"
    Then I am redirected to "/Product/sortByNameAlphabetically"