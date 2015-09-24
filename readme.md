# WEBD-2006 Assignment 4
The assignment was as follows:<br>When squirrels get together for a party, they like to have cigars. A squirrel party is successful when the number of cigars is between 40 and 60, inclusive. Unless it is the weekend, in which case there is no upper bound on the number of cigars. Create a function that returns a boolean. Your function should return true if the party with the given values is successful, or false otherwise. Your function declaration should be based on this:<br>`function cigar_party($number_of_cigars, $is_weekend) { }`  

Example function calls with their associated return values:  

```php
cigar_party(30, false); // Should return boolean false.
cigar_party(50, false); // Should return boolean true.
cigar_party(70, true);  // Should return boolean true.
```

Use your function to produce a valid HTML document modeled after [this one](http://stungeye.com/school/a3/cigarParty.php). Each row of the produced HTML table must be generated by calling your cigar_party function with the shown test cases. The "Test Passes?" column should only show a green "Yes" if your function is working correctly, otherwise it should show a red "No". Working correctly means that when your function is executed with the values in columns 1 and 2, the result should be column 3. You may wish to create an array of arrays or an array of hashes representing the test data to loop over. (You are effectively creating a simple unit testing system.)