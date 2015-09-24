<?php
require 'parseTests.php';
/**
 * returns whether a squirrel's cigar party was successful
 * @param  Number  $number_of_cigars Number of cigars that were smoked
 * @param  boolean $is_weekend       whether it is a weekend or Not
 * @return boolean                   whether or not the party was a success
 */
function cigar_party($number_of_cigars, $is_weekend)
{
  $success = ($number_of_cigars >= 40) ? ($number_of_cigars <= 60 || $is_weekend) : False;

  return $success;
}

$tests = getTests();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cigar Parties</title>
    <link rel="stylesheet" href="/style.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
    <div>
        <h1>Cigar Parties</h1>

        <article>
        <p>
            When squirrels get together for a party, they like to have cigars. A squirrel party is successful when the number of cigars is between 40 and 60, inclusive. Unless it is the weekend, in which case there is no upper bound on the number of cigars.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Number of Cigars</th>
                    <th>Weekend?</th>
                    <th>Successful?</th>
                    <th>Test Passes?</th>
                </tr>
            </thead>
            <tbody >
              <?php foreach ($tests as $test): ?>
                <tr>
                  <?php
                    $party_success = cigar_party($test["cigars"], $test["weekend"]);
                    $success = $party_success == $test["successful"]
                   ?>
                  <td> <?= $test["cigars"] ?></td>
                  <td> <?= $test["weekend"] ? "True" : "False"?> </td>
                  <td> <?= $party_success ? "True" : "False" ?> </td>
                  <td class="<?= $success ? "yes" : "no" ?>"> <?= $success ? "Yes" : "No"?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
        </article>
    </div>
</body>
</html>
