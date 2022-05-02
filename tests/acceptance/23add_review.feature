Feature: add_review
  In order to review a product
  As a user
  I need to be logged in and on the main page

  Scenario: try reviewing "Fridge"
    Given I am logged in as "user0" with password "TestPass"
    And I click "Fridge"
    And I click "Review"
    And I click "Add a review"
    And I input "Great fridge! made food very cold! :)" in the "review_content" box
    And I click "Submit Comment"
    And I see "user0"
    And I see "Great fridge! made food very cold! :)"
    Then I am redirected to "/Reviews/index/1"
