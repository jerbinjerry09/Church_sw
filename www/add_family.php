<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('breadcrumb.php'); ?>
    <a href="home.php">Home </a>
    <script language="javascript">

</script>


    <form action="controls/add_family_check.php" name="family_form" method="POST" enctype="multipart/form-data">

        <table id="ttable" class="table table-striped table-hover">
            <thead>
                <th></th>
                <th>Member Name</th>
                <th>Tamil Name</th>
                <th>Date of Birth</th>
                <th>Date of Baptism</th>
                <th></th>
                <th>Relation</th>
                <th>Gender</th>
                <th>Occupation</th>
                <th>Status</th>
                
            </thead>
            <tbody id="tbody">
            <tr>
                <td>1</td>
                <td>
                    <div class="form-group">
                        <input class="form-input" id="head0" type="text" name="e_name[]"placeholder="Name">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input class="form-input" type="text" id="t_name1[]" name="t_name[]" placeholder="Tamil Name">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input class="form-input"  type="date" name="dob[]" placeholder="Date of birth">
                    </div>
                <td>
                    <div class="form-group">
                        <input class="form-input" type="date" name="dobp[]" placeholder="Date of baptism">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label class="form-radio form-inline">
                            <input type="radio" name="head" value="H0" class="head" data-id="head0" ><i class="form-icon"></i> Head
                        </label>
                    </div>              
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-select"  name="relation[0]">
                            <option value="W/o">W/o</option>
                            <option value="S/o">S/o</option>
                            <option value="D/o">D/o</option>
                            <option value="H/o">H/o</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label class="form-radio form-inline">
                            <input type="radio" name="sex[0]" value="Male" checked=""><i class="form-icon"></i> Male
                        </label>
                        <label class="form-radio form-inline">
                            <input type="radio" name="sex[0]" value="Female"><i class="form-icon"></i> Female
                        </label>
                    </div>
                </td>    
                <td>
                    <div class="form-group">
                        <input class="form-input" type="file" name="m_photo[]">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label class="form-radio form-inline">
                            <input type="radio" name="sts[0]" value="late" checked=""><i class="form-icon"></i> Late
                        </label>
                        <label class="form-radio form-inline">
                            <input type="radio" name="sts[0]" value="1"><i class="form-icon"></i> Live
                        </label>
                    </div>
                </td>
            </tr>
            
            </tbody>
        </table>
        <button type="button" id="btAdd" class="btn btn-primary btn-lg mt-2 centered"><i class="icon icon-plus"></i> Add</button>
        <table class="table table-striped mt-2">
            <tr>
                <th>Area</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <select class="form-select"  name="place">
                            <option value="-">Select an Area</option>
                            <option value="2-place1">place1</option>
                            <option value="3-place2">place2</option>
                            <option value="4-place3">place3</option>
                            <option value="5-place4">place4</option>
                            <option value="6-place5">place5</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input class="form-input" type="text" name="phone" placeholder="Phone number">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <textarea class="form-input" id="input-example-3" placeholder="Textarea" rows="3" name="address"></textarea>
                    </div>
                </td>
            </tr>
        </table>
        <input type="hidden" name="family_head" id="family_head"/>
        <input type="submit" class="btn btn-primary btn-lg mt-2 centered" name="" value="Submit">
    </form>

<?php include('footer.php'); ?>