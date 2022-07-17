import baseUrl from "../base.js";
import basePath from "../domain.js";

import success from "../success.js";
import successBack from "../success-back.js";
import successRedirect from "../success-redirect.js";

import error from "../error.js";
var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate()+1);
$('.dateTime').bootstrapMaterialDatePicker({ 
    format : 'YYYY-MM-DD HH:mm' 

});  
$(document).on('change','#status',function(){
    var status = $(this).val();
    if(status == 'preorder'){
        $('.formBatch').css('display','');
    }else{
        $('.formBatch').css('display','none');
    }
})
$(document).on('submit','#formAct',function(e){
    e.preventDefault();
   
    var formData = new FormData(this);
    $(document).ajaxStart(function() { Pace.restart(); });
      
    
    
  
    $.ajax({
        type:'POST',
        url:baseUrl+'produk/store',
        data: formData,
        contentType: false,
        cache: false,
        processData:false,
        dataType :'json',
        beforeSend:function(){
           
            $('input').attr('disabled',true);
            $('select').attr('disabled',true);
            $('button').attr('disabled',true);
            $('textarea').attr('disabled',true);



        },success:function(resp){
            
            if(resp.status == true){
                $('input').val('');
                $('select').val('');
                $('textarea').val('');

                
                successBack('Berhasil',resp.msg,resp.redirect);
            }else{
                error('Peringatan',resp.msg);
            }
        },complete:function(){
            $('input').attr('disabled',false);
            $('select').attr('disabled',false);
            $('button').attr('disabled',false);
            $('textarea').attr('disabled',false);




           
        }
    })
            
   
})