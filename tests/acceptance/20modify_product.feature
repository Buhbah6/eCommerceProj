Feature: modify_product
  In order to modify a product 
  As a user
  I need to enter product information in the update page

  Scenario: try product modify the price
  Given I am logged in as "user0" with password "TestPass"
  And I click "View Seller Profile"
  And I click "Update"
  And I input "Kitchen Table" in the "product_name" box
  And I input "100" in the "price" box
  And I input "Table for Kitchen" in the "description" box
  Given I select "1" in the "category_id" box
  And I click "Update!"
  Then I see "Kitchen Table"



