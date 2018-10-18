<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Family</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
     <!-- <script type="text/javascript" src="js/tamil.js"></script> -->
     <style type="text/css">
         input{
            color:red;
         }
     </style>
</head>
<body>
    <a href="home.php">Home </a>
    <script language="javascript">
        $(document).ready(function() {

             var iCnt = 1;
              // var container = $(document.createElement('tr'));
              $('#btAdd').click(function() {
            if (iCnt <= 19) {

                iCnt = iCnt + 1;

                // ADD TEXTBOX.
                // $('#tbody').append('<tr><td><input type=text class="input" id=tb' + iCnt + ' ' +
                 // 'value="Text Element ' + iCnt + '" /></td></tr>');


                $('#tbody').append('<tr><td>' + iCnt + '</td>'+
                '<td><input type="text" name="e_name[]"/></td>'+
                '<td><input type="text" id="t_name1" name="t_name[]"/></td>'+
                '<td><input type="text" name="dob[]"/></td>'+
                '<td><input type="text" name="dobp[]"/></td>'+
                '<td><select name="relation[]">'+
                        '<option value="W/o">W/o</option>'+
                        '<option value="S/o">S/o</option>'+
                        '<option value="D/o">D/o</option>'+
                        '<option value="Family Head">Family Head</option>'+
                    '</select>'+
                '</td>'+
                '<td><input type="radio" name="sex[' + iCnt + ']" value="Male" />Male <input type="radio" name="sex[' + iCnt + ']" value="Female">Female</td>'+
                '<td><input type="text" name="occupation[]"></td>'+
                '<td><input type="radio" name="sts[' + iCnt + ']" value="late" />Late <input type="radio" name="sts[' + iCnt + ']" value="1">Live</td></tr>');

            }
            // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
            // (20 IS THE LIMIT WE HAVE SET)
            else {      
                $(container).append('<label>Reached the limit</label>'); 
                $('#btAdd').attr('class', 'bt-disable'); 
                $('#btAdd').attr('disabled', 'disabled');
            }
        });


        });

</script>
<button id="btAdd">Add</button>

    <form action="add_family_check.php" name="family_form" method="POST">

        <table id="ttable">
            <thead>
                <th></th>
                <th>Member Name</th>
                <th>Tamil Name</th>
                <th>Date of Birth</th>
                <th>Date of Baptism</th>
                <th>Relation</th>
                <th>Gender</th>
                <th>Occupation</th>
                <th>Status</th>
                
            </thead>
            <tbody id="tbody">
            <tr>
                <td>1</td>
                <td><input type="text" name="e_name[]"/></td>
                <td><input type="text" id="t_name1" name="t_name[]"/></td>
                <td><input type="text" name="dob[]"/></td>
                <td><input type="text" name="dobp[]"/></td>
                <td><select name="relation[]">
                        <option value="W/o">W/o</option>
                        <option value="S/o">S/o</option>
                        <option value="D/o">D/o</option>
                        <option value="Family Head">Family Head</option>
                    </select>
                </td>
                <td><input type="radio" name="sex[0]" value="Male" />Male <input type="radio" name="sex[0]" value="Female">Female</td>
                <td><input type="text" name="occupation[]"></td>
                <td><input type="radio" name="sts[0]" value="late" />Late <input type="radio" name="sts[0]" value="1">Live</td>
            </tr>
            
            </tbody>
        </table>
        <table>
            <tr>
                <th>Area</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
            <tr>
                <td><select name="place">
                        <option value="-">Select an Area</option>
                        <option value="2-place1">place1</option>
                        <option value="3-place2">place2</option>
                        <option value="4-place3">place3</option>
                        <option value="5-place4">place4</option>
                        <option value="6-place5">place5</option>
                    </select>
                </td>
                <td><input type="text" name="phone"></td>
                <td><textarea name="address"></textarea></td>
            </tr>
        </table>
        <input type="submit" name="" value="Submit">
    </form>
</body>
</html>