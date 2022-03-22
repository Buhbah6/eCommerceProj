Feature: seller_track_results
  In order to keep up with seller results
  As a customer and seller
  I need to be able to see deliver information

  Scenario: try seller_track_results
  Given i have received delivery information
  When I receive status
  Then I will be able to see updates on location
