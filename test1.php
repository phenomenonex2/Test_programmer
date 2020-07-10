
<div>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    List : <input type="text" name="data" value=""><br/><br/>
    Search : <input type="text" name="search" value=""><br/><br/>
    <h2>Type of search</h2>
    <select name="search-type" id="searchType">
      <option value="linear">Linear Search</option>
      <option value="binary">Binary Search</option>
      <option value="bubble">Bubble Search</option>
    </select>
    <button id="submitBtn">Submit</button>
  </form>

  <?php 
  $data = $_POST['data'];
  $search = $_POST['search'];
  $data_arr = explode(',', $data);
  $valueMid = 5;
  echo '<h2>Result</h2>';
  foreach($data_arr as $result) {
    echo $result . ', ';
  }; 
  echo '<br/><br/>';
  if(in_array($search ,$data_arr)){
    echo 'Search result: ' . $search;
  }else{
    echo 'Search result: Not founded.';
  }
// function binarySearch(Array $data, $x) { 
//     // check for empty array 
//     if (count($data) === 0) return false; 
//     $low = 0; 
//     $high = count($data) - 1; 
      
//     while ($low <= $high) { 
          
//         // compute middle index 
//         $mid = floor(($low + $high) / 2); 
   
//         // element found at mid 
//         if($data[$mid] == $x) { 
//             return true; 
//         } 
  
//         if ($x < $data[$mid]) { 
//             // search the left side of the array 
//             $high = $mid -1; 
//         } 
//         else { 
//             // search the right side of the array 
//             $low = $mid + 1; 
//         } 
//     } 
      
//     // If we reach here element x doesnt exist 
//     return false; 
// } 
// if(binarySearch($data, $valueMid) == true) { 
//   echo $valueMid." Exists"; 
// } 
// else { 
//   echo $valueMid." Doesnt Exist"; 
// } 
  ?>
</div>