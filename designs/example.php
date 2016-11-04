<?php











 class car{
  	public $make;
	  public $model;
  	public $year;
     }
   
   class carFactory{

      public static function createcar($make,$model,$year){
        $obj= new car;
        $obj->make = $make;
        $obj->model= $model;
        $obj->year = $year;
        
        return $obj;
      }
    }
    // create the car here.
    //$car = carFactory::createcar('ford','fiesta','2016');
    // collection saves the car info as an array, car is  passed to  collection
    //$collection[]=$car
    // This is extra way to do stuff
    $cars[]= carFactory::createcar('ford','fiesta','2016');
    $cars[]= carFactory::createcar('ford','mustang','2016');
  
  // code for reading csv file
  //w get and link will donwload whole link
  // now have a csv file,  read it and factory outputs these new objects.
    function readCSV($csvFile){
          $file_handle = fopen($csvFile, 'r');          
          $line_count =0;
          
          while (!feof($file_handle) ) { 
             //$line_of_text[] is an array
             // field names are in this  if statement
             if ($line_count==0){
               $field_names = array_values(fgetcsv($file_handle, 1024));
               //print_r($field_names);
             }
             //[] add vlaues to records with array combine takes field names and record 
            $records[] =  array_combine($field_names,fgetcsv($file_handle, 1024));
            $line_count++;
           
          }
         
          print_r($records);
          fclose($file_handle);
          return $records;
     }
  
    // once the regular function works, then worry about strucutre the program in the way it needs.
    $cars = readCSV('cars.csv');
    
    //print_r($cars);

    

   /*
  // code for reading csv file
  //csv
  // now have a csv file,  read it and factory outputs these new objects.
    function readCSV($csvFile){
          $file_handle = fopen($csvFile, 'r');          
          $line_count =0;
          
          while (!feof($file_handle) ) { 
             //$line_of_text[] is an array
             // field names are in this  if statement
             if ($line_count==0){
               $field_names = array_values(fgetcsv($file_handle, 1024));
               //print_r($field_names);
             }
             //[] add vlaues to records with array combine takes field names and record 
            $records[] =  array_combine($field_names,fgetcsv($file_handle, 1024));
            $line_count++;
           
          }
         
          print_r($records);
          fclose($file_handle);
          return $records;
     }
  
    // once the regular function works, then worry about strucutre the program in the way it needs.
    $cars = readCSV('cars.csv');
    

*/\
?>

