Feature: consumer_delete_from_wishlist
  In order to have a functional wishlist
  As a consumer/user
  I need to be able to delete products from my whishlist 

  Scenario: try deleting from the wishlist correctly
    Given I am logged in with an existing account 
    When I delete a product from the whishlist 
    Then I see wishlist without the product info