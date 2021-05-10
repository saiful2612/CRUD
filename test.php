<?php
  print_r($_POST);  
?>


<!DOCTYPE html>
<html>
<body>
<form id="myForm" action="test.php">
            <div id="Level1_Form"> <!--Use divs to space-->
                <div id="ContainInputDiv1-1">
                    <p class="level1InputP">First Name: <span class="formError" id="FNameErrorP"></span></p>
                    <input type="text" class="Level1InputTxt" id="fName"/>
                </div>
                <div id="ContainInputDiv1-2">
                    <p class="level1InputP">Last Name: <span class="formError" id="LNameErrorP"></span></p>
                    <input type="text" class="Level1InputTxt" id="lName"/>
                </div>
                <div id="ContainInputDiv1-3">
                    <p class="level1InputP">E-Mail: <span class="formError" id="ErrorEmailP"></span></p>
                    <input type="text" class="Level1InputTxt" id="eMail"/>
                    <p id="ErrorEMailP"></p>
                </div>
                <div id="ContainInputDiv1-4">
                    <p class="level1InputP">Phone Number: <span class="formError" id="ErrorPhoneNumP"></span></p>
                    <input type="text" class="Level1InputTxt" id="phoneNumber"/>
                </div>
            </div>
        </form>
</body>
</html>