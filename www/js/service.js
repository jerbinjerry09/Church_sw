 $(document).ready(function() {


     var iCnt = 0;
     // var container = $(document.createElement('tr'));
     $('#btAdd').click(function() {
         if (iCnt <= 19) {

             iCnt = iCnt + 1;

             // ADD TEXTBOX.
             // $('#tbody').append('<tr><td><input type=text class="input" id=tb' + iCnt + ' ' +
             // 'value="Text Element ' + iCnt + '" /></td></tr>');


             $('#tbody').append('<tr id="row-' + iCnt + '"><td>' + (iCnt + 1) + '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input"  id="head' + iCnt + '"  type="text" placeholder="Name" name="e_name[]"/>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input" id="t_name' + iCnt + '"  type="text"  placeholder="Tamil Name" name="t_name[]"/>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input" placeholder="Date of birth" type="date" name="dob[]"/>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input" placeholder="Date of baptism" type="date" name="dobp[]"/>' +
                 '</div></td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<label class="form-radio form-inline">' +
                 '<input type="radio" name="head" value="H' + iCnt + '" class="head" data-id="head' + iCnt + '" ><i class="form-icon"></i> Head' +
                 '</label>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group"><select class="form-input"  name="relation[]">' +
                 '<option value="W/o">W/o</option>' +
                 '<option value="S/o">S/o</option>' +
                 '<option value="D/o">D/o</option>' +
                 '<option value="H/o">H/o</option>' +
                 '</select></div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<label class="form-radio form-inline">' +
                 '<input type="radio" name="sex[' + iCnt + ']" value="Male" checked=""><i class="form-icon"></i> Male' +
                 '</label>' +
                 '<label class="form-radio form-inline">' +
                 '<input type="radio" name="sex[' + iCnt + ']" value="Female"><i class="form-icon"></i> Female' +
                 '</label>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input"  type="file" name="m_photo[]" >' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">  ' +
                 '<label class="form-checkbox form-inline" >' +
                 '<input type="radio" name="sts[' + iCnt + ']" value="late" ><i class="form-icon"></i> Late  ' +
                 '</label>' +
                 '<label class="form-checkbox form-inline" style="display: none;">' +
                 '<input type="radio" name="sts[' + iCnt + ']" value="1" checked="checked"><i class="form-icon"></i> Live ' +
                 '</label>' +
                 '</div>' +
                 '</td>' +
                 '</tr>');

         }
         // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
         // (20 IS THE LIMIT WE HAVE SET)
         else {
             style = "visibility: hidden;"
             $(container).append('<label>Reached the limit</label>');
             $('#btAdd').attr('class', 'bt-disable');
             $('#btAdd').attr('disabled', 'disabled');
         }
     });

     /*==================Add extra place ==========================*/

     var aCnt = 0;
     // var container = $(document.createElement('tr'));
     $('#btAdd-place').click(function() {
         if (aCnt <= 19) {

             aCnt = aCnt + 1;

             // ADD TEXTBOX.
             // $('#tbody').append('<tr><td><input type=text class="input" id=tb' + iCnt + ' ' +
             // 'value="Text Element ' + iCnt + '" /></td></tr>');


             $('#tbody-place').append('<tr id="row-' + aCnt + '"><td>' + (aCnt + 1) + '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input"    type="text" placeholder="Name" name="e_name[]"/>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input"   type="text"  placeholder="Tamil Name" name="t_name[]"/>' +
                 '</div>' +
                 '</td>' +

                 '</tr>');

         }
         // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
         // (20 IS THE LIMIT WE HAVE SET)
         else {
             $(container).append('<label>Reached the limit</label>');
             $('#btAdd').attr('class', 'bt-disable');
             $('#btAdd').attr('disabled', 'disabled');
         }
     });
     /*==================End of add extra place====================*/
     /*==================Add extra category ==========================*/

     var aCnt = 0;
     // var container = $(document.createElement('tr'));
     $('#btAdd-cat').click(function() {
         if (aCnt <= 19) {

             aCnt = aCnt + 1;

             // ADD TEXTBOX.
             // $('#tbody').append('<tr><td><input type=text class="input" id=tb' + iCnt + ' ' +
             // 'value="Text Element ' + iCnt + '" /></td></tr>');


             $('#tbody-cat').append('<tr id="row-' + aCnt + '"><td>' + (aCnt + 1) + '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input"    type="text" placeholder="Category Name" name="e_name[]"/>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input"   type="text"  placeholder="Tamil Name" name="t_name[]"/>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input"   type="text"  placeholder="Description" name="desc[]"/>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<input class="form-input"   type="text"  placeholder="Frequency" name="freq[]"/>' +
                 '</div>' +
                 '</td>' +
                 '<td>' +
                 '<div class="form-group">' +
                 '<select name="cat_type[]">' +
                 '<option value="Income">Income</option>' +
                 '<option value="Expence">Expence</option>' +
                 '</select>' +
                 '</div>' +
                 '</td>' +

                 '</tr>');

         }
         // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
         // (20 IS THE LIMIT WE HAVE SET)
         else {
             $(container).append('<label>Reached the limit</label>');
             $('#btAdd').attr('class', 'bt-disable');
             $('#btAdd').attr('disabled', 'disabled');
         }
     });
     /*==================End of add extra category====================*/
     /*=======================Selecting  Family Head ===================================> */
     $('.head').click(function() {
         var id = $(this).attr('data-id');
         var head = $('#' + id).val();
         $('#family_head').val(head);

     });


     /*======================== end of Selecting  Family Head  ===========================================*/
     $('#input-barcode').change(function() {
         $('#loader').show();
         // alert();
         var id1 = $(this).val();

         var input_date = $('#input-date').val();
         var cat = $('#cat').val();
         var f_id = $('#f_id').val();
         $('#input-barcode').val('');
         //alert(id1);
         $.ajax({
             type: "GET",
             url: "../controls/populate-family.php",
             data: { id: id1 },
             dataType: "json",
             success: function(data) {
                 //$("#div1").html(result);
                 //alert(data);
                 $('#member_list').html('');
                 $('#family_id_title').html(data['family_id']);
                 $('#family_place_title').html(data['place']);
                 $('#family_id').val(data['family_id']);
                 $('#receipt_no').html(data['receipt'] + 1);
                 for (var i = data['member'].length - 1; i >= 0; i--) {

                     if (data['member_id'] == data['member'][i].id) {
                         var check = ' checked="" ';
                         var mem = 1;
                         $('#member_id').val(data['member'][i].id);
                         // alert();
                     } else if ((data['member'][i].member_type == 1) && mem != 1) {
                         $('#member_id').val(data['member'][i].id);
                         var check = ' checked="" ';
                     } else {
                         if (data['member'][i].member_type == 1) {

                             // alert(data['member_id']+data['member'][i].id);
                             $('#family_head_title').html(data['member'][i].name + '  <a href="contrls/edit_family.php?id=' + data['family_id'] + '"<i class="ml-2 icon icon-edit"></i>');
                             // $('#member_id').val(data['member'][i].id);

                         } else {
                             var check = ' ';
                         }
                     }

                     $('#member_list').prepend('<div class="tile tile-centered mt-2">' +
                         '<div class="tile-content">' +
                         '<div class="tile-title text-bold">' +
                         '<div class="form-group">' +
                         '<label class="form-radio form-inline">' +
                         '<input type="radio" name="member" ' + check + '><i class="form-icon"></i> ' + data['member'][i].name +
                         '</label>' +
                         '</div>' +
                         '</div>' +

                         '</div>' +

                         '</div>');
                     if (data['cat'] == '6') {
                         $('.receipt_panel').css('display', 'none');
                         $('#bday_panel').show();
                         $('#category_id').val(data['cat']);
                         $('member_id').val(data['member_id']);
                     } else if (data['cat'] == '0') {
                         $('.receipt_panel').css('display', 'none');
                         $('#default_panel').show();
                         $('#category_id').val(data['cat']);
                     } else {
                         $('.receipt_panel').css('display', 'none');
                         $('#common_panel').show();
                         $('#category_id').val(data['cat']);
                     }
                 }
                 // alert(JSON.stringify(data['member'][0].name));
                 // alert(data['member'].[0].name);

             },
             error: function(errorThrown) {
                 alert(JSON.stringify(errorThrown));
             }
         });
         // alert(input_date+'------'+cat+'-------'+f_id);
     });

     /*====================== Receipt Entry ================== */
     $('#default_submit').click(function() {

         alert();
         $('#loader').show();
         var amt1 = $('#monthly_amt').val();
         var desc1 = $('#monthly_desc').val();
         var amt2 = $('#msnry_amt').val();
         var desc2 = $('#msnry_desc').val();
         var amt3 = $('#rice_amt').val();
         var desc3 = $('#rice_desc').val();
         var f_id = $('#family_id').val();
         var m_id = $('#member_id').val();
         var r_date = $('#receipt_date').val();
         $.ajax({
             type: "POST",
             url: "../controls/receipt_check.php",
             data: {
                 cat_id: 0,
                 monthly_amt: amt1,
                 monthly_desc: desc1,
                 msnry_amt: amt2,
                 msnry_desc: desc2,
                 rice_amt: amt3,
                 rice_desc: desc3,
                 family_id: f_id,
                 member_id: m_id,
                 receipt_date: r_date,
             },
             // dataType: "json",
             success: function(data) {
                 //alert(JSON.stringify(data));
                 $('.clear').val('');
                 $('.receipt_panel').hide();
                 $('#test').html("Data Inserted");
             },
             error: function(xhtp) {
                 alert('error' + JSON.stringify(xhtp));
                 //$('#test').html(JSON.stringify(xhtp));
             }
         });

     });




     $('#bday_submit').click(function() {

         alert();
         $('#loader').show();
         var amt1 = $('#bday_amt').val();
         var desc1 = $('#bday_desc').val();
         var cat_id1 = $('#category_id').val();

         var f_id = $('#family_id').val();
         var m_id = $('#member_id').val();
         var r_date = $('#receipt_date').val();
         $.ajax({
             type: "POST",
             url: "../controls/receipt_check.php",
             data: {
                 cat_id: cat_id1,
                 bday_amt: amt1,
                 bday_desc: desc1,
                 family_id: f_id,
                 member_id: m_id,
                 receipt_date: r_date,
             },
             // dataType: "json",
             success: function(data) {
                 //alert(JSON.stringify(data));
                 $('.clear').val('');
                 $('.receipt_panel').hide();
                 $('#test').html("Data Inserted");
             },
             error: function(xhtp) {
                 alert('error' + JSON.stringify(xhtp));
                 //$('#test').html(JSON.stringify(xhtp));
             }
         });

     });








     /*End of document.read */
 });