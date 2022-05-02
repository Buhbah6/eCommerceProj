Feature: add_product
  In order to add a product
  As a user
  I need to be able to input a name, quantity, price, description, quality, and category of a product

  Scenario: try add_product
    Given I am logged in as "user0" with password "TestPass"
    And I click "View Seller Profile"
    And I click "Add Product"
    And I input "Bed Frame" in the "product_name" box
    And I input "5" in the "available_quantity" box
    And I input "19.99" in the "price" box
    And I input "Frame of a bed" in the "description" box
    And I input "0" in the "quality" box
    Given I select "4" in the "category_id" box
    And I click "Create!"
    And I see "Products"
    Then I see "Bed Frame"
