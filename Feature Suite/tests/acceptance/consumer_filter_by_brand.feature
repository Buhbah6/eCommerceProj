Feature: consumer_filter_by_brand
  In order to filter the products 
  As a consumer
  I need to be able to filter the products by selecting different brands

  Scenario: try filtering by brand correctly
    Given I am a consummer 
    When I select the brands that I want 
    Then I see only the products from the brands selected