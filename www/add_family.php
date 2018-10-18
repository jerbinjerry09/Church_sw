<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Family</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
     <!-- <script type="text/javascript" src="js/tamil.js"></script> -->
</head>
<body>
    <a href="home.php">Home </a>
    <script language="javascript">
        $(document).ready(function() {

             var iCnt = 0;
              var container = $(document.createElement('tr'));

        });

</script>

<input type="text" onfocus="javascript:openKeyboard();" />
    <form action="add_family_check.php" name="family_form" method="POST">
        <table>
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
            <tr>
                <td>2</td>
                <td><input type="text" name="e_name[]"/></td>
                <td><input type="text" name="t_name[]"/></td>
                <td><input type="text" name="dob[]"/></td>
                <td><input type="text" name="dobp[]"/></td>
                <td><select name="relation[]">
                        <option value="W/o">W/o</option>
                        <option value="S/o">S/o</option>
                        <option value="D/o">D/o</option>
                        <option value="Family Head">Family Head</option>
                    </select>
                </td>
                <td><input type="radio" name="sex[1]" value="Male" />Male <input type="radio" name="sex[1]" value="Female">Female</td>
                <td><input type="text" name="occupation[]"></td>
                <td><input type="radio" name="sts[1]" value="late" />Late <input type="radio" name="sts[1]" value="1">Live</td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="text" name="e_name[]"/></td>
                <td><input type="text" name="t_name[]"/></td>
                <td><input type="text" name="dob[]"/></td>
                <td><input type="text" name="dobp[]"/></td>
                <td><select name="relation[]">
                        <option value="W/o">W/o</option>
                        <option value="S/o">S/o</option>
                        <option value="D/o">D/o</option>
                        <option value="Family Head">Family Head</option>
                    </select>
                </td>
                <td><input type="radio" name="sex[2]" value="Male" />Male <input type="radio" name="sex[2]" value="Female">Female</td>
                <td><input type="text" name="occupation[]"></td>
                <td><input type="radio" name="sts[2]" value="late" />Late <input type="radio" name="sts[2]" value="1">Live</td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="text" name="e_name[]"/></td>
                <td><input type="text" name="t_name[]"/></td>
                <td><input type="text" name="dob[]"/></td>
                <td><input type="text" name="dobp[]"/></td>
                <td><select name="relation[]">
                        <option value="W/o">W/o</option>
                        <option value="S/o">S/o</option>
                        <option value="D/o">D/o</option>
                        <option value="Family Head">Family Head</option>
                    </select>
                </td>
                <td><input type="radio" name="sex[3]" value="Male" />Male <input type="radio" name="sex[3]" value="Female">Female</td>
                <td><input type="text" name="occupation[]"></td>
                <td><input type="radio" name="sts[3]" value="late" />Late <input type="radio" name="sts[3]" value="1">Live</td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="text" name="e_name[]"/></td>
                <td><input type="text" name="t_name[]"/></td>
                <td><input type="text" name="dob[]"/></td>
                <td><input type="text" name="dobp[]"/></td>
                <td><select name="relation[]">
                        <option value="W/o">W/o</option>
                        <option value="S/o">S/o</option>
                        <option value="D/o">D/o</option>
                        <option value="Family Head">Family Head</option>
                    </select>
                </td>
                <td><input type="radio" name="sex[4]" value="Male" />Male <input type="radio" name="sex[4]" value="Female">Female</td>
                <td><input type="text" name="occupation[]"></td>
                <td><input type="radio" name="sts[4]" value="late" />Late <input type="radio" name="sts[4]" value="1">Live</td>
            </tr>
            <tr>
                <td>6</td>
                <td><input type="text" name="e_name[]"/></td>
                <td><input type="text" name="t_name[]"/></td>
                <td><input type="text" name="dob[]"/></td>
                <td><input type="text" name="dobp[]"/></td>
                <td><select name="relation[]">
                        <option value="W/o">W/o</option>
                        <option value="S/o">S/o</option>
                        <option value="D/o">D/o</option>
                        <option value="Family Head">Family Head</option>
                    </select>
                </td>
                <td><input type="radio" name="sex[5]" value="Male" />Male <input type="radio" name="sex[5]" value="Female">Female</td>
                <td><input type="text" name="occupation[]"></td>
                <td><input type="radio" name="sts[5]" value="late" />Late <input type="radio" name="sts[5]" value="1">Live</td>
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