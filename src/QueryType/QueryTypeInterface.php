<?php
/**
 * @file
 * Contains Drupal\facetapi\QueryType\QueryType
 */

namespace Drupal\facetapi\QueryType;

use Drupal\facetapi\FacetManager\FacetManagerInterface;

interface QueryTypeInterface {

  /**
   * Add facet info to the query using the backend native query object.
   *
   * @return mixed
   */
  public function execute();

  /**
   * Build the facet information,
   * so it can be rendered.
   *
   * @TODO: maybe it should be renamed to addResults.
   */
  public function build();

}