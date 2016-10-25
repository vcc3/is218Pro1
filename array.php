<?php


class HTML_Table {


 public function build_table( array $info){
 
    // builds table
    $html = '<table>';
    // top row of table.
    $html .= '<tr>';
    //foreach($info[0] as $key=>$value){
            //$html .= '<th>' . $value . '</th>';
             $html .= '<th>' . ' Name   '. '</th>';
             $html .= '<th>' . ' Age    '. '</th>';
             $html .= '<th>' . ' Height '. '</th>';
             // ' Age '. ' Height '. 
            //takes firstname , age and height from  array.`as the values.
      //  }
    $html .= '</tr>';
    // start the body of the table.
    $html .= '<tbody>';
    // rows with information
    foreach( $info as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . $value2 . '</td>';
        }
        $html .= '</tr>';
    }

      $hmtl .= '</tbody>';
    // closes table
    $html .= '</table>';
    return $html;
}
}


$info = array(
    array('First Name'=>'Victor','Age'=> '22', 'Height'=> '6.8'),
    array('First Name'=>'Luke', 'Age'=> '22', 'Height'=> '6.5'),
    array('First Name'=>'Anthony', 'Age'=> '21' ,'Height'=> '5.9')
);
//instantiate.
$table = new HTML_Table;
echo $table->build_table($info);


/*
    function build_table($info){
    // builds table
    $html = '<table>';
    // top rop of table.
    $html .= '<tr>';
    foreach($info[0] as $key=>$value){
            $html .= '<th>' . $key . '</th>';
            //takes firstname , age and height from  array.`as the values.
        }
    $html .= '</tr>';
    // start the body of the table.
    $hmtl .= '<tbody>';
    // rows with information
    foreach( $info as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . $value2 . '</td>';
        }
        $html .= '</tr>';
    }

      $hmtl .= '</tbody>';
    // closes table
    $html .= '</table>';
    return $html;
}

$info = array(
    array('First Name'=>'Victor','Age'=> '22', 'Height'=> '6.8'),
    array('First Name'=>'Luke', 'Age'=> '22', 'Height'=> '6.5'),
    array('First Name'=>'Anthony', 'Age'=> '21' ,'Height'=> '5.9')
);
echo "This table is for displaying info inside an array." ;
echo build_table($info);
*/
?>