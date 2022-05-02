Feature: elete_wishlist
  In order to to unshare the wishlist
  As a user
  I need to be able to delete a wishlist

  Scenario: try deleting wishlist correctly
    Given I am logged in as "user0" with password "TestPass" 
    And I am on "/Wishlist/main"
    And I click "myList"
    And I click "Delete Wishlist"
    Then I see "All Wishlists"