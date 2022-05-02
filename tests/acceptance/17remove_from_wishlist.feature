Feature: remove_from_wishlist
  In order to remove a product from my wishlist
  As a user
  I need to be able to remove a product from the wishlist

  Scenario: Remove Fridges from "myList"
    Given I am logged in as "user0" with password "TestPass"
    And I click "My Profile"
    And I click "Create/View Wishlists"
    And I click "myList"
    And I click "Remove From Wishlist"
    And I click "myList"
    And I see "All Products in myList"
    Then I don't see "Fridge"