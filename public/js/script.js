// _-_-_-_-_-_-_- ALL USER -_-_-_-_-_-_-_
// TOOLTIP
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

// CONFIRMATION SUBMIT
$(document).ready(function() {
    let empty = '<b class="text-danger">-DATA KOSONG-</b>';
    $('#submitButton').click(function() {
        // Input values
        let name = $('#prd_name').val()
        let dev = $('#prd_dev').val()
        let desc = $('#prd_desc').val()
        let category = $('#prd_category').val()
        let item = $('#prd_item_name').val()
        let status = $('#prd_status').val()
        let img = $('#prd_preview').attr('src')
        let imgItem = $('#item_preview').attr('src')
        
        let value = parseInt($("#tot_prc").val())
        for (let i = 0; i < value; i++) {
            let itemVol = $("[name='prd_prc_vol["+i+"]']").val()
            let itemPrc = $("[name='prd_prc["+i+"]']").val()
            $("#confPrdItems").append("<tr><td>"+(i+1)+"</td><td>. "+itemVol+" "+item+"</td><td class='px-2'>:</td><td>Rp "+itemPrc+"</td></tr>")
        }

        // Return values
        $("#confName").html(name ? name : empty)
        $("#confDev").html(dev ? dev :  empty)
        $("#confDesc").html(desc ? desc : empty )
        $("#confItem").html(item ? item : empty )
        category.includes('Pilih') ? $("#confCategory").html(empty) : $("#confCategory").html(category)
        status.includes('Pilih') ? $("#confStatus").html(empty) : $("#confStatus").html(status)
        img.includes('/default/') ? $("#confImg").parent().html(empty) : $("#confImg").attr('src', img)
        imgItem.includes('/default/') ? $("#confItemImg").parent().html(empty) : $("#confItemImg").attr('src', imgItem)
    });
    // Remove looping
    $("[data-bs-dismiss='modal']").click(function() {
        $("#confPrdItems").children().remove()
    })

    // CUST TRANSACTION
    $('#confirmationButton').click(function() {  
        let custId = $('#cust_gameid').val()
        let custItem = $('.card.active .item_name').text()
        let custPrice = $('.card.active .item_price').text()

        let custMetode = $('.card.active .method input').val()
        let custEmail = $('#cust_email').val()
        let custTelp = $('#cust_notelp').val()

        $("#custId").html(custId ? custId : empty)
        $('#custItem').html(custItem ? custItem : empty)
        $('#custHarga').html(custPrice ? custPrice : empty)
        $('#custMetode').html(custMetode ? custMetode : empty)
        custEmail.length==0 ? $("#custEmail").text("-") : $("#custEmail").text(custEmail)
        custTelp.length==0 ? $("#custTelp").text("-") : $("#custTelp").text(custTelp)
    })
});


// _-_-_-_-_-_-_- USER -_-_-_-_-_-_-_


// ITEM CARD ACTIVE
$(".items-choice li").click( function(){
    $(".card", this).toggleClass("active").
    parent().siblings().children().removeClass("active")

    let itemId = $('.card.active [name="item_id"]').val()
    $("[name='cust_itemid']").val(itemId)

    let getPrice = $('.card.active .item_price').text()
    $(".confirm h5 span").text(getPrice)

    let getMethod = $('.card.active .method input').val()
    $("[name='cust_method']").val(getMethod)
}); 

// NAVBAR DROPDOWN
$(".dropdown-kategori .dropdown-item").each(function () {
    $(".dropdown-kategori .dropdown-item").unbind().click(function () {
        let name = $(this).html()
        $("button:contains("+name+")").trigger("click") 
    });
});

$('#copy-clipboard').click(function(){
    var textCopy = $('#tsCode').text();
    var tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);
        tempTextarea.val(textCopy).select();
        document.execCommand('copy');
        tempTextarea.remove();
})






//  _-_-_-_-_-_-_- ADMIN -_-_-_-_-_-_-_

// LOGOUT
$("#btn-logout").click(function(){
  if(confirm("Anda yakin untuk logout?")){
    {{ route('logout')}}
  }
  else{
      return false;
  }
});

// PREVIEW IMAGE
$("#prd_img, #prd_item_img").on("change", function(){
    const file = this.files[0];
    const input = $(this)
    console.log(file);
    if (file){
        let reader = new FileReader();
        reader.onload = function(event){
            input.prev().children("img").attr('src', event.target.result)
        }
        reader.readAsDataURL(file);
    }
})

// NOMINAL LIST ADD DEL BUTTON 
$(function(){
    let i = $("#item_nominals li").length
    let value = $("#tot_prc")
    value.val(i)
    if(i>1){
        $("#btn_del_row").removeClass("disabled")
    }
    
    // NOMINAL ADD LIST
    $('#btn_add_row').click(function(){
        $("#item_nominals").append('<li class="mt-2"><div class="d-flex align-items-center"><input name="prd_prc_id['+i+']" hidden class="d-none"><input name="prd_prc_vol['+i+']" class="form-control" type="text" placeholder="Volume"><span class="ps-3 pe-2"><p class="my-auto">Rp</p></span><input name="prd_prc['+i+']" class="form-control" type="text" placeholder="Harga"></div></li>');
        $("#btn_del_row").removeClass("disabled")
        i++
        value.val(i)
    })
    // NOMINAL DEL LIST
    $('#btn_del_row').click(function(){
        if(i>1){
            $("#item_nominals li:last").remove();
            i--
            if(i<=1){
                $("#btn_del_row").addClass("disabled")
            }
            value.val(i)
        }
    })
}) 



