<?php

include 'connection.php';
if(isset($_POST['submit']))
{  
	 $Account_Name = $_POST['Account_Name'];
	 $Project_Name = $_POST['Project_Name'];
     $email  = $_POST['email'];
     $category  = $_POST['category'];
     $messages  = $_POST['messages'];
     $content  = $_POST['content'];
     $customer  = $_POST['customer'];   
     
    
     $sql = "INSERT INTO idea (Account_Name, Project_Name, email, category, messages, content, customer) VALUES ('$Account_Name', '$Project_Name', '$email', '$category', '$messages', '$content', '$customer')";
     $data=mysqli_query($conn,$sql);
     if($data){
         header('Location: thank.htm');
         
     }else{
         echo "error";
     }
    
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Document</title>
    </head>

    <body>
        <section style=" background-image:linear-gradient(#00000025,rgba(0, 0, 0, 0.007)), url('https://st4.depositphotos.com/5531122/20443/i/1600/depositphotos_204435074-stock-photo-white-desk-office-laptop-smartphone.jpg');" >
          <h1 style="font-size: 60px;color: rgb(255, 4, 4);">I Have An Idea</h1>
            <div class="container">
                <form action="form1.php" method="POST">
                 
            
            <div class="form-group">
                <label for="Account_Name">Account Name</label>
                <input type="text" id="Account_Name" name="Account_Name"  placeholder="Enter your Account Name">
            </div>     

            <div class="form-group">
                <label for="Project_Name">Project Name</label>
                <input type="text" id="Project_Name" name="Project_Name" placeholder="Enter your Project Name" style="background-color: rgba(239, 247, 247, 0.712);" >
            </div>
            <div class="form-group">
            <label for="email">Email</label>    
            <input type="email" id="email" name="email" placeholder="email">
            </div>  
            
            <div class="form-group">
                <label for="category">Category</label><br>
                <select name="category" style="width: 480px;height: 30px;font-size: 17px;border: white; background-color: rgba(239, 247, 247, 0.712);">
                
                    <option value="Process">Process</option>
                    <option value="Automation" selected>Automation</option>
                    <option value="Productivity">Productivity</option>
               
                </select>
            </div>
          

            <div class="form-group">
                <label for="messages">Description Of The Idea</label>
                <textarea name="messages" cols="30" rows="4" required placeholder="Please enter your idea..."></textarea>
            </div>     

            <div class="form-group">
                <label for="content">Expected Benefits</label>
                <textarea name="content" cols="30" rows="4" style="background-color: rgba(239, 247, 247, 0.712);" placeholder="Please enter expected benifits..."></textarea>
            </div>   
           
            <div class="form-group">
                <label for="customer">Is This Customer Intellectual Property</label><br>
                <select name="customer" style="width: 480px;height: 30px;font-size: 17px;border: white;">
                
                    <option value="Yes">Yes</option>
                    <option value="No" selected>No</option>
               
                </select>
            </div>

    
            <input type="submit" name="submit" value="submit" style="color:red;width=100px;height=25px">

            </form>
           
            <a href="index.htm">Click here to go home page</a>
        
       
        </section>
    </body>
    </html>

    