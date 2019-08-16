 <?php
$dbServername= "localhost";
$dbUsername="root";
$dbpassword="";
$dbName="it_company";
$connection=mysqli_connect($dbServername,$dbUsername,$dbpassword,$dbName);
/*  //checking connection stablishment.
if ($connection){
	echo "connection established";
}
else{
	die ("Erorr! connection failed.");
}
*/
$query_companyinfo="SELECT * FROM companyinfo"; //retriving companyInfo table
$result_companyInfo=$connection->query($query_companyinfo); //for companyinfo table

$query_department="SELECT * FROM department";
$result_department=$connection->query($query_department);

$query_department1="SELECT * FROM department WHERE Dep_ID='HR06'";
$result_department1=$connection->query($query_department1);
$query_department2="SELECT * FROM department WHERE Dep_ID='MBL03'";
$result_department2=$connection->query($query_department2);
$query_department3="SELECT * FROM department WHERE Dep_ID='MR02'";
$result_department3=$connection->query($query_department3);
$query_department4="SELECT * FROM department WHERE Dep_ID='RD05'";
$result_department4=$connection->query($query_department4);
$query_department5="SELECT * FROM department WHERE Dep_ID='WEB01'";
$result_department5=$connection->query($query_department5);

$query_employee1="SELECT * FROM employee WHERE Emp_ID='SK021'";
$result_employee1=$connection->query($query_employee1);
$query_employee2="SELECT * FROM employee WHERE Emp_ID='AK022'";
$result_employee2=$connection->query($query_employee2);
$query_employee3="SELECT * FROM employee WHERE Emp_ID='AS015'";
$result_employee3=$connection->query($query_employee3);
$query_employee4="SELECT * FROM employee WHERE Emp_ID='BP091'";
$result_employee4=$connection->query($query_employee4);
$query_employee5="SELECT * FROM employee WHERE Emp_ID='M4012'";
$result_employee5=$connection->query($query_employee5);

$query_products="SELECT * FROM products";
$result_products=$connection->query($query_products);

$xml=new DomDocument("1.0"); //creating empty xml file
$xml->formatOutput=true;

$it_comapany=$xml->createElement("it_company"); //creating root element
$xml->appendChild($it_comapany);

/*--------------Compnay info Tag STARTS-----------*/
while($row = mysqli_fetch_assoc($result_companyInfo)){
$company_info=$xml->createElement("company_info");
$it_comapany->appendChild($company_info);

$company_logo=$xml->createElement("company_logo");
$company_info->appendChild($company_logo);

$name_comp=$xml->createElement("company_name", $row["Name"]);
$company_info->appendChild($name_comp);

$address=$xml->createElement("company_address", $row["Address"]);
$company_info->appendChild($address);

$company_contact=$xml->createElement("company_contact", $row["Contact"]);
$company_info->appendChild($company_contact);

$site_url=$xml->createElement("website_url", $row["URL"]);
$company_info->appendChild($site_url);

$company_desc=$xml->createElement("company_desc", "AnonStack Infotech is the biggest IT Company in Nepal, established in 1990 it is working for the development of IT industry in Nepal");
$company_info->appendChild($company_desc);
}

$dep_management=$xml->createElement("management_team","Management Team");
$it_comapany->appendChild($dep_management);

$dep_management=$xml->createElement("dep_management");
$it_comapany->appendChild($dep_management);

/*--------------Compnay info Tag END-----------*/

/*--------------Employee Tag 1 - Start-----------*/
while($row = mysqli_fetch_assoc($result_employee1)){
$employee=$xml->createElement("employee");
$dep_management->appendChild($employee);
$employee->setAttribute("emp_id",$row["Emp_ID"]);

$job_title=$xml->createElement("job_title" ,$row["Emp_JobTitle"]);
$employee->appendChild($job_title);

$name=$xml->createElement("emp_name",$row["Emp_Name"]);
$employee->appendChild($name);
$name->setAttribute("title",$row["Emp_Title"]);

$contact=$xml->createElement("emp_contact",$row["Emp_Contact"]);
$employee->appendChild($contact);

$email=$xml->createElement("emp_email", $row["Emp_Email"]);
$employee->appendChild($email); 
$department=$xml->createElement("department");
$employee->appendChild($department);

while($row = mysqli_fetch_assoc($result_department1)){
$department->setAttribute("dep_id",$row["Dep_ID"]);
$name1=$xml->createElement("dep_name",$row["Dep_Name"]);
$department->appendChild($name1); 
$dep_location=$xml->createElement("dep_location",$row["location"]);
$department->appendChild($dep_location);}
}
/*--------------Employee Tag 1 - END-----------*/

/*--------------Employee Tag 2 - Start-----------*/
while($row = mysqli_fetch_assoc($result_employee2)){
/*-----------department 1 tag - STARTS------------*/
$employee=$xml->createElement("employee");
$dep_management->appendChild($employee);
$employee->setAttribute("emp_id",$row["Emp_ID"]);

$job_title=$xml->createElement("job_title" ,$row["Emp_JobTitle"]);
$employee->appendChild($job_title);

$name=$xml->createElement("emp_name",$row["Emp_Name"]);
$employee->appendChild($name);
$name->setAttribute("title",$row["Emp_Title"]);

$contact=$xml->createElement("emp_contact",$row["Emp_Contact"]);
$employee->appendChild($contact);

$email=$xml->createElement("emp_email", $row["Emp_Email"]);
$employee->appendChild($email); 
$department=$xml->createElement("department");
$employee->appendChild($department);

while($row = mysqli_fetch_assoc($result_department2)){
$department->setAttribute("dep_id",$row["Dep_ID"]);
$name1=$xml->createElement("dep_name",$row["Dep_Name"]);
$department->appendChild($name1); 
$dep_location=$xml->createElement("dep_location",$row["location"]);
$department->appendChild($dep_location);}
}
/*--------------Employee Tag 2 - END-----------*/

/*--------------Employee Tag 3 - Start-----------*/
while($row = mysqli_fetch_assoc($result_employee3)){
/*-----------department 1 tag - STARTS------------*/
$employee=$xml->createElement("employee");
$dep_management->appendChild($employee);
$employee->setAttribute("emp_id",$row["Emp_ID"]);

$job_title=$xml->createElement("job_title" ,$row["Emp_JobTitle"]);
$employee->appendChild($job_title);

$name=$xml->createElement("emp_name",$row["Emp_Name"]);
$employee->appendChild($name);
$name->setAttribute("title",$row["Emp_Title"]);

$contact=$xml->createElement("emp_contact",$row["Emp_Contact"]);
$employee->appendChild($contact);

$email=$xml->createElement("emp_email", $row["Emp_Email"]);
$employee->appendChild($email); 
$department=$xml->createElement("department");
$employee->appendChild($department);

while($row = mysqli_fetch_assoc($result_department3)){
$department->setAttribute("dep_id",$row["Dep_ID"]);
$name1=$xml->createElement("dep_name",$row["Dep_Name"]);
$department->appendChild($name1); 
$dep_location=$xml->createElement("dep_location",$row["location"]);
$department->appendChild($dep_location);}
}
/*--------------Employee Tag 3 - END-----------*/

/*--------------Employee Tag 4 - Start-----------*/
while($row = mysqli_fetch_assoc($result_employee4)){
/*-----------department 1 tag - STARTS------------*/
$employee=$xml->createElement("employee");
$dep_management->appendChild($employee);
$employee->setAttribute("emp_id",$row["Emp_ID"]);

$job_title=$xml->createElement("job_title" ,$row["Emp_JobTitle"]);
$employee->appendChild($job_title);

$name=$xml->createElement("emp_name",$row["Emp_Name"]);
$employee->appendChild($name);
$name->setAttribute("title",$row["Emp_Title"]);

$contact=$xml->createElement("emp_contact",$row["Emp_Contact"]);
$employee->appendChild($contact);

$email=$xml->createElement("emp_email", $row["Emp_Email"]);
$employee->appendChild($email); 
$department=$xml->createElement("department");
$employee->appendChild($department);

while($row = mysqli_fetch_assoc($result_department4)){
$department->setAttribute("dep_id",$row["Dep_ID"]);
$name1=$xml->createElement("dep_name",$row["Dep_Name"]);
$department->appendChild($name1); 
$dep_location=$xml->createElement("dep_location",$row["location"]);
$department->appendChild($dep_location);}
}
/*--------------Employee Tag 4 - END-----------*/

/*--------------Employee Tag 5 - Start-----------*/
while($row = mysqli_fetch_assoc($result_employee5)){
/*-----------department 1 tag - STARTS------------*/
$employee=$xml->createElement("employee");
$dep_management->appendChild($employee);
$employee->setAttribute("emp_id",$row["Emp_ID"]);

$job_title=$xml->createElement("job_title" ,$row["Emp_JobTitle"]);
$employee->appendChild($job_title);

$name=$xml->createElement("emp_name",$row["Emp_Name"]);
$employee->appendChild($name);
$name->setAttribute("title",$row["Emp_Title"]);

$contact=$xml->createElement("emp_contact",$row["Emp_Contact"]);
$employee->appendChild($contact);

$email=$xml->createElement("emp_email", $row["Emp_Email"]);
$employee->appendChild($email); 
$department=$xml->createElement("department");
$employee->appendChild($department);

while($row = mysqli_fetch_assoc($result_department5)){
$department->setAttribute("dep_id",$row["Dep_ID"]);
$name1=$xml->createElement("dep_name",$row["Dep_Name"]);
$department->appendChild($name1); 
$dep_location=$xml->createElement("dep_location",$row["location"]);
$department->appendChild($dep_location);}
}
/*--------------Employee Tag 5 - END-----------*/

/*-----------Product tag - START------------*/

$products=$xml->createElement("product", "Products");
$it_comapany->appendChild($products);

$services=$xml->createElement("services");
$it_comapany->appendChild($services);

while($row=mysqli_fetch_assoc($result_products)){
$product=$xml->createElement("products");
$product->setAttribute("p_category",$row["Category"]);
$services->appendChild($product);

$namep=$xml->createElement("p_name",$row["Name"]);
$product->appendChild($namep);

$description=$xml->createElement("p_description", $row["Description"]);
$product->appendChild($description);
}
/*-----------Product tag - END------------*/
echo "<xmp>".$xml->saveXML()."<xmp>";
$xml->save("catalog_17031260.xml") or die ("Erorr! unable to create xml file.");
 ?>