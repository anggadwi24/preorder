
import baseUrl from "../base.js";
import basePath from "../domain.js";

import success from "../success.js";
import successBack from "../success-back.js";
import successRedirect from "../success-redirect.js";
import errorRedirect from "../error-redirect.js";



import error from "../error.js";
import waiting from "../loading.js";
import out from "../loadingOut.js";

data();
    function data(){
        $.ajax({
            type:'POST',
            url:baseUrl+'site/checkout/data',
            dataType:'json',
            beforeSend:function(){
                    waiting();
            },success:function(resp){
                // console.log(resp);
                if(resp.status == true){
                    $('#dataCheckout').html(resp.output);
                }else{
                    if(resp.redirect == null){
                        error('Peringatan',resp.msg);
                    }else{
                        errorRedirect('Peringatan',resp.msg,resp.redirect);
                    }
                    
                }
            },complete:function(){
                out();
            }

        })
    }
    $(document).on('change','#provinsi',function(){
        var id = $(this).val();
        $.ajax({
            type:'POST',
            url:baseUrl+'site/ajax/kabupaten',
            data:{id:id},
            dataType:'json',
            beforeSend:function(){
          
                $('#kabupaten').html($('<option>', {
                    
                    text: 'Loading...',
                }));
            },success:function(resp){
                   
                    $('#kabupaten').html(resp);
                    // $('#kabupaten').removeClass('form-control');
                  
                    
               
                
            }
    
        })
    
    });