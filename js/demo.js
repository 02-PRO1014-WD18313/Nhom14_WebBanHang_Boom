function tang(){   
  
     document.getElementById('sl').value++;  
    }
 
 function giam(){   
     if(document.getElementById('sl').value >1)
     document.getElementById('sl').value--;  
 
 if(document.getElementById('sl').value <0)
     document.getElementById('sl').value=1;  
 }
 var sl0 = document.getElementsByClassName('sl0');
    var pr0 = document.getElementsByClassName('pr0');
    var price0 = document.getElementsByClassName('price_0');
  
             function tang0(i){   
        sl0[i].value++;  
        var conten = parseInt(sl0[i].value) *parseInt(pr0[i].value);
        price0[i].innerHTML=conten.toLocaleString("en-US") + "đ";
        var tong = 0;
        var sl = 0;
        for(var j = 0;j<sl0.length;j++){
            tong = tong+ parseInt(sl0[j].value) *parseInt(pr0[j].value);
            sl = sl + parseInt(sl0[j].value);
        }
        document.getElementById('total-product').innerHTML = sl;
        document.getElementById('total-not-discount').innerHTML = tong.toLocaleString("en-US") + "đ";
        document.getElementById('order-price-total').innerHTML = tong.toLocaleString("en-US") + "đ";
    }
    function giam0(i){   
        if(sl0[i].value >1){
        sl0[i].value--;  
        var conten = parseInt(sl0[i].value) *parseInt(pr0[i].value);
        price0[i].innerHTML=conten.toLocaleString("en-US") + "đ";
        var tong = 0;
        var sl = 0;
        for(var j = 0;j<sl0.length;j++){
            tong = tong+ parseInt(sl0[j].value) *parseInt(pr0[j].value);
            sl = sl + parseInt(sl0[j].value);
        }
        document.getElementById('total-product').innerHTML = sl;
        document.getElementById('total-not-discount').innerHTML = tong.toLocaleString("en-US") + "đ";
        document.getElementById('order-price-total').innerHTML = tong.toLocaleString("en-US") + "đ";
        }
    if(document.getElementById('sl0').value <0)
        document.getElementById('sl0').value=1;  
    }
