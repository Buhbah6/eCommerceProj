Feature: add_to_wishlist
  In order to add a product to a wishlist
  As a user
  I need to select a product to add to my list

  Scenario: try adding a Fridge to the wishlist
    Given I am logged in as "user0" with password "TestPass" 
    And I click "Fridge"
    And I click "Add to a Wishlist"
    And I click "myList"
    And I see "All Products in myList"
    Then I see "Fridge"