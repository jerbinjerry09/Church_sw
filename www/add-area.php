<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('breadcrumb.php'); ?>
    <a href="home.php">Home </a>
    <script language="javascript">

</script>
<style type="text/css">
    @font-face {
    font-family: myFirstFont;
    src: url(fonts/tamil.ttf);
}
.text{
     font-family: myFirstFont;
}
</style>

    <form action="controls/ctrl-add-place.php" name="family_form" method="POST" enctype="multipart/form-data">

        <table id="ttable" class="table table-striped table-hover">
            <thead>
                <th></th>
                <th>Area name in English</th>
                <th>Area name in Tamil</th>
               
                
            </thead>
            <tbody id="tbody-place">
            <tr>
                <td>1</td>
                <td>
                    <div class="form-group">
                        <input class="form-input" id="head0" type="text" name="e_name[]"placeholder="Name">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input class="form-input text" type="text" id="t_name1[]" name="t_name[]" placeholder="Tamil Name">
                    </div>
                </td>
               
            </tr>
            
            </tbody>
        </table>
        <button type="button" id="btAdd-place" class="btn btn-primary btn-lg mt-2 centered"><i class="icon icon-plus"></i> Add</button>
        
        <input type="submit" class="btn btn-primary btn-lg mt-2 centered" name="" value="Submit">
    </form>

<?php include('footer.php'); ?>