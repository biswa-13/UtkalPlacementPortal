<?php
include 'dbconnect.php';
/* Note : http://www.evoluted.net/thinktank/web-development/time-saving-database-functions
		Visit above link to know better about the concept of the functions written here.
*/

/* Guidelines To Use These Functions :- 
	The key for these functions to work is the format for the $form_data variable. 
	The variable is an array and should be arranged so the key of each element,
	in the array is the column name for the data in the value part of the array. 
	For the table described in the INSERT statement above, our array would look something similiar to this:

	$form_data = array(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'address1' => $address1,
    'postcode' => $postcode,
    'tel' => $tel,
    'mobile' => $mobile,
    'website' => $website,
    'contact_method' => $contact_method,
    'subject' => $subject,
    'message' => $message,
    'how_you_found_us' => $how_you_found_us,
    'time' => time()
	);
	
	dbRowInsert('my_table', $form_data);
	dbRowUpdate('my_table', $form_data, "WHERE id = '$id'");
	dbRowDelete('my_table', "WHERE id = '$id'");


*/
function dbRowInsert($table_name, $form_data)
{
	try{
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);

    // build the query
    $sql = "INSERT INTO ".$table_name."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $form_data)."')";

    //echo "sql Query -->".$sql;
    // run and return the query result resource
    $result = mysql_query($sql);
    return $result;

	}catch(Exception $ex){
	    echo "<script>
	      var msg = '<b>* Error Occured While Inserting New Department ...</b>';
	      showWarning(msg);
	    </script>";
	  }
}

// the where clause is left optional incase the user wants to delete every row!
function dbRowDelete($table_name, $where_clause='')
{
	try{

    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add keyword
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // build the query
    $sql = "DELETE FROM ".$table_name.$whereSQL;

    // run and return the query result resource
    return mysql_query($sql);

	}catch(Exception $ex){
	    echo "<script>
	      var msg = '<b>* Error Occured While Inserting New Department ...</b>';
	      showWarning(msg);
	    </script>";
	  }
}

// again where clause is left optional
function dbRowUpdate($table_name, $form_data, $where_clause='')
{
	try{

    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;

    // run and return the query result
    return mysql_query($sql);

	}catch(Exception $ex){
	    echo "<script>
	      var msg = '<b>* Error Occured While Inserting New Department ...</b>';
	      showWarning(msg);
	    </script>";
	  }
}
?>