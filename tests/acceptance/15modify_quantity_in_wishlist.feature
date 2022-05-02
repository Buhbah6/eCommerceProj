Feature: modify_quantity_in_wishlist
  In order to modify the quantity of a product in my wishlist
  As a user
  I need to be able to modify a product in the wishlist

  Scenario: Change the number of Fridges in "myList" to 5
    Given I am logged in as "user0" with password "TestPass"
    And I click "My Profile"
    And I click "Create/View Wishlists"
    And I click "myList"
    And I click "Modify Quantity"
    And I input "5 in the "qty" box
    And I click "update!"
    And I see "All Products in myList"
    Then I see "Quantity in Wishlist: 5"