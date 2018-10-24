 $(document).ready(function() {

             var iCnt = 0;
              // var container = $(document.createElement('tr'));
              $('#btAdd').click(function() {
            if (iCnt <= 19) {

                iCnt = iCnt + 1;

                // ADD TEXTBOX.
                // $('#tbody').append('<tr><td><input type=text class="input" id=tb' + iCnt + ' ' +
                 // 'value="Text Element ' + iCnt + '" /></td></tr>');


                $('#tbody').append('<tr id="row-'+iCnt+'"><td>' + (iCnt+1) + '</td>'+
                '<td>'+
                    '<div class="form-group">'+
                        '<input class="form-input"  id="head'+iCnt+'"  type="text" placeholder="Name" name="e_name[]"/>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div class="form-group">'+
                        '<input class="form-input" id="e_name'+iCnt+'"  type="text" id="t_name1" placeholder="Tamil Name" name="t_name[]"/>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div class="form-group">'+
                        '<input class="form-input" placeholder="Date of birth" type="date" name="dob[]"/>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div class="form-group">'+
                        '<input class="form-input" placeholder="Date of baptism" type="date" name="dobp[]"/>'+
                    '</div></td>'+
                 '<td>'+
                    '<div class="form-group">'+
                        '<label class="form-radio form-inline">'+
                            '<input type="radio" name="head" value="H'+iCnt+'" class="head" data-id="head'+iCnt+'" ><i class="form-icon"></i> Head'+
                        '</label>'+
                    '</div>'+               
                '</td>'+
                '<td>'+
                    '<div class="form-group"><select class="form-input"  name="relation[]">'+
                        '<option value="W/o">W/o</option>'+
                        '<option value="S/o">S/o</option>'+
                        '<option value="D/o">D/o</option>'+
                        '<option value="H/o">H/o</option>'+
                    '</select></div>'+
                '</td>'+
                '<td>'+
                    '<div class="form-group">'+
                        '<label class="form-radio form-inline">'+
                            '<input type="radio" name="sex[' + iCnt + ']" value="Male" checked=""><i class="form-icon"></i> Male'+
                        '</label>'+
                        '<label class="form-radio form-inline">'+
                            '<input type="radio" name="sex[' + iCnt + ']" value="Female"><i class="form-icon"></i> Female'+
                        '</label>'+
                    '</div>'+               
                '</td>'+
                '<td>'+
                    '<div class="form-group">'+
                        '<input class="form-input"  type="file" name="m_photo[]" >'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div class="form-group">  '+
                        '<label class="form-radio form-inline">'+
                            '<input type="radio" name="sts[' + iCnt + ']" value="late" ><i class="form-icon"></i> Late  '+
                        '</label>'+
                        '<label class="form-radio form-inline">'+
                            '<input type="radio" name="sts[' + iCnt + ']" value="1"><i class="form-icon"></i> Live '+
                        '</label>'+
                    '</div>'+
                '</td>'+
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
        
/*=======================Selecting  Family Head ===================================> */ 
         $('.head').click(function()
         	{
         		var id=$(this).attr('data-id');
         		var head=$('#'+id).val();
         		$('#family_head').val(head);

         	});












/*End of document.read */
        });
