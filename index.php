<!doctype html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dms Test</title>
<link href="davestyles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
<table class="barney" cellpadding="20px" border="thin #000 solid">
<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

$data = $people;

  foreach($data as $val) : ?>
   <tr>
    <td><?php echo $val['first_name'] ?></td>
    <td><?php echo $val['last_name'] ?></td>
    <td><?php echo $val['email'] ?></td>
      <?php  $details = $val['first_name'] .' '. $val['last_name'].'\n'. $val['email']; ?>
    <td><button type="button" value="<?php echo $details;?>" onclick="alert('<?php echo $details;?>')" class="button1" id="block" >More</button></td>
  <?php
  endforeach;
  ?>
  </tr>
 
</table>

</div>
</body>
</html>
