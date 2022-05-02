Feature: delete_review
  In order to delete a review 
  As a user
  I need to select the review that I want to delete

  Scenario: try deleting a review
    Given I am logged in as "user0" with password "TestPass"
    And I click "Fridge"
    And I click "Review"
    And I click "Delete"
    And I see "Reviews"
    Then I don't see "user0"

 
