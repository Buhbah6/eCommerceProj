Feature: search_by_seller_name
  In order to find a specific seller
  As a user
  I need to be able to input the seller name into the search by 

  Scenario: try searching with the seller name
    Given I am logged in as "user0" with password "TestPass"
    When I click "View Cart"
    Given I enter "Business Business 1" in the "search" box and I select "seller"
    And I click "action"
    Then I see "Business Business 1"