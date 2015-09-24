<?php
function getTests()
{
  $html = DOMDocument::loadHTMLFile('data.html');
  $headings = array("cigars", "weekend", "successful");
  $results = array();
  $trs = $html->getElementsByTagName('tr');
  foreach ($trs as $tr) {
    $tds = $tr->getElementsByTagName('td');

    // account for header row
    if ($tds->length > 2) {
      $test = array();
      foreach ($headings as $i => $heading) {
        $test[$heading] =  getValue($tds->item($i));
      }
      $results[] = $test;
    }
  }
  return $results;
}

/**
 * extract the appropriate value from a node containing 1 text node
 * @param  DOMNode     $node node to extract text from
 * @return mixed       the proper value from the node. Boolean if text value is true or false, etc.
 */
function getValue($node)
{
  $value = strtolower($node->firstChild->nodeValue);
  if (is_numeric($value)){
   return (int)$value;
  } else {
    return $value == 'true';
 }
}
 ?>
