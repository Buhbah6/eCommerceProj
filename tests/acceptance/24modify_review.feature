Feature: modify_review
  In order to modify a review 
  As a user
  I need to select the review that I want to modify

  Scenario: try modifying a review
    Given I am logged in as "user0" with password "TestPass"
    And I click "Fridge"
    And I click "Review"
    And I click "Modify"
    And I input "Finally, the fridge isn't really anything special" in the "review_content" box
    And I click "Submit Comment"
    And I see "Reviews"
    And I see "user0"
    Then I see "Finally, the fridge isn't really anything special"